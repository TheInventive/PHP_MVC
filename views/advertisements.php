<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../style/style.css" type="text/css"">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Advertisements</title>
    <style>
        section {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1{
            font-size: 60px;
        }

        a {
            font: bold 11px Arial;
            text-decoration: none;
            background-color: #EEEEEE;
            color: #333333;
            padding: 2px 6px 2px 6px;
            border-top: 1px solid #CCCCCC;
            border-right: 1px solid #333333;
            border-bottom: 1px solid #333333;
            border-left: 1px solid #CCCCCC;
        }
    </style>
</head>
<body>
<section>
    <h1>Advertisements</h1>
    <ul>
        <?php
        foreach ($ads as $ad){
            echo"<li> Ad name: {$ad->getTitle()} - User name: {$ad->getUser()->getUserName()}</li>";}
        ?>
    </ul>
    <a href="<?php echo $routes->get('indexAction')->getPath(); ?>">Back to homepage</a>
    <section>
</body>
</html>