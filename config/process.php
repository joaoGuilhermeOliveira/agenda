<?php

session_start();

include_once("connection.php");
include_once("url.php");

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


