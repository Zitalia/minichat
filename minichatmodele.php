<?php
    include("connexion.php");
    $id =$_SESSION['ID'];
    $pseudo = $_SESSION['pseudo'];
if(isset($_SESSION['ID']))
{
    if (!empty($_SESSION['ID']));
    {
        $req = $bdd->prepare('SELECT pseudo, message FROM user LEFT JOIN message ON user.id = messages.userID');
        $req->execute();
		if (isset($_SESSION['pseudo']) AND isset($_POST['messages']) AND !empty($_POST['messages']))
		{
			$messages = htmlspecialchars($_POST['messages']);
			$insertmsg = $bdd->prepare('INSERT INTO messages(message) VALUES(:param)');
            $insertmsg->bindParam(':param', $mymess, PDO::PARAM_STR);
			$insertmsg->execute();
		}
    }
}
else
{
    header('Location:index.php');
}
?>