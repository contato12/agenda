<?php 

    $host = 'localhost';
    $dbname = 'address_book';
    $user = 'php';
    $password = 'php';

    try {
        
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        //Ativar modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $pdo_exception) {
        //erro na conexão
        $error = $pdo_exception->getMessage();
        echo "Error: $error";
    }

?>