<?php require("../templates/header.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 text-center">
                    <h1 class="m-0 text-dark">Nova Modalidade</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <?php if (isset($_GET['act']) == 'editar') { ?>
            <form id="frm"><!--inicio formulario de edição-->
                <h1><?= $_GET['id'] ?></h1>
                <div class="form-row">

                    <div class="form-group col-md-12">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" name="descricao" id="descricao" autocomplete="off">
                    </div>

                    <div class="form-group col-md-12 text-left">
                        <input type="submit" id="adicionar" value="Adicionar" class="btn btn-info">
                    </div>
                </div>
            </form><!--fim formulario de edição-->
        <?php } else { ?>
            <form id="frm"><!--inicio formulario de adicionar-->
                <div class="form-row">

                    <div class="form-group col-md-12">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" name="descricao" id="descricao" autocomplete="off">
                    </div>

                    <div class="form-group col-md-12 text-left">
                        <input type="submit" id="adicionar" value="Adicionar" class="btn btn-info">
                    </div><!--fim formulario de adicionar-->
                </div>
            </form>
        <?php } ?>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script src="../../../public/jquery/jquery.min.js"></script>
<script>
    $('#frm').submit(function (e) {
        e.preventDefault();

        let descricao = document.getElementById('descricao');


        $.ajax({
            url: "../../controller/modalidade/addController.php",
            method: "POST",
            data: {
                descricao: descricao.value
            },
            dataType: "json",
        }).done(function (result) {
            alert(result);
            descricao.value = "";
        });

    });
</script>
<?php require("../templates/footer.php"); ?>