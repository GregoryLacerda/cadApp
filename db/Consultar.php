<?php

include_once ("Conectar.php");

class Consultar {


#Função que faz todas as consultas do adiantamento
    public function adiantamento()
    {   
        $con = new Conectar;
        $conect = $con->connection();    
        $sql = "SELECT * FROM contas.tb_dividas WHERE dpagamento = :dpag LIMIT 10;";
        $stmt = $conect->prepare($sql); 
        $stmt->bindValue(':dpag', "Adiantamento");
        $stmt->execute();

        $valorTotal = 0;

        
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dados as $row) {
            $myDateTime = DateTime::createFromFormat('Y-m-d', $row['vencimento']);
            $newDateString = $myDateTime->format('d/m/Y');
            echo "<tr data-toggle='modal' data-target='#editModal'>
                    <th>" . $row['nome'] . " </th>
                    <th>" . $row['descricao'] . " </th>
                    <th>" . $row['tipo'] . " </th>
                    <th>" . $row['dpagamento'] . " </th>
                    <th>R$ " . $row['valor'] . " </th>
                    <th>" . $newDateString . " </th>
                    <th>" . $row['parcelas'] . " </th>
                 </tr>";
            $valorTotal += $row['valor'];
        }
            echo "<tr>
                <th>Valor Total de Pagamento: </th>
                <th>R$ " . $valorTotal . " </th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>            
            </tr>";

        $con->disconect();
    }

#Função que faz todas as consultas do Final do Mês
    public function fimMes()
    {   
        $con = new Conectar;
        $conect = $con->connection();    
        $sql = "SELECT * FROM contas.tb_dividas WHERE dpagamento = :dpag;";
        $stmt = $conect->prepare($sql);
        $stmt->bindValue(':dpag', "Final do Mês");
        $stmt->execute();

        $valorTotal = 0;

        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dados as $row) {
            echo "<tr data-toggle='modal' data-target='#editModal'> 
                        <th>" . $row['nome'] . " </th>
                        <th>" . $row['descricao'] . " </th>
                        <th>" . $row['tipo'] . " </th>
                        <th>" . $row['dpagamento'] . " </th>
                        <th>R$" . $row['valor'] . "</th>
                        <th>" . $row['vencimento'] . " </th>
                        <th>" . $row['parcelas'] . " </th>
                        </tr>";
            $valorTotal += $row['valor'];
        }
            echo "<tr>
                <th>Valor Total de Pagamento: </th>
                <th>R$ " . $valorTotal . " </th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>            
            </tr>";
        $con->disconect();
    }
    
    
#Função que faz todas as consultas dos atrasados
    public function atrasos()
    {   
        $con = new Conectar;
        $conect = $con->connection();    
        $sql = "SELECT * FROM contas.tb_dividas WHERE atraso = :atraso;";
        $stmt = $conect->prepare($sql);
        $stmt->bindValue(':atraso', "atrasado");
        $stmt->execute();

        $valorTotal = 0;

        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dados as $row) {
            echo "<tr data-toggle='modal' data-target='#editModal'> 
                        <th>" . $row['nome'] . " </th>
                        <th>" . $row['descricao'] . " </th>
                        <th>" . $row['tipo'] . " </th>
                        <th>" . $row['dpagamento'] . " </th>
                        <th>R$" . $row['valor'] . " </th>
                        <th>" . $row['vencimento'] . " </th>
                        <th>" . $row['parcelas'] . " </th>  
                        </tr>";
            $valorTotal += $row['valor'];
        }
        echo "<tr>
            <th>Valor Total de Pagamento: </th>
            <th>R$ " . $valorTotal . " </th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>            
        </tr>";

        $con->disconect();
    }

    
}