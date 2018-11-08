<?php

include("connexion.php");

if (isset($_GET['pseudo']) AND isset ($_GET['password'])) { 
    $pseudo = $_GET['pseudo'];
    $req = $bdd->query("SELECT id, pseudo, password FROM user WHERE pseudo='".$_GET['pseudo']."'");
    //$req -> execute();
    $resultats = $req->fetch();
    $correctpass= ($_GET['password'] == $resultats['password']) ;
    
 
          if ($correctpass)
          {
            
            $_SESSION['ID']=$resultats['id'];
            $_SESSION['pseudo']=$resultats['pseudo'];
            header('Location: minichat.php') ;
          }
          else 
          {
           echo ' mot de passe erroné';
          }
}
?>