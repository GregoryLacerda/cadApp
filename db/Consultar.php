<?php

include_once ("Conectar.php");

class Consultar {


    public function fimMes()
    {   
        $con = new Conectar;
        $conect = $con->connection();    
        $sql = "SELECT * FROM contas.tb_dividas WHERE dpagamento = :dpag;";
        $stmt = $conect->prepare($sql);
        $stmt->bindValue(':dpag', "Final do Mês");
        $stmt->execute();

        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dados as $row) {
            echo "<tr data-toggle='modal' data-target='#editModal'> 
                        <th>" . $row['nome'] . " </th>
                        <th>" . $row['descricao'] . " </th>
                        <th>" . $row['tipo'] . " </th>
                        <th>" . $row['dpagamento'] . " </th>
                        <th>R$" . $row['valor'] . "</th>
                        <th>" . $row['vencimento'] . " </th>
                        </tr>";
        }
        $con->disconect();
    }
    
    public function adiantamento()
    {   
        $con = new Conectar;
        $conect = $con->connection();    
        $sql = "SELECT * FROM contas.tb_dividas WHERE dpagamento = :dpag LIMIT 10;";
        $stmt = $conect->prepare($sql); 
        $stmt->bindValue(':dpag', "Adiantamento");
        $stmt->execute();
        
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dados as $row) {
            echo "<tr data-toggle='modal' data-target='#editModal'>
                    <th>" . $row['nome'] . " </th>
                    <th>" . $row['descricao'] . " </th>
                    <th>" . $row['tipo'] . " </th>
                    <th>" . $row['dpagamento'] . " </th>
                    <th>R$" . $row['valor'] . " </th>
                    <th>" . $row['vencimento'] . " </th>
                 </tr>";
        }

        $con->disconect();
    }

    public function atrasos()
    {   
        $con = new Conectar;
        $conect = $con->connection();    
        $sql = "SELECT * FROM contas.tb_dividas WHERE atraso = :atraso;";
        $stmt = $conect->prepare($sql);
        $stmt->bindValue(':atraso', 1);
        $stmt->execute();

        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dados as $row) {
            echo "<tr data-toggle='modal' data-target='#editModal'> 
                        <th>" . $row['nome'] . " </th>
                        <th>" . $row['descricao'] . " </th>
                        <th>" . $row['tipo'] . " </th>
                        <th>" . $row['dpagamento'] . " </th>
                        <th>R$" . $row['valor'] . " </th>
                        <th>" . $row['vencimento'] . " </th>
                        </tr>";
        }

        $con->disconect();
    }

    
}