<?php 

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $idDoGet = $_GET["id"];
    $idDoGetPreenchido = !empty($idDoGet);

    if($idDoGetPreenchido){
        //Retorna os dados de um contato.
        
        $query = "SELECT * FROM contacts WHERE id=:id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $idDoGet);

        $stmt->execute();

        $contact = $stmt->fetch();

    } else {
        //Retorna todos os contatos.

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);
    
        $stmt->execute();
    
        $contacts = [];
    
        $contacts = $stmt->fetchAll(); 
    }

?>