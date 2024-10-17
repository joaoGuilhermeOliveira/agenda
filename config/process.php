<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

// MODIFICAÇÕES NO BANCO
if (!empty($data)) {

    // Criar contato
    if($data['type'] === "create") {
        
        $name = $data['name'];
        $phone = $data['phone'];
        $observations = $data['observations'];

        $query = "INSERT INTO contact (name, phone, observations) VALUES (:name, :phone, :observations)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try {
    
            $stmt->execute();
            $_SESSION['msg'] = "Contato criado com sucesso!";
        
        } catch (PDOException $e) {
            //erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }



    }

    // REDIRECT HOME
    header("location:" .$BASE_URL . "../index.php");
    
// SELEÇÃO DE DADOS
} else {
    $id;

    if (!empty($_GET)) {
        $id = $_GET['id'];
    }
    // Retorna o dado de um contato

    if (!empty($id)) {

        $query = "SELECT * FROM contact WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contactx = $stmt->fetch();

    } else {

        // Retorna todos os contatos
        $contact = [];

        $query = "SELECT * FROM contact";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contact = $stmt->fetchAll();

    }
}

// FECHAR CONEXÃO
$conn = null;




