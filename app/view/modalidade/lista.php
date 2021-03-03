<?php require("../../controller/modalidade/listaController.php"); ?>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <thead>
        <tr>
            <td>Ações</td>
            <td>Categoria</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach (listar() as $value) {?>
        <tr>
            <td><?= $value['descricao'] ?></td>
            <td>
                <a href="add.php?act=editar&id=<?= $value['id'] ?>" class="btn btn-success btn-sm">Editar</a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>