<?php session_start();

require "cabecalho.php";

require "conexao.php";

$sql = "select idemprestimo,
                titulolivro,
                prontuariousuario,
                dtaemprestimo,
                dtadevolucao,
                emprestimo.idexemplar
                from emprestimo inner join usuario
                on emprestimo.prontuariousuario = usuario.prontuario
                inner join exemplar
                on emprestimo.idexemplar = exemplar.idexemplar
                inner join livro
                on exemplar.idlivro = livro.idlivro;";
$stmt = $conn -> query($sql);

if($_SESSION['logado'] == true):
?>

<br>
<div class="table-responsive" style="background-color: #D9A658; border-color: #F8CF86; color: white; opacity: 0.9; border-color: #F8CF86; color: white; opacity: 0.9; border-radius: 20px; padding: 20px;">
<table class="table table-striped ">
    <thead>
        <tr>

            <th scope="col" style="width: 16%;">ID</th>
            <th scope="col" style="width: 16%;">Título</th>
            <th scope="col" style="width: 16%;">Prontuário</th>
            <th scope="col" style="width: 16%;">Empréstimo</th>
            <th scope="col" style="width: 16%;">Devolução</th>
            <th scope="col" style="width: 20%;"></th>

        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $stmt->fetch()) {
            ?>
        <tr>
            <td><?= $row['idemprestimo'] ?></td>
            <td><?= $row['titulolivro'] ?></td>
            <td><?= $row['prontuariousuario'] ?></td>
            <td><?= date("d/m/Y", strtotime($row['dtaemprestimo'])) ?></td>
            <td><?= date("d/m/Y", strtotime($row['dtadevolucao'])) ?></td>
            <td>
                <?php
                $status_emprestimo = true;
                $sql_validacao = "select statusemprestimo from emprestimo where idexemplar = " . $row['idexemplar'] . " order by idemprestimo desc limit 1";
                $stmt = $conn -> prepare($sql_validacao);
                $stmt -> execute();
                $row_validacao = $stmt->fetch();

                if (isset($row_validacao['statusemprestimo'])){
                    $status_emprestimo = $row_validacao['statusemprestimo'];
                }
                if ($row_validacao['statusemprestimo'] == true):
                ?>
                <a class="btn btn-sm btn-danger" 
                href="excluirEmprestimo.php?idemprestimo=<?= $row['idemprestimo']; ?>"
                onclick="if(!confirm('Tem certeza que deseja finalizar?')) return false;">
                    <span data-feather="trash-2"> </span>
                    Finalizar
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

        endif;
require "rodape.php";

?>