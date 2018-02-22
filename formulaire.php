<?php

//echo '<pre>';print_r($_POST); echo'</pre>';
if($_POST) {
    echo $_POST["pseudo"]."<br>";
    echo $_POST["mdp"];
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Formulaire1</title>
    <style>
        label{
            float: left;
            width: 120px;
            font-style: italic;
            font-family: Calibri;
        }
    </style>
</head>
<body>
<h1>Formulaire 1</h1>
<hr>
<form method="post" action="">
    <label for="Pseudo">Pseudo</label>
    <input type="text" id="pseudo" name="pseudo" placeholder="pseudo">
    <br><br><!--l'attribut name est indispensable pour exploiter les données en PHP-->
    <label for="Mot de passe:">Mot de passe</label>
    <input type="text" id="mdp" name="mdp" placeholder="mot de passe"><br><br>
    <input type="submit">
</form>
<hr>



</body>
</html>