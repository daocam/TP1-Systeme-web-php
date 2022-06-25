<?php
require_once "class/Crud.php";
$show = new Crud;
$etudiants = $show->select("etudiant");
$professeurs = $show->select("professeur");
$cours = $show->select("cours");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Daouda CAMARA 2195833">
    <title>Liste</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<h1>Cours en ligne</h1>
<a href="etudiant-add.php">Ajouter un étudiant</a>
<h2>Liste des professeurs</h2>
<table>
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>    
        </tr>
    </thead>
    <tbody>
<?php
    foreach($professeurs as $row){
?>
        <tr>
            <td><?php echo $row["prenom"]; ?></td>
            <td><?php echo $row["nom"]; ?></td>
        </tr>
<?php
    }
?>       
    </tbody>
</table>

<h2>Liste des cours</h2>
<table>
    <thead>
        <tr>
            <th>Sigle</th>
            <th>Titre</th>    
        </tr>
    </thead>
    <tbody>
<?php
    foreach($cours as $row){
?>
        <tr>
            <td><?php echo $row["sigle"]; ?></td>
            <td><?php echo $row["titre"]; ?></td>
        </tr>
<?php
    }
?>       
    </tbody>
</table>

<h2>Liste des étudiants</h2>
<table>
    <thead>
        <tr>
            <th>Code Permanent</th>
            <th>Prénom</th>
            <th>Nom</th>    
            <th>Sexe</th>    
        </tr>
    </thead>
    <tbody>
<?php
    foreach($etudiants as $row){
?>
        <tr>
            <td><?php echo $row["code"]; ?></td>
            <td><?php echo $row["prenom"]; ?></td>
            <td><?php echo $row["nom"]; ?></td>
            <td><?php echo $row["sexe"]; ?></td>
            <td><a href="etudiant-edit.php?id=<?php echo $row["id"];?>">Modifier</a></td>
            <td>
                <form action="etudiant-delete.php" method="post">
                    <input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
<?php
    }
?>       
    </tbody>
</table>

</body>
</html>