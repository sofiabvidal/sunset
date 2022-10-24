package br.com.sunset.ctr;

import java.sql.ResultSet;
import br.com.sunset.dto.AutorDTO;
import br.com.sunset.dao.AutorDAO;
import br.com.sunset.dao.ConexaoDAO;

public class AutorCTR {
     AutorDAO autorDAO = new AutorDAO();
     
    public AutorCTR() {
    }

    public String inserirAutor(AutorDTO autorDTO) {
        try {
            if (autorDAO.inserirAutor(autorDTO)) {
                return "Autor Cadastrado com Sucesso!!!";
            } else {
                return "Autor NÃO Cadastrado!!!";
            }
        } 		
        catch (Exception e) {
            System.out.println(e.getMessage());
            return "Autor NÃO Cadastrado";
        }
    }

    public String alterarAutor(AutorDTO autorDTO) {
        try {
            if (autorDAO.alterarAutor(autorDTO)) {
                return "Autor Alterado com Sucesso!!!";
            } else {
                return "Autor NÃO Alterado!!!";
            }
        }
        catch (Exception e) {
            System.out.println(e.getMessage());
            return "Autor NÃO Alterado!!!";
        }
    }

    public String excluirAutor(AutorDTO autorDTO) {
        try {
            if (autorDAO.excluirAutor(autorDTO)) {
                return "Autor Excluído com Sucesso!!!";
            } else {
                return "Autor NÃO Excluído!!!";
            }
        } 
        catch (Exception e) {
            System.out.println(e.getMessage());
            return "Autor NÃO Excluído!!!";
        }
    }

    public ResultSet consultarAutor(AutorDTO autorDTO, int opcao) {
        ResultSet rs = null;
        rs = autorDAO.consultarAutor(autorDTO, opcao);

        return rs;
    }
    
    public void CloseDB() {
        ConexaoDAO.CloseDB();
    }
}

    

