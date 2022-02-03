<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../style/style.css" type="text/css"
    ">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Advertisements</title>
    <style>
        <?php include "../style/style.css" ?>
    </style>
</head>
<body>
<section>
    <h1>Advertisements</h1>
    <ul>
        <?php
        foreach ($ads as $ad) {
            echo "<li> Ad name: {$ad->getTitle()} - Username: {$ad->getUser()->getUserName()}</li>";
        }
        ?>
    </ul>
    <a href="<?php echo $routes->get('indexAction')->getPath(); ?>">Back to homepage</a>
    <section>
</body>
</html>