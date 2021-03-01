<?php require("../../controller/modalidade/listaController.php"); ?>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <thead>
        <tr>
            <td>Ações</td>
            <td>Categoria</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach (lista() as $value) {?>
        <tr>
            <td><?= $value['descricao'] ?></td>
            <td>cat</td>
        </tr>
        <?php }?>
    </tbody>
</table>