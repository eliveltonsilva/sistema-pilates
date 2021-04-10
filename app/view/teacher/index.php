<?php require("../templates/header.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div id="content" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Professores</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-primary">
            <div class="card-header">
                Professores
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row mb-1"><!-- inicio botão nova modalidade-->
                        <div class="col-sm-auto">
                            <h3 class="m-0 text-dark">Buscar Professores</h3>
                        </div>
                        <div class="col-sm-auto">
                            <a href="new.php" class="btn btn-block btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Novo Professor</a>
                        </div>
                    </div>
                </div><!-- fim botão nova modalidade-->

                <form id="frm">
                    <div class="form-row align-items-center"><!--inicio form de pesquisa-->
                        <div class="col-md-auto col-sm-12 my-1">
                            <label>Status</label>
                        </div>
                        <div class="col-md-auto col-sm-12 my-1">
                            <select name="options" id="options" class="form-control">
                                <option value="">[-- Escolha uma opção -- ]</option>
                                <option value="A">Ativo</option>
                                <option value="E">Excluído</option>
                                <option value="T">Todos</option>
                            </select>
                        </div>
                        <div class="col-md-auto col-sm-12 my-1">
                            <label>Modalidade</label>
                        </div>
                        <div class="col-xl-5 col-lg-7 my-1">
                            <input name="teacher" type="text" id="teacher" autocomplete="off" class="form-control" title="Buscar Professores" placeholder="Buscar Professores">
                        </div>                                      
                        <div class="col-md-auto col-sm-12 my-1">
                            <button id="search" class="btn btn-primary btn-block"><i class="fa fa-search esp_icone" aria-hidden="true"></i>&nbsp;Buscar</button>
                        </div>
                    </div><!--fim form de pesquisa-->
                </form>
                <table id="tblListaSalas" class="table table-hover table-sm">
                    <thead>
                        <tr>
                            <th>Ações</th>
                            <th>#</th>
                            <th>Professor</th>
                            <th>Dt Nasc</th>
                            <th>Email</th>
                            <th>Cpf</th>
                            <th>Sexo</th>
                            <th>Celular</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                    <tbody id="dados">
                    </tbody>
                </table>
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