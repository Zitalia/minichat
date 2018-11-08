<?php
    include("connexion.php");

echo $_POST['message'];
echo $_SESSION['ID'];

	$id =$_SESSION['ID'];
    $pseudo = $_SESSION['pseudo'];
			if (isset($_SESSION['ID'])){
					
					if (isset($_SESSION['pseudo']) AND isset($_POST['message']) AND !empty($_POST['message']))
					{
						$messages = htmlspecialchars($_POST['message']);
						$insertmsg = $bdd->prepare('INSERT INTO messages (message, userID, id) VALUES (:param, :id, NULL);');
			            $insertmsg->bindParam(':param', $messages, PDO::PARAM_STR);
			            $insertmsg->bindParam(':id', $_SESSION['ID'], PDO::PARAM_INT);
						$insertmsg->execute();
					}
				}

				// Puis rediriger vers minichat.php comme ceci :
header('Location: minichat.php');
?>