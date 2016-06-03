<?php

        $path = 'pages/';
        $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '' ;
        $php  = '.php';
        $both = $path . $page . $php;
        $pages = array( 'home', 'menu', 'catering', 'location');


        if(isset($_REQUEST['submit'])){
            if($_POST['first_name'] && $_POST['last_name'] && $_POST['email'] && $_POST['phone'] && $_POST['message']){

                $to = "hyt12001@byui.edu"; // this is your Email address
                $from = check_input($_POST['email']); // this is the sender's Email address
                $first_name = check_input($_POST['first_name']);
                $last_name = check_input($_POST['last_name']);
                $phone = check_input($_POST['phone']);
                $subject = "Catering Request";
                $subject2 = "Copy of your form submission";
                $checked_message = check_input($_POST['message']);
                $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $checked_message . "\n\n" . $first_name." ".$last_name . "\n".$phone;
                $message2 = "Here is a copy of your message " . $first_name . "\n" . $checked_message . "\n" . $first_name." ".$last_name . "\n".$phone;

                // Mail the form information:
                $headers = "From:" . $from;
                $headers2 = "From:" . $to;
                mail($to,$subject,$message,$headers);
                mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                $page = 'thank_you';
                }
                else{
                    $user_message = 'Please fill out all form items.';
                    $page = 'catering';
                }
            
            }

        // Check all inputs.
        function check_input($data)
         {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

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
                if ($page == 'thank_you'){
                    include('pages/'.$page.'.php');
                }
                elseif(in_array($page,$pages)) {
                    //$page .= '.php';
                    include($both);
                
                }else {
                    include('pages/error-page.php');
                }
            }else {
                include('pages/home.php');
            }
        ?>
            </main>
            <?php include 'components/footer/footer.php'; ?>
    </body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/bin/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
    <script type="text/javascript" src="js/lazy-load.js"></script>

    </html>