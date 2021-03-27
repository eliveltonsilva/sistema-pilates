<?php
// require("../templates/header.php");
require("../../controller/modalidade/getController.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="frm">
                    <div class="form-group">
                        <label for="descricao">Email address</label>
                        <input type="text" class="form-control btn-sm" id="descricao" name="descricao" placeholder="Digite a modalidade" autocomplete="off">
                        <input class="btn btn-success btn-sm" type="submit"/>
                    </div><!--form-group-->
                </form><!--form-->
        <div class="card">
            <div class="card-header">
                <h3>Modalidades</h3>
            </div><!--card-header-->
            <div class="card-body">
                
                <table id="resultado" class="table table-bordered">
                    <thead>                  
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Modalidades</th>
                        </tr>
                    </thead>
                    <tbody id="dados">
                    </tbody>
                </table><!--table-->
            </div><!--card-body-->
        </div><!--card-->
</body>
</html>


<script src="../../../public/jquery/jquery.min.js"></script>
<script src="../../../public/js/modalidades/index.js"></script>
<?php //require("../templates/footer.php"); ?>