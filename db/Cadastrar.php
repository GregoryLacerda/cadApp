<?php

    include_once ('Conectar.php');

    $nome = $_POST['nome'];
    $tipo = $_POST['tipoConta'];
    $descricao = $_POST['descri'];
    $dpagamento = $_POST['diaPag'];
    $valor = $_POST['valor'];
    $vencimento = $_POST['venci'];

        $con = new Conectar;
        $conect = $con->connection();
        
        $sql = "INSERT INTO contas.tb_dividas (nome, tipo, descricao, dpagamento, valor, vencimento) VALUES(
            :nome, :tipo, :descricao, :dpagamento, :valor, :vencimento);";
        
        $stmt = $conect->prepare($sql);

        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':tipo', $tipo);
        $stmt->bindValue(':descricao', $descricao);
        $stmt->bindValue(':dpagamento', $dpagamento);
        $stmt->bindValue(':valor', $valor);
        $stmt->bindValue(':vencimento', $vencimento);
    
        $stmt->execute();
            
        if ($stmt) {
            header('Location:../index.php');
        }else{
            echo "<script> alert('Erro ao cadastrar');location='../index.php'</script>";   
        }
    
      $con->disconect();
