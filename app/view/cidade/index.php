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
        <div class="card">
            <div class="card-header text-center">
                <button onclick="redirect();" class="btn btn-info btn-sm">+ Novo</button>
            </div>
            <div class="card-body">
                <div id="get"></div>
            </div>
        </div>

        <div class="modal fade" id="atualizaCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <!-- Inicio Modal - atualizar categoria -->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Editando Categoria</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="frm">
                                <!--inicio formulario de adicionar-->
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="id">id</label>
                                        <input type="text" class="form-control  btn-sm" name="id" id="id" autocomplete="off" readonly>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="descricao">Descrição</label>
                                        <input type="text" class="form-control  btn-sm" name="descricao" id="descricao" autocomplete="off">
                                    </div>

                                    <div class="form-group col-md-12 text-center">
                                        <button id="editar" class="btn btn-info btn-sm" onclick="atualizaTabela()" data-dismiss="modal">Editar</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                                    </div>
                                    <!--fim formulario de adicionar-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Inicio Modal - atualizar categoria -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="../../../public/jquery/jquery.min.js"></script>
<script src="../../../public/js/cidades/index.js"></script>
<?php require("../templates/footer.php"); ?>