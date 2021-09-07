<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <div class="header" style="background-image: url(<?php"echo get_template_directory_uri() ?> /images/bg.jpg);">
        <div class="container">
        <h1>
         <?php bloginfo("name")?>
        </h1>
            <p>
                <?php bloginfo ("description")
            </p>
        <a class="btn" href="">Learn More</a>
        </div>
      </div>

