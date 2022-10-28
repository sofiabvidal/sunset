package br.com.sunset.dao;

import br.com.sunset.dto.AutorDTO;
import java.sql.*;

public class AutorDAO {
    public AutorDAO() {
    }
    private ResultSet rs = null;
    private Statement stmt = null;
    
    public boolean inserirAutor(AutorDTO autorDTO) {
        try {
            ConexaoDAO.ConectDB();
            stmt = ConexaoDAO.con.createStatement();
            String comando = "Insert into Autor (idade, tempoCarreira, "
                    + "nome) values ( "
                    + autorDTO.getIdade() + ", " ///aqui estava com aspas simples e não tem
                    + autorDTO.getTempoCarreira() + ", "
                    + "'" + autorDTO.getNome() + "')";
            stmt.execute(comando.toUpperCase());
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
    public boolean excluirAutor(AutorDTO autorDTO) {
        try {
            ConexaoDAO.ConectDB();
            stmt = ConexaoDAO.con.createStatement();
            String comando = "Delete from Autor where idAutor = " + autorDTO.getIdAutor();
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
    
    public boolean alterarAutor(AutorDTO autorDTO) {
        try {
            ConexaoDAO.ConectDB();
            stmt = ConexaoDAO.con.createStatement();
            String comando = "Update Autor set "
                    + "idade = " + autorDTO.getIdade() + ", " //aqui tinha aspas simples e não tem o campo é inteiro
                    + "tempoCarreira = " + autorDTO.getTempoCarreira() + ", "
                    + "nome = '" + autorDTO.getNome() + "' " //aqui não tem a vírgula
                    + "where idAutor = " + autorDTO.getIdAutor();
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
    
    public ResultSet consultarAutor(AutorDTO autorDTO, int opcao) {
        try {
            ConexaoDAO.ConectDB();
            stmt = ConexaoDAO.con.createStatement();
            String comando = "";
            
             switch (opcao){
                case 1:
                    comando = "Select a.* "+
                              "from Autor a "+
                              "where nome ilike '" + autorDTO.getNome()+ "%' " +  //aqui a pesquisa é por nome
                              "order by a.nome";
                    
                break;           

                case 2:
                    comando = "Select a.* "+
                              "from Autor a " +
                              "where a.idAutor = " + autorDTO.getIdAutor();
                break;
                case 3:
                    comando = "Select a.idAutor, a.idade "+
                              "from Autor a ";
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
