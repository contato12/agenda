<?php 

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $dadosDoPost = $_POST;
    $dadosDoPostPreenchido = !empty($dadosDoPost);

    //Modificação no banco.
    if ($dadosDoPostPreenchido) {
        
        //Criar contato
        if ($dadosDoPost["type"]==="create") {
            
            $name = $dadosDoPost["name"];
            $phone = $dadosDoPost["phone"];
            $observations = $dadosDoPost["observations"];

            $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

            $stmt = $conn->prepare($query);
    
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations); 

            try {
        
                $stmt->execute();
                $_SESSION['msg'] = "Contato criado com sucesso!";   
        
                //Ativar modo de erros
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            } catch (PDOException $pdo_exception) {
                //erro na conexão
                $error = $pdo_exception->getMessage();
                echo "Error: $error";
            }

            
        } elseif ($dadosDoPost["type"]==="edit") {

            $name = $dadosDoPost["name"];
            $phone = $dadosDoPost["phone"];
            $observations = $dadosDoPost["observations"];
            $id = $dadosDoPost["id"];

            $query = "UPDATE contacts SET name=:name, phone=:phone, observations=:observations WHERE id=:id";

            $stmt = $conn->prepare($query);
    
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);
            $stmt->bindParam(":id", $id);
            
            try {
        
                $stmt->execute();
                $_SESSION['msg'] = "Contato atualizado com sucesso!";   
        
                //Ativar modo de erros
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            } catch (PDOException $pdo_exception) {
                //erro na conexão
                $error = $pdo_exception->getMessage();
                echo "Error: $error";
            }

        } elseif ($dadosDoPost["type"]==="delete") {

            $id = $dadosDoPost["id"];

            $query = "DELETE FROM contacts WHERE id=:id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);
            
            try {
        
                $stmt->execute();
                $_SESSION['msg'] = "Contato excluído com sucesso!";   
        
                //Ativar modo de erros
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            } catch (PDOException $pdo_exception) {
                //erro na conexão
                $error = $pdo_exception->getMessage();
                echo "Error: $error";
            }

        }

        //Redirect Home
        header("location:".$BASE_URL."../index.php");

    //Seleção no banco
    } else {

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
    }
    
    $conn = null;
?>