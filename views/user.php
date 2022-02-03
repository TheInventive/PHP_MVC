<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Users</title>
    <style>
        <?php include "../style/style.css" ?>
    </style>
</head>
<body>
<section>
    <h1>Users</h1>
    <ul>
        <?php
        foreach ($users as $user) {
            echo "<li> {$user->getUserName()} </li>";
        }
        ?>
    </ul>
    <a href="<?php echo $routes->get('indexAction')->getPath(); ?>">Back to homepage</a>
    <section>
</body>

</html>