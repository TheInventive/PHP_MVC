<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../style/style.css">
    <title>Home page</title>
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