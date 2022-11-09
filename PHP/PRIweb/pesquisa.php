<?php

$titulo_pagina = "Resultado da Pesquisa";

require "conexao.php";

require "cabecalho.php";

$texto = filter_input(INPUT_POST, "texto", FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "select livro.idlivro, livro.isbn, livro.dtapublicacao, livro.idioma, livro.titulolivro, livro.localpublicacao, livro.sinopse, livro.temalivro, livro.editoralivro, autor.nome from ((autor inner join livroAutor on autor.idAutor = livroAutor.idAutor) inner join livro on livroAutor.idLivro = livro.idLivro) where (titulolivro like '%$texto%') order by idlivro";
$stmt = $conn -> query($sql);

$count = 0;
?>

<div class="table-responsive">
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
                $count++;
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

            if ($count == 0){
                echo "<script>alert('Não foi encontrado nenhum livro na base de dados para sua pesquisa!')</script>";
            }
    ?>

    </tbody>
</table>
</div>

<?php

require "rodape.php";

?>