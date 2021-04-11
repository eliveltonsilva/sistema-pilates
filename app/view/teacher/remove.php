<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>remove</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--alertifyjs-->
    <link rel="stylesheet" href="../../../public/alertifyjs/css/alertify.min.css" />
    <link rel="stylesheet" href="../../../public/alertifyjs/css/themes/default.min.css" />
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        #content {
            background-color: rgba(0, 0, 0, 0.8);
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center
        }

        #box {
            border-radius: 5px;
            width: 400px;
            height: 200px;
            background: #fff;
        }
    </style>
</head>

<body>
    <div id="content">
        <div id="box">
            <form id="frm">
                <input type="hidden" value="<?= $_GET['id_remove'] ?>" id="id_remove" name="id_remove">
                <div class="card text-center">
                    <div class="card-header text-bold">
                        <h4>Confirmação</h4>
                    </div>
                    <div class="card-body">
                        <p>Deseja realmente excluir a modalidade?</p>
                    </div>
                    <div class="card-footer">
                        <button id="remove" class="btn btn-danger">Sim</button>
                        <a href="index.php" class="btn btn-info">Não</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../../public/alertifyjs/alertify.min.js"></script>
    <script src="../../../public/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>