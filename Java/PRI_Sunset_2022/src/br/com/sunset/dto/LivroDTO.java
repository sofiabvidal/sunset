package br.com.sunset.dto;
public class LivroDTO {
    
    private int ISBN, idLivro;
    private String dtaPubli;
    private String tituloLivro, temaLivro, localPubli, editoraLivro, sinopse, idioma;

    public int getIdLivro() {
        return idLivro;
    }

    public void setIdLivro(int idLivro) {
        this.idLivro = idLivro;
    }
    
    public int getISBN() {
        return ISBN;
    }

    public void setISBN(int ISBN) {
        this.ISBN = ISBN;
    }

    public String getDtaPubli() {
        return dtaPubli;
    }

    public void setDtaPubli(String dtaPubli) {
        this.dtaPubli = dtaPubli;
    }
    

    public String getTituloLivro() {
        return tituloLivro;
    }

    public void setTituloLivro(String tituloLivro) {
        this.tituloLivro = tituloLivro;
    }

    public String getTemaLivro() {
        return temaLivro;
    }

    public void setTemaLivro(String temaLivro) {
        this.temaLivro = temaLivro;
    }

    public String getLocalPubli() {
        return localPubli;
    }

    public void setLocalPubli(String localPubli) {
        this.localPubli = localPubli;
    }

    public String getEditoraLivro() {
        return editoraLivro;
    }

    public void setEditoraLivro(String editoraLivro) {
        this.editoraLivro = editoraLivro;
    }

    public String getSinopse() {
        return sinopse;
    }

    public void setSinopse(String sinopse) {
        this.sinopse = sinopse;
    }

    public String getIdioma() {
        return idioma;
    }

    public void setIdioma(String idioma) {
        this.idioma = idioma;
    }
}


