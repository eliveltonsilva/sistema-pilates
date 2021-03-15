<?php
require("../../controller/modalidade/getController.php");
?>

<div>
    <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
        <thead>
            <tr>
                <td>Ações</td>
                <td>Categoria</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach (get() as $value) {?>
                <tr>
                    <td><?= $value['descricao'] ?></td>
                    <td>
                        <a href="add.php?act=editar&id=<?= $value['id'] ?>" class="btn btn-success btn-sm">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>