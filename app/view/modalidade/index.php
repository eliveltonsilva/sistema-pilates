<?php require("../templates/header.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row mb-1"><!-- inicio botão nova modalidade-->
                <div class="col-sm-auto">
                    <h3 class="m-0 text-dark">Buscar Modalidades</h3>
                </div>
                <div class="col-sm-auto">
                    <button onclick="redirect()" id="novo" class="btn btn-block btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Nova Modalidade</button>
                </div>
            </div>
        </div><!-- fim botão nova modalidade-->

        <form id="frm">
            <div class="form-row align-items-center"><!--inicio form de pesquisa-->
                <div class="col-md-auto col-sm-12 my-1">
                    <label>Status</label>
                </div>
                <div class="col-md-auto col-sm-12 my-1">
                    <select name="opcoes" id="opcoes" class="form-control">
                        <option selected="selected" value="Ativo">Ativo</option>
                        <option value="Excluido">Excluído</option>
                        <option value="Todos">Todos</option>
                    </select>
                </div>
                <div class="col-md-auto col-sm-12 my-1">
                    <label>Modalidade</label>
                </div>
                <div class="col-xl-5 col-lg-7 my-1">
                    <input name="modalidade" type="text" id="modalidade" class="form-control" title="Buscar Por Modalidade" placeholder="Buscar por Modalidades">
                </div>                                      
                <div class="col-md-auto col-sm-12 my-1">
                    <button id="buscar" class="btn btn-primary btn-block"><i class="fa fa-search esp_icone" aria-hidden="true"></i>Buscar</button>
                </div>
            </div><!--fim form de pesquisa-->
        </form>

        <table id="tblListaSalas" class="table table-hover table-sm">
            <thead>
                <tr>
                    <th>Ações</th>
                    <th>Modalidade</th>
                    <th>Inserido em</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="dados">
                
            </tbody>
        </table>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="../../../public/jquery/jquery.min.js"></script>
<script src="js/index.js"></script>
<?php require("../templates/footer.php"); ?>