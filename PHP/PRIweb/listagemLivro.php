<?php session_start();

require "cabecalho.php";

require "conexao.php";

$sql = "select livro.idlivro, livro.isbn, livro.dtapublicacao, livro.idioma, livro.titulolivro, livro.localpublicacao, livro.sinopse, livro.temalivro, livro.editoralivro, autor.nome from ((autor inner join livroAutor on autor.idAutor = livroAutor.idAutor) inner join livro on livroAutor.idLivro = livro.idLivro) order by idlivro";
$stmt = $conn -> query($sql);

if($_SESSION['logado'] == true):
?>

<br>
<div class="table-responsive" style="background-color: #D9A658; border-color: #F8CF86; color: white; opacity: 0.9; border-color: #F8CF86; color: white; opacity: 0.9; border-radius: 20px; padding: 20px;">
<table class="table table-striped ">
    <thead>
        <tr>

            <th scope="col" style="width: 5%;">ID</th>
            <th scope="col" style="width: 8%;">ISBN</th>
            <th scope="col" style="width: 8%;">Data de Publicação</th>
            <th scope="col" style="width: 8%;">Idioma</th>
            <th scope="col" style="width: 9%;">Título</th>
            <th scope="col" style="width: 8%;">Local de Publicação</th>
            <th scope="col" style="width: 11%;">Sinopse</th>
            <th scope="col" style="width: 8%;">Gênero</th>
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
            <td><?= $row['idlivro'] ?></td>
            <td><?= $row['isbn'] ?></td>
            <td><?= date("d/m/Y", strtotime($row['dtapublicacao'])) ?></td>
            <td><?= $row['idioma'] ?></td>
            <td><?= $row['titulolivro'] ?></td>
            <td><?= $row['localpublicacao'] ?></td>
            <td><?= $row['sinopse'] ?></td>
            <td><?= $row['temalivro'] ?></td>
            <td><?= $row['editoralivro'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td>

                <a class="btn btn-sm btn-warning" 
                href="formAlterarLivro.php?idlivro=<?= $row['idlivro']; ?>">
                    <span data-feather="edit"></span>
                    Editar
                </a>
            </td>
            <td>
                <a class="btn btn-sm btn-danger" 
                href="excluirLivro.php?idlivro=<?= $row['idlivro']; ?>"
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
<a href="formularioLivro.php">
        <style>
            .livro {
                width: 200px;
                margin-top: 20px;
                margin-right: 10px;
                margin-left: 10px;
            }
        </style>
    <button style="background-color: #D9A658; border-color: #F8CF86; color: white;" type="button" class="btn btn-danger livro"> Cadastrar novo Livro </button>
</a>

<?php

else: 

?>

<br>
<div class="table-responsive" style="background-color: #D9A658; border-color: #F8CF86; color: white; opacity: 0.9; border-color: #F8CF86; color: white; opacity: 0.9; border-radius: 20px; padding: 20px;">
<table class="table table-striped ">
    <thead>
        <tr>

            <th scope="col" style="width: 10%;">ID</th>
            <th scope="col" style="width: 10%;">ISBN</th>
            <th scope="col" style="width: 10%;">Data de Publicação</th>
            <th scope="col" style="width: 10%;">Idioma</th>
            <th scope="col" style="width: 10%;">Título</th>
            <th scope="col" style="width: 10%;">Local de Publicação</th>
            <th scope="col" style="width: 10%;">Sinopse</th>
            <th scope="col" style="width: 10%;">Gênero</th>
            <th scope="col" style="width: 10%;">Editora</th>
            <th scope="col" style="width: 10%;">Autor</th>

        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $stmt->fetch()) {
            ?>
        <tr>
            <td><?= $row['idlivro'] ?></td>
            <td><?= $row['isbn'] ?></td>
            <td><?= $row['dtapublicacao'] ?></td>
            <td><?= $row['idioma'] ?></td>
            <td><?= $row['titulolivro'] ?></td>
            <td><?= $row['localpublicacao'] ?></td>
            <td><?= $row['sinopse'] ?></td>
            <td><?= $row['temalivro'] ?></td>
            <td><?= $row['editoralivro'] ?></td>
            <td><?= $row['nome'] ?></td>
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