<?php
require_once "class/Crud.php";

$crud = new Crud;

$delete = $crud->delete("etudiant", $_POST["id"], "etudiant-list.php");

?>