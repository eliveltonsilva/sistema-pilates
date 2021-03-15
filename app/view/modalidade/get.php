<?php
require("../../controller/modalidade/getController.php");
?>

<div>
    <table class="table table-hover" style="text-align: center;">
        <thead>
            <tr>
                <th scope="col">Ações</th>
                <th scope="col">#</th>
                <th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (get() as $value) { ?>
                <tr>
                    <td>
                        <button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#atualizaCategoria" onclick="selecionaLinha('<?= $value['id'] ?>', '<?= $value['descricao'] ?>')">Editar</button>
                    </td>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['descricao'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>