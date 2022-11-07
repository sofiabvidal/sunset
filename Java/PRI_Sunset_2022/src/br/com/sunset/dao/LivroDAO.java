package br.com.sunset.dao;

import br.com.sunset.dto.LivroDTO;
import br.com.sunset.dto.AutorDTO;
import java.sql.*;

public class LivroDAO {
    public LivroDAO() {
    }
    private ResultSet rs = null;
    private Statement stmt = null;
    Statement stmt1 = null;
    
    public boolean inserirLivro(LivroDTO livroDTO, AutorDTO autorDTO) {
        try {
            ConexaoDAO.ConectDB();
            stmt = ConexaoDAO.con.createStatement();
            stmt1 = ConexaoDAO.con.createStatement();
           String comando = "Insert into Livro (ISBN, dtaPublicacao, "
                    + "tituloLivro, temaLivro, localPublicacao, "
                    + "editoraLivro, sinopse, idioma) values ("
                    + livroDTO.getISBN() + ", " //como é número não pode estar com aspas simples
                    + "'" + livroDTO.getDtaPubli() + "', "
                    + "'" + livroDTO.getTituloLivro() + "', "
                    + "'" + livroDTO.getTemaLivro() + "', "
                    + "'" + livroDTO.getLocalPubli() + "', " //é String então deve estar entre aspas simples.
                    + "'" + livroDTO.getEditoraLivro() + "', "
                    + "'" + livroDTO.getSinopse() + "', "
                    + "'" + livroDTO.getIdioma() + "')"; //como é o último campo não deve ter a vírgula.
            System.out.println(comando);
            stmt.execute(comando.toLowerCase());
            ConexaoDAO.con.commit();
            stmt.close();
            return true;
        }
        catch (Exception e) {
            System.out.println(e.getMessage());
            return false;
        }
        finally {
            ConexaoDAO.CloseDB();
        }
        
//        for(int cont=0; cont < autor.getRowCount(); cont++){
//                String comando2 = "Insert into livroAutor (idLivro idAutor, " 
//                    + "idLivroAutor) values ( "
//                    + rs.getInt("idLivroAutor") + ", "
//                    + autor.getValueAt(cont, 0) + ", "
//                    + autor.getValueAt(cont, 2) + ", "
//                    + autor.getValueAt(cont, 3) + "); ";
//                
//                stmt1.execute(comando2);
//            }
//            ConexaoDAO.con.commit();
//            stmt.close();
//            stmt1.close();
//            rs.close();
//            return true;
//        } 
//        catch (Exception e) {
//            System.out.println(e.getMessage());
//            return false;
//        }
//        finally {
//            ConexaoDAO.CloseDB();
//        }
//    }
    }
    
    public boolean alterarLivro(LivroDTO livroDTO) {
        try {
            ConexaoDAO.ConectDB();
            stmt = ConexaoDAO.con.createStatement();
            String comando = "Update Livro set "
                    + "ISBN = " + livroDTO.getISBN() + ", " //verificar as aspas simples nos números.
                    + "dtaPublicacao = '" + livroDTO.getDtaPubli() + "', "
                    + "tituloLivro = '" + livroDTO.getTituloLivro() + "', "
                    + "temaLivro = '" + livroDTO.getTemaLivro() + "', "
                    + "localPublicacao = '" + livroDTO.getLocalPubli() + "', " //faltou as aspas simples
                    + "editoraLivro = '" + livroDTO.getEditoraLivro() + "', "
                    + "sinopse = '" + livroDTO.getSinopse() + "', "
                    + "idioma = '" + livroDTO.getIdioma()   //como é um comando de update ficou faltando colocar o WHERE
                    + " where id_livro = " + livroDTO.getIdLivro(); //adicionei um ID para deixar você alterar o ISBN se quiser.
            
            stmt.execute(comando.toLowerCase());
            ConexaoDAO.con.commit();
            stmt.close();
            return true;
        }
        catch (Exception e) {
            System.out.println("Erro LivroDAO" +e.getMessage());
            return false;
        } 
        finally {
            ConexaoDAO.CloseDB();
        }
    }

    public boolean excluirLivro(LivroDTO livroDTO) {
        try {
            ConexaoDAO.ConectDB();
            stmt = ConexaoDAO.con.createStatement();    
            String comando = "Delete from Livro "+
                      "where idLivro = " + livroDTO.getIdLivro();
            stmt.execute(comando);
            ConexaoDAO.con.commit();
            stmt.close();
            return true;
        }
        catch (Exception e) {
            System.out.println(e.getMessage());
            return false;
        } 
        finally {
            ConexaoDAO.CloseDB();
        }
    }


public ResultSet consultarLivro(LivroDTO livroDTO, int opcao) {
        try {
            ConexaoDAO.ConectDB();
            stmt = ConexaoDAO.con.createStatement();
            String comando = "";
            
             switch (opcao){
                case 1:
                    comando = "Select l.* "+
                              "from Livro l "+
                              "where tituloLivro ilike '" + livroDTO.getTituloLivro() + "%' " +
                              "order by l.tituloLivro";
                    
                break;           

                case 2:
                    comando = "Select l.* "+
                              "from Livro l " +
                              "where l.idLivro = " + livroDTO.getIdLivro();
                break;
                case 3:
                    comando = "Select l.ISBN, l.dtaPublicacao "+
                              "from Livro l ";
                break;
            }
            rs = stmt.executeQuery(comando.toLowerCase());
            return rs;
        }
        catch (Exception e) {
            System.out.println(e.getMessage());
            return rs;
        }
    }
}