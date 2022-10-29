<?php

require "cabecalho.php";

require "conexao.php";

$sql = "select idlivro, isbn, dtapublicacao, idioma, titulolivro, localpublicacao, sinopse, temalivro, editoralivro from livro order by idlivro";
$stmt = $conn -> query($sql);

?>

<div class="table-responsive">
<table class="table table-striped ">
    <thead>
        <tr>

            <th scope="col" style="width: 9%;">ID</th>
            <th scope="col" style="width: 9%;">ISBN</th>
            <th scope="col" style="width: 9%;">Data de Publicação</th>
            <th scope="col" style="width: 9%;">Idioma</th>
            <th scope="col" style="width: 9%;">Título do Livro</th>
            <th scope="col" style="width: 9%;">Local de Publicação</th>
            <th scope="col" style="width: 9%;">Sinopse</th>
            <th scope="col" style="width: 9%;">Tema do Livro</th>
            <th scope="col" style="width: 9%;">Editora do Livro</th>
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
            <td><?= $row['dtapublicacao'] ?></td>
            <td><?= $row['idioma'] ?></td>
            <td><?= $row['titulolivro'] ?></td>
            <td><?= $row['localpublicacao'] ?></td>
            <td><?= $row['sinopse'] ?></td>
            <td><?= $row['temalivro'] ?></td>
            <td><?= $row['editoralivro'] ?></td>
            <td>

                <a class="btn btn-sm btn-warning" 
                href="#?idlivro=<?= $row['idlivro']; ?>">
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

<?php

require "rodape.php";

?>