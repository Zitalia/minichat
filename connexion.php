<?php
	session_start();
	$bdd = new PDO('mysql:host=localhost;dbname=minichat2.0;charset=utf8', 'root', '');