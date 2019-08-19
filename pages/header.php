<?php 

include_once("db/Consultar.php"); 

$consult = new Consultar;

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Top -->
    <nav class="navbar navbar-light bg-primary">
        <a class="navbar-brand" href="#">
            <img src="images/bank.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Contas App
        </a>

        <!--List Menu  -->
        <ul class="nav navbar    bg-primary" id="myTab" role="tablist">
            <li class="nav-item ">
                <a class="nav-link active bg-light" id="adiant-tab" data-toggle="tab" href="#adiant" role="tab" aria-controls="adiant" aria-selected="true">Adiantamento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-light" id="fnMes-tab" data-toggle="tab" href="#fnMes" role="tab" aria-controls="fnMes" aria-selected="false">Final do Mês</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-light" id="atrasados-tab" data-toggle="tab" href="#atrasados" role="tab" aria-controls="atrasados" aria-selected="false">Atrasados</a>
            </li>
        </ul>

        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addModal">Adcionar Conta</button>
    </nav>