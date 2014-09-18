<?php
/**
 * PHP eerst
 * PHP wordt op de server uitgevoerd (server side)
 * HTML is wat de browser laat zien (client side)
 */

// Directory /var/www/bootstrap/trunk

$varName = "dit is php"; // string
$number = 123;
$b = 2;

$dieAntwoord =  $number * $b;

// array

$boodschappen = array($number, $b, $dieAntwoord, $varName);

//echo $boodschappen[0] . '<br>';
//echo $boodschappen[1];
//echo $boodschappen[2];

//if ($b > 100 || $b == 2 ) {
//    echo "klopt";
//} elseif (($b * 2) == 4) {
//    echo 'a';
//} elseif ($b == 2) {
//    echo '2';
//} else {
//    echo "klopt niet";
//}

// echo $boodschappen;
//echo strlen($varName);


//foreach ($boodschappen as $boodschap) {
//    
//    echo $boodschap . '<br>';
//    
//}

echo count($varName) . '<br>';

if (empty($varNaam)){
    echo 'JA';
}

die('<br>-');








?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Title</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <p><?php echo $dieAntwoord; ?></p>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie-hack.js"></script>
  </body>
</html>