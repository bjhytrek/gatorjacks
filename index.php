<?php

            $path = 'pages/';
            $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '' ;
            $php  = '.php';
            $both = $path . $page . $php;
            $pages = array( 'home', 'menu', 'catering');

?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">

        <title>Gator Jack's Rexburg</title>
        <meta name="description" content="Gator Jack's, Cajun style restaurant.">
        <meta name="author" content="SitePoint">

        <link rel="stylesheet" href="index.css">
    </head>

    <body>
        <?php include 'components/header/header.php'; ?>

        <main class="gator-jacks">

            <?php 
           
            if (!empty($page)) {

                if(in_array($page,$pages)) {
                    //$page .= '.php';
                    include($both);
                }
                else {
                    include('pages/error-page.php');
                }
            }
            else {
                include('pages/home.php');
            }
        ?>
        </main>
    <?php include 'components/footer/footer.php'; ?>
    </body>

    </html>