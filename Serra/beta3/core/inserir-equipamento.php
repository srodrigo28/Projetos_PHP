    <?php
    // http://www.diogomatheus.com.br/blog/php/trabalhando-com-pdo-no-php/
    require_once ("conn.php");
    // CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

    $stmt = $conn->prepare( //Prepara a Conexão pe campos do banco de dados
        ' INSERT INTO tb_equipamento (
                equipamento, capacidade, proprietario, placa, prefixo, operador, pagar) 
        VALUES ( 
            :equipamento, :capacidade, :proprietario, :placa, :prefixo, :operador, :pagar )'
        );
        // Recebe os dados via INPUT_POST 

        $campo1  = filter_input(INPUT_POST, 'equipamento');
        $campo2  = filter_input(INPUT_POST, 'capacidade');
        $campo3  = filter_input(INPUT_POST, 'proprietario');
        $campo4  = filter_input(INPUT_POST, 'placa');
        $campo5  = filter_input(INPUT_POST, 'prefixo');
        $campo6  = filter_input(INPUT_POST, 'operador');
        $campo7  = filter_input(INPUT_POST, 'pagar');

        // Faz o BindValue passando os para a variavel
        $stmt->bindValue(':equipamento',  $campo1);
        $stmt->bindValue(':capacidade',  $campo2);
        $stmt->bindValue(':proprietario',  $campo3);
        $stmt->bindValue(':placa',  $campo4);
        $stmt->bindValue(':prefixo',  $campo5);
        $stmt->bindValue(':operador',  $campo6);
        $stmt->bindValue(':pagar',  $campo7);
        $stmt->execute();

        header("Location: ../inicio.php"); 

        exit();