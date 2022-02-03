<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home page</title>
    <style>
        <?php include "../style/style.css" ?>
    </style>
</head>
<body>
<section>
    <h1>Homepage</h1>
    <p>
        <a href="<?php echo $routes->get('showUsers')->getPath(); ?>">Go to users page</a>
    </p>
    <p>
        <a href="<?php echo $routes->get('showAdvertisements')->getPath(); ?>">Go to advertisements page</a>
    </p>
    <section>
</body>
</html>