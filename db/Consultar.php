<?php

include_once ("Conectar.php");

class Consultar {


#Função que faz todas as consultas do adiantamento
    public function adiantamento()
    {   
        $con = new Conectar;
        $conect = $con->connection();    
        $sql = "SELECT * FROM contas.tb_dividas WHERE dpagamento = :dpag and atraso = :atraso;";
        $stmt = $conect->prepare($sql); 
        $stmt->bindValue(':dpag', "Adiantamento");
        $stmt->bindValue(':atraso', "não atrasado");
        $stmt->execute();

        $valorTotal = 0;
        $idLine = 0;
        
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dados as $row) {

            # Formatação da data   
            $myDateTime = DateTime::createFromFormat('Y-m-d', $row['vencimento']);
            $newDateString = $myDateTime->format('d/m/Y');

            $idLine = $row['id'];

            echo "<tr>
                    <th>" . $row['nome'] . " </th>
                    <th>" . $row['descricao'] . " </th>
                    <th>" . $row['tipo'] . " </th>
                    <th>" . $row['dpagamento'] . " </th>
                    <th>R$ " . $row['valor'] . " </th>
                    <th>" . $newDateString . " </th>
                    <th>" . $row['parcelas'] . " </th>
                    <th>R$ " . $row['valor'] * $row['parcelas'] . " </th>


                    <th> <button class='btn btn-primary' data-toggle='modal' data-target='#editModal' 
                    data-id='". $row['id'] ."' data-name='". $row['nome'] ."' data-descricao='". $row['descricao'] ."' 
                    data-tipo='". $row['tipo'] ."' data-dpag='". $row['dpagamento'] ."' 
                    data-valor='". $row['valor'] ."' data-date='". $row['vencimento'] ."' 
                    data-parcelas='". $row['parcelas'] ."' data-atraso='". $row['atraso'] ."' >Alterar</button> </th>
                    
                 </tr>";
            $valorTotal += $row['valor'];
        }
            echo "<tr>
                <th class='text-primary'>Valor Total de Pagamento: </th>
                <th class='text-success'>R$ " . $valorTotal . " </th>
                <th></th>
                <th></th>
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
        $sql = "SELECT * FROM contas.tb_dividas WHERE dpagamento = :dpag and atraso = :atraso;";
        $stmt = $conect->prepare($sql);
        $stmt->bindValue(':dpag', "Final do Mês");
        $stmt->bindValue(':atraso', "não atrasado");
        $stmt->execute();

        $valorTotal = 0;

        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dados as $row) {

            # Formatação da data
            $myDateTime = DateTime::createFromFormat('Y-m-d', $row['vencimento']);
            $newDateString = $myDateTime->format('d/m/Y');

            echo "<tr> 
                        <th>" . $row['nome'] . " </th>
                        <th>" . $row['descricao'] . " </th>
                        <th>" . $row['tipo'] . " </th>
                        <th>" . $row['dpagamento'] . " </th>
                        <th>R$ " . $row['valor'] . "</th>
                        <th>" . $newDateString . " </th>
                        <th>" . $row['parcelas'] . " </th>
                        <th>R$ " . $row['valor'] * $row['parcelas'] . " </th>
                        <th> <button class='btn btn-primary' data-toggle='modal' data-target='#editModal' 
                        data-id='". $row['id'] ."' data-name='". $row['nome'] ."' data-descricao='". $row['descricao'] ."' 
                        data-tipo='". $row['tipo'] ."' data-dpag='". $row['dpagamento'] ."' 
                        data-valor='". $row['valor'] ."' data-date='". $row['vencimento'] ."' 
                        data-parcelas='". $row['parcelas'] ."' data-atraso='". $row['atraso'] ."' >Alterar</button> </th>
                        </tr>";
            $valorTotal += $row['valor'];
        }
            echo "<tr>
                <th class='text-primary'>Valor Total de Pagamento: </th>
                <th class='text-success'>R$ " . $valorTotal . " </th>
                <th></th>
                <th></th>
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

            # Formatação da data
            $myDateTime = DateTime::createFromFormat('Y-m-d', $row['vencimento']);
            $newDateString = $myDateTime->format('d/m/Y');
            
            echo "<tr> 
                        <th>" . $row['nome'] . " </th>
                        <th>" . $row['descricao'] . " </th>
                        <th>" . $row['tipo'] . " </th>
                        <th>" . $row['dpagamento'] . " </th>
                        <th>R$" . $row['valor'] . " </th>
                        <th>" . $newDateString . " </th>
                        <th>" . $row['parcelas'] . " </th>  
                        <th>R$ " . $row['valor'] * $row['parcelas'] . " </th>
                        <th> <button class='btn btn-primary' data-toggle='modal' data-target='#editModal' 
                        data-id='". $row['id'] ."' data-name='". $row['nome'] ."' data-descricao='". $row['descricao'] ."' 
                        data-tipo='". $row['tipo'] ."' data-dpag='". $row['dpagamento'] ."' 
                        data-valor='". $row['valor'] ."' data-date='". $row['vencimento'] ."' 
                        data-parcelas='". $row['parcelas'] ."' data-atraso='". $row['atraso'] ."' >Alterar</button> </th>
                        </tr>";
            $valorTotal += $row['valor'];
        }
        echo "<tr>
            <th class='text-primary'>Valor Total de Pagamento: </th>
            <th class='text-success'>R$ " . $valorTotal . " </th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>            
            <th></th>            
            <th></th>            
        </tr>";

        $con->disconect();
    }

    public function delete($id){
        echo $id;
    }

    
}
