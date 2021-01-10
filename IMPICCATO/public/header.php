<?php include '../src/function.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="IL GIOCO DELL'IMPICATO">
    <meta name="author" content="COMPITO INFORMATICA">
    <title>IL GIOCO DELL'IMPICCATO</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
          crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>

<section class="container"

    <div class="jumbotron pt-4 bg-dark text-white pb-1">
        <div id="imgHangman"
             style="background:url(img/man.png) -<?= $_SESSION['errors'] * 75 ?>px 0px;" <?= empty($_SESSION['word']) ? 'show' : '' ?>></div>

        <h1><p style="color:white;">IL GIOCO DELL'IMPICCATO </p></h1>
        <h4><p style="color:white;">COMPITO INFORMATICA </p></h4>

        <br><br><br><br>
</selection>
