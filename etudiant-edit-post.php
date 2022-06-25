<?php
require_once "class/Crud.php";

$crud = new Crud;

$update = $crud->update("etudiant", $_POST, "id", $_POST["id"]);

header("Location: etudiant-list.php");

?>