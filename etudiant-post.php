<?php
require_once "class/Crud.php";

$add = new Crud;

$insert = $add->insert("etudiant", $_POST);

header("Location: etudiant-list.php");


?>