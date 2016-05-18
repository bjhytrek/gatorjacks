<?php

            $path = 'pages/';
            $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '' ;
            $php  = '.php';
            $both = $path . $page . $php;
            $pages = array( 'home', 'menu', 'catering', 'location');

?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">

        <title>Gator Jack's Rexburg</title>
        <meta name="description" content="Gator Jack's, Cajun style restaurant.">
        <meta name="author" content="SitePoint">

<!--        <link rel="stylesheet" href="css/materialize.css">-->
       <link rel="stylesheet" href="index.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
    </head>

    <body>
        <?php include 'components/header/header.php'; ?>

            <main class="container">

                <?php 
           
            if (!empty($page)) {

                if(in_array($page,$pages)) {
                    //$page .= '.php';
                    include($both);
                }elseif ($page == 'thank_you'){
                    include('pages/'.$page.'.php');
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/bin/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>

    </html>