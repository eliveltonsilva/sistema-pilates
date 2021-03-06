<?php require("../templates/header.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Novo <a style="color: #007bff" href="index.php">Professor</a></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-primary">
            <div class="card-header">
                Cadastro de Professores
            </div>
            <div class="card-body">
                <form id="frm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" name="name" id="name" autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mail">Email</label>
                            <input type="text" class="form-control" name="mail" id="mail" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="birth">Data Nascimento</label>
                            <input type="date" class="form-control" name="birth" id="birth" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="sex">Sexo</label>
                            <select name="sex" id="sex" class="form-control">
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="cpf">Cpf</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="cell">Celular</label>
                            <input type="text" class="form-control" name="cell" id="cell" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="cep">Cep</label>
                            <input type="text" class="form-control" name="cep" id="cep" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="city">Cidade</label>
                            <input type="text" class="form-control" readonly name="city" id="city" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="uf">Estado</label>
                            <input type="text" class="form-control" readonly name="uf" id="uf" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="address">Endere??o</label>
                            <input type="text" class="form-control" name="address" id="address" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="number">N??mero</label>
                            <input type="text" class="form-control" name="number" id="number" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="district">Bairro</label>
                            <input type="text" class="form-control" name="district" id="district" autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="complement">Complemento</label>
                            <input type="text" class="form-control" name="complement" id="complement" autocomplete="off">
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="form-group col-md-12 text-center">
                    <button id="save" class="bg-gradient-success btn btn-lg btn-xs-block"><i class="fa fa-save" aria-hidden="true"></i>&nbsp;Salvar</button>
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
<script src="js/main.js"></script>
<?php require("../templates/footer.php"); ?>