<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Daouda CAMARA 2195833">
    <title>Ajouter un étudiant</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<h1>Ajouter un étudiant</h1>
<a href="etudiant-list.php">Retourner à l'accueil</a>
<form action="etudiant-post.php" method="post" class="add">
    <label for="id">Code Permanent</label>
    <input type="text" id="code" name="code" maxlenght="12"><br><br>
    <label for="prenom">Prenom</label>
    <input type="text"  id="prenom" name="prenom" maxlenght="45"><br><br>
    <label for="nom">Nom</label>
    <input type="text"  id="nom" name="nom" maxlenght="45"><br><br>
    <label for="sexe">Sexe</label>
    <input type="text"  id="sexe" name="sexe" maxlenght="1"><br><br>
    <input type="submit" class="btn">
</form>
</body>
</html>