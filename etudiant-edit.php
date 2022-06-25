<?php
require_once "class/Crud.php";

$select = new Crud;
$etudiant = $select->selectId("etudiant", "id", $_GET["id"]);

foreach($etudiant as $key=>$value){
    $$key = $value;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Daouda CAMARA 2195833">
    <title>Etudiant</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<h2>Modifier l'étudiant</h2>
<a href="etudiant-list.php">Retourner à l'accueil</a>
<form action="etudiant-edit-post.php" method="post" class="add">
    <input type="hidden" value="<?php echo $id; ?>" name="id">
    <label for="id">Code Permanent</label>
    <input type="text" id="code" name="code" maxlenght="12" value="<?php echo $code; ?>"><br><br>
    <label for="prenom">Prenom</label>
    <input type="text"  id="prenom" name="prenom" maxlenght="45" value="<?php echo $prenom; ?>"><br><br>
    <label for="nom">Nom</label>
    <input type="text"  id="nom" name="nom" maxlenght="45" value="<?php echo $nom; ?>"><br><br>
    <label for="sexe">Sexe</label>
    <input type="text"  id="sexe" name="sexe" maxlenght="1" value="<?php echo $sexe; ?>"><br><br>
    <input type="submit" class="btn">
</form>

</body>
</html>