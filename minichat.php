
<?php
require("minichatmodele.php"); 

if (isset($_SESSION['ID'])){
	if (isset($_SESSION['pseudo']) AND isset($_POST['message']) AND !empty($_POST['message'])) {
		insertMessage($_POST['message'], $bdd);
	}
}



require("views/minichatviews.php");
