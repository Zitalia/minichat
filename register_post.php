<<<<<<< HEAD
<?php
$bdd = new PDO('mysql:host=localhost;dbname=minichat2.0;charset=utf8', 'root', '');
if (isset($_POST['pseudo']) AND isset ($_POST['registerpassword'])) { 
    $req = $bdd->query("INSERT INTO user( pseudo, password) 
    					VALUES ( '".$_POST['pseudo']."', '".$_POST['registerpassword']."')");
    header('Location:index.php');
}
=======
<?php
$bdd = new PDO('mysql:host=localhost;dbname=minichat2.0;charset=utf8', 'root', '');
if (isset($_POST['pseudo']) AND isset ($_POST['registerpassword'])) { 
    $req = $bdd->query("INSERT INTO user(id, pseudo, password) 
    					VALUES (NULL, '".$_POST['pseudo']."', '".$_POST['registerpassword']."')");
    $req -> execute();
    header('Location:index.php');
}
>>>>>>> fb6f7222028de17c1e898cf7cf9f168b2a6a033d
?>