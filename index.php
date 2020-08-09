<?php

session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>My Website!</title>
        
        <!--meta-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!--script files-->
        <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        
        
        <!--css files-->
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/landing.css">
        <link rel="stylesheet" href="css/about.css">
        <link rel="stylesheet" href="css/subscribe.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300.400.500">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    </head>

    <body>
         <!--Landing part-->
         <div class="landing">
         <a href="server/logout.php" class="btn btn-danger">Sign Out of Your Account</a>
         <a href="reset-password.php" class="btn btn-warning" style="float:right;">Reset Your Password</a>
            <div class="banner">
                <h1>My <span>Website</span></h1>
                <p>Dolev's Website</p>
                <a href="#About" id="btn-left" class="btn">About</a>
                <a href="#Subscribe" id="btn-right" class="btn">subscribe</a>
            </div>
        </div>

        <!--About me part-->
        <div id="About">
            <section id="aboutus">
                <div class="row">
                    
                    <div class="col-sm-7">
                        <h1 class="text-center">Dolev Tobi</h1>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </p>
                    </div>
                    
                    <div class="col-sm-5">
                        <div class="img-warp">
                            <img src="css/img/profile.jpg">
                        </div>
                    </div>
                </div>
            </section>
        </div>    

        <!--Subscribe page-->
        <div id="Subscribe">
            <div class="title">
            <h1><u><span>SUBSCRIBE</span> NOW!</u></h1>    

            </div>

            <div class="bg">
                <div class="bg-sub">
                    <script src="https://apis.google.com/js/platform.js"></script>

                    <div class="g-ytsubscribe" data-channelid="UCa2ftP6k2WycDUwSd8ZHf8Q" data-layout="full" data-theme="dark" data-count="default"></div>   
                </div>
            </div>
        </div>



        <!--scroll top button-->
        <a href="#" class="to-top">
            <i class="fas fa-chevron-up"></i>
        </a>
        
       <script src="js/index.js"></script>
    </body>
</html>