package br.com.sunset.ctr;

import java.sql.ResultSet;
import br.com.sunset.dto.LivroDTO;
import br.com.sunset.dao.LivroDAO;
import br.com.sunset.dao.ConexaoDAO;

public class LivroCTR {
    LivroDAO livroDAO = new LivroDAO();

    public LivroCTR() {
    }
    
    public String inserirLivro(LivroDTO livroDTO) {
        try {
            if (livroDAO.inserirLivro(livroDTO)) {
                return "Livro Cadastrado com Sucesso!!!";
            } else {
                return "Livro NÃO Cadastrado!!!";
            }
        }	
        catch (Exception e) {
            System.out.println(e.getMessage());
            return "Livro NÃO Cadastrado";
        }
    }

    public String alterarLivro(LivroDTO livroDTO) {
        try {
            if (livroDAO.alterarLivro(livroDTO)) {
                return "Livro Alterado com Sucesso!!!";
            } else {
                return "Livro NÃO Alterado!!!";
            }
        } 
        catch (Exception e) {
            System.out.println(e.getMessage());
            return "Livro NÃO Alterado!!!";
        }
    }

    public String excluirLivro(LivroDTO livroDTO) {
        try {
            if (livroDAO.excluirLivro(livroDTO)) {
                return "Livro Excluído com Sucesso!!!";
            } else {
                return "Livro NÃO Excluído!!!";
            }
        } 
        catch (Exception e) {
            System.out.println(e.getMessage());
            return "Livro NÃO Excluído!!!";
        }
    }

    public ResultSet consultarLivro(LivroDTO livroDTO, int opcao) {
        ResultSet rs = null;
        rs = livroDAO.consultarLivro(livroDTO, opcao);
        return rs;
    }

    public void CloseDB() {
        ConexaoDAO.CloseDB();
    }
}
