<!DOCTYPE html>
<?php include("indexmodele.php"); ?>
<html>
   <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
        <script src="css/jquery.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="icon"  href="img/blason.png">
    </head>
    <body class="bg-warning text-dark">

      <div class="row" style="margin-top:2%;">
        <div class="col-3"> </div>
        <div class="col-6 text-center">
           <img src="img/blason.png" alt="l'equipe de l'italie" class="">
        <form action="index.php" method="GET">
              <div class="form-group ">
                <label for="pseudo">Pseudo</label>
              <input type="text" id="pseudo" name="pseudo" aria-describedby="Pseudo" placeholder="Enter pseudo" class="form-control bg-success text-white">
                <small id="pseudo" class="form-text text-muted">Veuillez utilisez un pseudo qui respecte le CLUG.</small>
                <label for="Password">Mot-de-Passe</label>
                <input type="password" class="form-control bg-danger text-white" id="Password" name="password" placeholder="Password">
              </div>
              <div>
                <button type="submit" class="btn btn-primary">envoyer</button>
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Envoie le mdp ou degage">
                  Annuler
                </button>
              </div>
        </form>
      </div>
      <div class="col-3"></div>
      </div>
      <div class="row">
       <div class="col-3"></div>
       <div class="col-6 text-center" style="margin-top:2%;"><a href="register.php"><button type="button" class="btn btn-light" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Rejoin nous">
                  Rejoins nous ! 
                </button></a> </div>
       <div class="col-3"></div>
      </div>
    </body>
</html>
