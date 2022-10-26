package br.com.sunset.dao;

import br.com.sunset.dto.LivroDTO;
import java.sql.*;

public class LivroDAO {
    public LivroDAO() {
    }
    private ResultSet rs = null;
    private Statement stmt = null;
    
    public boolean inserirLivro(LivroDTO livroDTO) {
        try {
            ConexaoDAO.ConectDB();
            stmt = ConexaoDAO.con.createStatement();
           String comando = "Insert into Livro (ISBN, dtaPubli, "
                    + "tituloLivro, temaLivro, localPubli, "
                    + "editoraLivro, sinopse, idioma) values ("
                    + "'" + livroDTO.getISBN() + "', "
                    + "'" + livroDTO.getDtaPubli() + "', "
                    + "'" + livroDTO.getTituloLivro() + "', "
                    + "'" + livroDTO.getTemaLivro() + "', "
                    + livroDTO.getLocalPubli() + ", "
                    + "'" + livroDTO.getEditoraLivro() + "', "
                    + "'" + livroDTO.getSinopse() + "', "
                    + "'" + livroDTO.getIdioma() + "',')";
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
    }
    
    public boolean alterarLivro(LivroDTO livroDTO) {
        try {
            ConexaoDAO.ConectDB();
            stmt = ConexaoDAO.con.createStatement();
            String comando = "Update Livro set "
                    + "ISBN = '" + livroDTO.getISBN() + "', "
                    + "dtaPubli = '" + livroDTO.getDtaPubli() + "', "
                    + "tituloLivro = '" + livroDTO.getTituloLivro() + "', "
                    + "temaLivro = '" + livroDTO.getTemaLivro() + "', "
                    + "localPubli = " + livroDTO.getLocalPubli() + ", "
                    + "editoraLivro = '" + livroDTO.getEditoraLivro() + "', "
                    + "sinopse = '" + livroDTO.getSinopse() + "', "
                    + "idioma = '" + livroDTO.getIdioma();
                   
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
                      "where ISBN = " + livroDTO.getISBN();
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
                              "where tituloLivro like '" + livroDTO.getTituloLivro() + "%' " +
                              "order by l.tituloLivro";
                    
                break;           

                case 2:
                    comando = "Select l.* "+
                              "from Livro l " +
                              "where l.ISBN = " + livroDTO.getISBN();
                break;
                case 3:
                    comando = "Select l.ISBN, l.dtaPubli "+
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