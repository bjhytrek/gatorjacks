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
        <header>
            <h1>
          <a href="index.php?">
              <img src="images/gator-jacks.psd.png" alt="Gator Jacks">
          </a>
      </h1>
            <nav>
                <ul>
                    <?php 
                    $arrayLength = count($pages);
                    for($i=0; $i < $arrayLength; $i++) {
                        if ($pages[$i] == $page){
                           echo "<li class=\"active\"><a href=\"?page=$pages[$i]\">$pages[$i]</a></li>"; 
                            
                        }else{
                           echo "<li><a href=\"?page=$pages[$i]\">$pages[$i]</a></li>"; 
                        }
                        
    
}   ?>
                </ul>
            </nav>
        </header>

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

    </body>

    </html>