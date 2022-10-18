package br.com.sunset.dto;
public class LivroDTO {
    
    private int ISBN, dtaPubli, idAutor;
    private String tituloLivro, temaLivro, localPubli, editoraLivro, sinopse, idioma;

    public int getISBN() {
        return ISBN;
    }

    public void setISBN(int ISBN) {
        this.ISBN = ISBN;
    }

    public int getDtaPubli() {
        return dtaPubli;
    }

    public void setDtaPubli(int dtaPubli) {
        this.dtaPubli = dtaPubli;
    }
    
      public int getIdAutor() {
        return idAutor;
    }

    public void setIdAutor(int idAutor) {
        this.idAutor= idAutor;
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


