<?php  require("../templates/header.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Alteração <a style="color: #007bff" href="index.php">Modalidade</a></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-primary">
            <div class="card-header">
                Alterar Modalidade
            </div>
            <div class="card-body">
                <form id="frm">
                    <div class="form-row">
                        <div class="form-group col-md-1">
                            <label for="id">#</label>
                            <input type="text" class="form-control" value="<?= $_GET['id'] ?>" name="id" id="id" autocomplete="off">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="modality">Modalidade</label>
                            <input type="text" class="form-control" name="modality" id="modality" autocomplete="off">
                            <span id="error-modality" class="error invalid-feedback">Preencha a modalidade</span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="form-group col-md-12 text-center">
                    <button id="update" class="bg-gradient-success btn btn-lg btn-xs-block"><i class="fa fa-save" aria-hidden="true"></i>&nbsp;Salvar</button>
                    <a href="index.php" class="btn-default btn btn-xs-block"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp;Voltar</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="../../../public/alertifyjs/alertify.min.js"></script>
<script src="../../../public/jquery/jquery.min.js"></script>
<script src="js/modality.js"></script>
<?php require("../templates/footer.php"); ?>