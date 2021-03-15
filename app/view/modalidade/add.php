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
        <form id="frm"><!--inicio formulario de adicionar-->
            <div class="form-row">

                <div class="form-group col-md-12">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control  btn-sm" name="descricao" id="descricao" autocomplete="off">
                </div>

                <div class="form-group col-md-12 text-left">
                    <button id="salvar" class="btn btn-info btn-sm">Salvar</button>
                </div><!--fim formulario de adicionar-->
            </div>
        </form>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="../../../public/jquery/jquery.min.js"></script>
<script>
    document.getElementById('salvar').addEventListener('click', function (event) {
        let inputs = document.querySelectorAll('#frm [name]');
        event.preventDefault();

        inputs.forEach(function (field, index) {
            if (field.value == "") {
                alert("Todos os campos são obritagórios");
            } else {
                let dadosForm = $('#frm').serialize();

                $.ajax({
                    type: 'POST',
                    url: '../../controller/modalidade/addController.php',
                    data: dadosForm,
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                    }
                });
            }
        });
    });
</script>
<?php require("../templates/footer.php"); ?>