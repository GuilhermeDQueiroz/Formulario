<?php
//Form part 1
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$ender = $_POST["ender"] != null ? $_POST["ender"] : "Anônimo";
$estad = $_POST["estad"] != null ? $_POST["estad"] : "Anônimo";
$sexo = $_POST["sexo"] != null ? $_POST["sexo"] : "Indefinido";

//Form part 2
$inter1 = $_POST["checkboxMusica"];
$inter2 = $_POST["checkboxCinema"];
$inter3 = $_POST["checkboxInfo"];

if ($inter1) {
    $inter1 = "<div class='glyphicon'><i class='glyphicon-check'></i></div>";
} else {
    $inter1 = "<div class='glyphicon'><i class='glyphicon-unchecked'></i></div>";
}

if ($inter2) {
    $inter2 = "<div class='glyphicon'><i class='glyphicon-check'></i></div>"; 
} else {
    $inter2 = "<div class='glyphicon'><i class='glyphicon-unchecked'></i></div>";
}

if ($inter3) {
    $inter3 = "<div class='glyphicon'><i class='glyphicon-check'></i></div>";
} else {
    $inter3 = "<div class='glyphicon'><i class='glyphicon-unchecked'></i></div>";
}

//Form part 3
$login = $_POST["login"];
$senha = $_POST["password"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
            .jumbotron {
                background-color: #23527c;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron text-center text-uppercase">
            <h1>Trabalho Eduardo</h1>
            <div class="h4">Obrigado por cadastrar em nosso site <?php echo $nome ?> !</div>
        </div>

        <div class="container">
            <div class="row">
                <div id="container">
                    <div class="h1">Dados do Cadastro</div>

                    <div class="panel-group"> <!-- Abre 'panel-group' -->

                        
                        
                        <!-- Tabela com os Dados do Cadastrado (part 1) -->
                        <div class="panel panel-default">
                            <div class="panel-heading text-uppercase"><b>Informações Pessoais</b></div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>CPF</th>
                                                <th>Sexo</th>
                                                <th>Endereço</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $nome ?></td>
                                                <td><?php echo $cpf ?></td>
                                                <td><?php echo $sexo ?></td>
                                                <td><?php echo $ender ?></td>
                                                <td><?php echo $estad ?></td>
                                            </tr>
                                        </tbody>
                                    </table>    
                                </div>
                            </div>
                        </div>



                        <!-- Tabela com os Dados do Cadastrado (part 2) -->
                        <div class="panel panel-default">
                            <div class="panel-heading text-uppercase"><b>Interesses</b></div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Informática</th>
                                                <th>Cinema</th>
                                                <th>Música</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $inter1 ?></td>
                                                <td><?php echo $inter2 ?></td>
                                                <td><?php echo $inter3 ?></td>
                                            </tr>
                                        </tbody>
                                    </table>    
                                </div>
                            </div>
                        </div>

                        

                        <!-- Tabela com os Dados do Cadastrado (part 3) -->
                        <div class="panel panel-default">
                            <div class="panel-heading text-uppercase"><b>Dados Cadastro</b></div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Login</th>
                                                <th>Senha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $login ?></td>
                                                <td><?php echo $senha ?></td>
                                            </tr>
                                        </tbody>
                                    </table>    
                                </div>
                            </div>
                        </div>

                        

                    </div> <!-- Fecha 'panel-group' -->
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>