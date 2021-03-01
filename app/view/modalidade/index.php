<?php require("../templates/header.php") ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <button onclick="redirect();" class="btn btn-success">Nova Modalidade</button>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-primary">
            <div class="card-header text-center">
                Modalidades
            </div>
            <div class="card-body">
                <div id="lista"></div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="../../../public/jquery/jquery.min.js"></script>
<script src="../../../public/alertifyjs/alertify.min.js"></script>
<script>
    
    redirect = function(){
        location.href = 'add.php';
    }
    
    $('#lista').load("lista.php");
</script>
<?php require("../templates/footer.php"); ?>