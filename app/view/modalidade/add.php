<?php require("../templates/header.php") ?>

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
        <form id="frm">
            <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" name="descricao" id="descricao" autocomplete="off">
                </div>

                <div class="form-group col-md-12 text-left">
                    <input type="submit" id="adicionar" value="Adicionar" class="btn btn-info">
                </div>
            </div>
        </form>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script src="../../../public/jquery/jquery.min.js"></script>
<script src="../../../public/alertifyjs/alertify.min.js"></script>
<script src="../../../public/myfiles/js/modalidade.js"></script>
<?php require("../templates/footer.php"); ?>