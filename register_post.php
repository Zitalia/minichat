<?php
$bdd = new PDO('mysql:host=localhost;dbname=minichat2.0;charset=utf8', 'root', '');
if (isset($_POST['pseudo']) AND isset ($_POST['registerpassword'])) { 
    $req = $bdd->query("INSERT INTO user( pseudo, password) 
    					VALUES ( '".$_POST['pseudo']."', '".$_POST['registerpassword']."')");
    header('Location:index.php');
}

