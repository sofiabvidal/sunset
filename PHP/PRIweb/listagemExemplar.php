<?php session_start();

/*

CREATE TABLE exemplar (
    idexemplar SERIAL,
    edicaoexemplar INT,
    anopublicacao VARCHAR(4),
    idlivro INT,
    CONSTRAINT pk_exemplar PRIMARY KEY (idexemplar),
    CONSTRAINT fk_livro FOREIGN KEY (idlivro) REFERENCES livro
);

*/

require "cabecalho.php";

require "conexao.php";

$sql = "select 
    exemplar.idexemplar AS idexemplar, 
    exemplar.edicaoexemplar AS edicaoexemplar, 
    exemplar.anopublicacao AS anopublicacao, 
    livro.titulolivro AS titulolivro, 
    livro.isbn AS isbn, 
    livro.editoralivro AS editoraLivro, 
    autor.nome AS autornome
    from ((
        (autor inner join livroAutor on autor.idAutor = livroAutor.idAutor) 
        inner join livro on livroAutor.idLivro = livro.idLivro) 
        inner join exemplar on exemplar.idlivro = livro.idlivro) order by exemplar.idexemplar";
$stmt = $conn -> query($sql);

if($_SESSION['logado'] == true):
?>

<br>
<div class="table-responsive" style="background-color: #D9A658; border-color: #F8CF86; color: white; opacity: 0.9; border-color: #F8CF86; color: white; opacity: 0.9; border-radius: 20px; padding: 20px;">
<table class="table table-striped ">
    <thead>
        <tr>

            <th scope="col" style="width: 5%;">ID</th>
            <th scope="col" style="width: 8%;">Edição</th>
            <th scope="col" style="width: 8%;">Ano de Publicação</th>
            <th scope="col" style="width: 9%;">Título</th>
            <th scope="col" style="width: 8%;">ISBN</th>
            <th scope="col" style="width: 8%;">Editora</th>
            <th scope="col" style="width: 9%;">Autor</th>
            <th scope="col" style="width: 18%;" colspan="2"></th>

        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $stmt->fetch()) {
            ?>
        <tr>
            <td><?= $row['idexemplar'] ?></td>
            <td><?= $row['edicaoexemplar'] ?></td>
            <td><?= $row['anopublicacao'] ?></td>
            <td><?= $row['titulolivro'] ?></td>
            <td><?= $row['isbn'] ?></td>
            <td><?= $row['editoralivro'] ?></td>
            <td><?= $row['autornome'] ?></td>
            <td>
                <a class="btn btn-sm btn-warning" 
                href="formAlterarExemplar.php?idexemplar=<?= $row['idexemplar']; ?>">
                    <span data-feather="edit"></span>
                    Editar
                </a>
            </td>
            <td>
                <a class="btn btn-sm btn-danger" 
                href="excluirExemplar.php?idexemplar=<?= $row['idexemplar']; ?>"
                onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;">
                    <span data-feather="trash-2"> </span>
                    Excluir
                </a>
            </td>
        </tr>

    <?php
            }
    ?>

    </tbody>
</table>
</div>
<a href="formularioExemplar.php">
        <style>
            .exemplar {
                width: 200px;
                margin-top: 20px;
                margin-right: 10px;
                margin-left: 10px;
            }
        </style>
    <button style="background-color: #D9A658; border-color: #F8CF86; color: white;" type="button" class="btn btn-danger exemplar"> Cadastrar novo Exemplar </button>
</a>

<?php 

elseif($_SESSION['logado_usuario'] == true):

?>

<br>
<div class="table-responsive" style="background-color: #D9A658; border-color: #F8CF86; color: white; opacity: 0.9; border-color: #F8CF86; color: white; opacity: 0.9; border-radius: 20px; padding: 20px;">
<table class="table table-striped ">
    <thead>
        <tr>

        <th scope="col" style="width: 5%;">ID</th>
            <th scope="col" style="width: 8%;">Edição</th>
            <th scope="col" style="width: 8%;">Ano de Publicação</th>
            <th scope="col" style="width: 9%;">Título</th>
            <th scope="col" style="width: 8%;">ISBN</th>
            <th scope="col" style="width: 8%;">Editora</th>
            <th scope="col" style="width: 9%;">Autor</th>
            <th scope="col" style="width: 9%;"></th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $stmt->fetch()) {
            ?>
        <tr>
            <td><?= $row['idexemplar'] ?></td>
            <td><?= $row['edicaoexemplar'] ?></td>
            <td><?= $row['anopublicacao'] ?></td>
            <td><?= $row['titulolivro'] ?></td>
            <td><?= $row['isbn'] ?></td>
            <td><?= $row['editoralivro'] ?></td>
            <td><?= $row['autornome'] ?></td>
            <td>
                <?php
                $status_emprestimo = false;
                $sql_validacao = "select statusemprestimo from emprestimo where idexemplar = " . $row['idexemplar'] . " order by idemprestimo desc limit 1";
                $stmt = $conn -> prepare($sql_validacao);
                $stmt -> execute();
                $row_validacao = $stmt->fetch();

                if (isset($row_validacao['statusemprestimo'])){
                    $status_emprestimo = $row_validacao['statusemprestimo'];
                }
                if ($row_validacao['statusemprestimo'] == false):
                ?>
                <a class="btn btn-sm btn-danger"
                    href="formAlugarExemplar.php?idexemplar=<?= $row['idexemplar']; ?>">
                        <span data-feather="edit"></span>
                        Realizar empréstimo
                </a>
                <?php
                endif;
                ?>
            </td>
        </tr>
  

    <?php
            }
    ?>
          
    </tbody>
</table>

</div>


<?php

else: 

?>

<br>
<div class="table-responsive" style="background-color: #D9A658; border-color: #F8CF86; color: white; opacity: 0.9; border-color: #F8CF86; color: white; opacity: 0.9; border-radius: 20px; padding: 20px;">
<table class="table table-striped ">
    <thead>
        <tr>

        <th scope="col" style="width: 5%;">ID</th>
            <th scope="col" style="width: 8%;">Edição</th>
            <th scope="col" style="width: 8%;">Ano de Publicação</th>
            <th scope="col" style="width: 9%;">Título</th>
            <th scope="col" style="width: 8%;">ISBN</th>
            <th scope="col" style="width: 8%;">Editora</th>
            <th scope="col" style="width: 9%;">Autor</th>

        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $stmt->fetch()) {
            ?>
        <tr>
            <td><?= $row['idexemplar'] ?></td>
            <td><?= $row['edicaoexemplar'] ?></td>
            <td><?= $row['anopublicacao'] ?></td>
            <td><?= $row['titulolivro'] ?></td>
            <td><?= $row['isbn'] ?></td>
            <td><?= $row['editoralivro'] ?></td>
            <td><?= $row['autornome'] ?></td>
        </tr>

    <?php
            }
    ?>

    </tbody>
</table>
</div>

<?php

        endif;
require "rodape.php";

?>