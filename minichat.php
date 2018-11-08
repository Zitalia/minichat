<!DOCTYPE html>
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
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
        <script src="css/jquery.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body class="bg-warning text-dark font-weight-bold" style="background-image:url(img/blason_fond.png); background-repeat:no-repeat; background-position:50% -50%;">
        <div>

        	<form action="minichat_post.php" method="POST" class="fixed-bottom text-center p-3 mb-2 bg-primary text-white">
        		<h3> Ton nom : <?php if (isset($_SESSION['pseudo'])){ echo $_SESSION['pseudo']; } ?></h3>
            <br />
        	<br />	
            <div class="p-3 mb-2 bg-info text-white">
        		<label for="message"> Messages</label>
        		<input type="textarea" name="message" id="message" placeholder="messages" />
        		<br /><br />
        		<input type="submit" value="submit" class="col-md-3 p-3 mb-2 bg-success text-white"/>
            </div>
        	</form>
        </div>
    	<div class="text-center">
			<?php include("chat.php"); ?>
		</div>
    </body>
</html>