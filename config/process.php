<?php

session_start();

include_once("connection.php");
include_once("url.php");

$query = "SELECT * FROM contact";

$stmt = $conn->prepare($query);

$stmt->execute();

$contact = $stmt->fetchAll();