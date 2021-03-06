<?php 
/**
 * PHP eerst
 * PHP wordt op de server uitgevoerd (server side)
 * HTML is wat de browser laat zien (client side)
 */

// Directory /var/www/bootstrap/trunk

/**
 * eerst zorgen dat we alle benodigde bestanden hebben
 * Niet alles hoeft in een file te staan, dus we includen
 */

require_once('inc/setup.php');

$errors = array();

// is er POST data (gepost via formulier)
if (!empty($_POST)) {
    
    
    // even kijken of we alles hebben
    
    if (!empty($_POST['username'])){
        $username = $_POST['username'];
    } else {
        $errors[] = "Geen username";
    }
    
    if (!empty($_POST['password'])){
        $password = $_POST['password'];
    } else {
        $errors[] = "Geen wachtwoord";
    }
    
    if (!count($errors)) {
        // er zijn geen errors (count geeft 0 terug)
        header("Location: user.php?username=" . $username);
    }
    
    
	// yup
	// html string uitprinten om de data duidelijk te laten zien
	//echo '<pre>';
	// Wat voor data krijgen we en hoe ziet het eruit?
	//var_dump($_POST);
	// voor nu even stoppen met de uitvoer van het script
	//die("\r\nEn we stoppen hier");
} else {
	// nope
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Test server</title>
    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
        
        <?php
        
        foreach ($errors as $error){
            echo $error . '<br>';
        }
    
        
        
        ?>

      <form class="form-signin" role="form" method="post" action="#">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie-hack.js"></script>
  </body>
</html>