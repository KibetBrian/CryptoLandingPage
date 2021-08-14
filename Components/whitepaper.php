<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whitepaper | tr3xCoin</title>
    
     <!--Bootstrap CDN-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!--Bootstrap CDN-->

     <!--Font Awesome Icon CDN-->
     <script src="https://kit.fontawesome.com/72d1145f74.js" crossorigin="anonymous"></script>  
     <!--Font Awesome Icon CDN-->
     
    <!--jquery CDN-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--jquery CDN-->

   <!--Chart JS CDN-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js" integrity="sha512-5vwN8yor2fFT9pgPS9p9R7AszYaNn0LkQElTXIsZFCL7ucT8zDCAqlQXDdaqgA1mZP47hdvztBMsIoFxq/FyyQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <!--Chart JS CDN-->
   
    <!--AOS Animate CSS CDN-->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <!--AOS Animate CSS CDN-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/agx2uej.css">
    <link rel="stylesheet" href="../Styling/animation.css">
    <link rel="stylesheet" href="../Styling/whitepaper.css">

</head>
<body>
    <div class="landing-page">
       <!--===================Navbar Start================-->
       <nav class="navbar landing-page-navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand ml-3" href="../index.php">tr<small>3</small>x<span class="logo">.Coin</span></a>
          <button class="navbar-toggler collapsed mb-2" id="navbartoggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"><i class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse mr-2" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto mr-5">
              <a class="nav-link active mr-4"id="nav-link" style="color: #3c6dff;" aria-current="page" href="../index.php">Home</a>
              <a class="nav-link  mr-3 " id="nav-about"  href="./whitepaper.php">White Paper</a>
              <a class="nav-link  mr-3 "id="nav-services"  href="./howtobuy.php">How to Buy</a>
            </div>
          </div>
        </div>
      </nav>
    <!--===================Navbar End==================--> 
    <div class="container landing-white-paper-container">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div class="row">
            <div class="col-12 white-paper-introduction">
                <h1>tr<small>3</small>xCoin/</h1>
                <p>White Paper</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid protocol-content">
    <div class="row protocol d-block">
       <div class="col-12">
        <h3>tr3xCoin Protocol Whitepaper</h3>
        <p>Static Rewards, Manual Burn,LP Acquisition,</p>
       </div>
        <div class="col-12">
           <div class="protocol-content-wrapper">
               <div class="column1">
               <h3>Why Static ?</h3>
            <p>Why Static? Static rewards solve a host of problems. Firstly, the reward amount is conditional upon the volume of the tokens being traded. This mechanism aims to alleviate some of the downward sell pressure put on the token caused by earlier adopters selling their tokens after farming crazy high APY’s. Secondly, the reflect mechanism encourages holders to hang onto their tokens to garner higher kick-backs which are based upon a percentage carried out and dependent upon the total tokens held by the owner.</p>
               </div>
               <div class="column2">
                   <img src="../Assets/static.svg"  data-aos="fade-left" data-aos-duration = "1500" data-aos-once="true"  alt="Static" class="img-fluid img-responsive">
               </div>
           </div>
        </div>
        <div class="col-12">
        <div class="protocol-content-wrapper column-reverse">
        <div class="column2" >
                   <img src="../Assets/manualburns.svg"  data-aos="fade-right" data-aos-duration = "1500" data-aos-once="true"  alt="Static" class="img-fluid img-responsive">
               </div>
               <div class="column1">
               <h3>Manual Burns</h3>
            <p>Sometimes burns matter; sometimes they don’t. A continuous burn on any one protocol can be nice in the early days, however, this means the burn cannot be finite or controlled in any way. Having burns controlled by the team and promoted based on achievements helps to keep the community rewarded and informed. The conditions of the manual burn and the amounts can be advertised and tracked. tr3xCoin aims to implement a burn strategy that is beneficial and rewarding for those engaged for the long term. Furthermore, the total number of tr3xCoin burned is featured on our readout located on the website which allows for further transparency in identifying the current circulating supply at any given point of time.</p> 
               </div>              
           </div>
        
        </div>
        <div class="col-12 liquidity">
        <div class="protocol-content-wrapper">
               <div class="column1">
               <h3>Automatic Liquidity Pool</h3>
            <p>Here at tr3xCoin we have a function that its output produces an arbitrage resistant
                 mechanism that secures the volume of tr3xCoin as a reward for tr3xCoiners.
                  In theory the added LP creates a stability from the supplied LP by adding
                   the tax to the overall liquidity of the token, thus increasing the tokens overall
                    LP and supporting the price floor of the token. This is different from the burn
                     function of other reflection tokens which is only beneficial in the short term 
                     from the granted reduction of supply. 
                     All of this is an attempt to address some of the issues that have arisen with the current DeFi reflection tokens.
                     For these reasons, we are certain that this paradigm and protocol will triumph over outmoded reflection tokens. </p>
               </div>
               <div class="column2">
                   <img src="../Assets/liquidity.svg"  data-aos="fade-left" data-aos-duration = "1500" data-aos-once="true"  alt="Static" class="img-fluid img-responsive">
               </div>
           </div>
            
        </div>
    </div>
    <div class="safety">
        <h3>Safety</h3>
        <p>Step by step plan to ensure 100% safety </p>
    </div>
    <div class="row features" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card d-block text-center">
                <h6>Step 1</h6>
                <img src="../Assets/burn.svg" alt="Burn" class="img-fluid">
                <p>All tokens will be burned prior to launch</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card d-block text-center">
                <h6>Step 2</h6>
                <img src="../Assets/startup.svg" alt="Launch" class="img-fluid">
                <p>Fair launch at DXsale</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card d-block text-center">
                <h6>Step 3</h6>
                <img src="../Assets/lock.svg" alt="Burn" class="img-fluid">
                <p>Liquidity provider locked on DXLocker for years</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card d-block text-center">
                <h6>Step 4</h6>
                <img src="../Assets/database.svg" alt="Database" class="img-fluid">
                <p>LP generated with every trade and locked on Pancake</p>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        
    </div>
</div>
   <footer>
   <div class="footer-contents-container">
<div class="quick-links-container">
    <h6>Quick Links</h6>
   <a href="../index.php">Home</a>
   <a href="./howtobuy.php">How to buy</a>
   <a href="./whitepaper.php">White Paper</a>
   <a href="#">Download Wallet</a>
</div>
<div class="social-media-links">
    <h6>Connect Us</h6>
   <a href="#">Facebook</a>
   <a href="#">Instagram</a>
   <a href="#">Twitter</a>
   <a href="#">Discord</a>
</div>
<div class="subscribe-form">
    <h6>Subscribe for Newsletter</h6>                  
    <form action="./whitepaper.php" method="POST">
    <?php

         use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;

    if (isset($_POST ['subscribe-input']))
    {
            $_visitorEmail = $_POST ['subscribe-input'];

            if (filter_var($_visitorEmail, FILTER_VALIDATE_EMAIL))
            {
                $to = $_visitorEmail;
                $subject = "Tr3xcoin newsletter subscription";
                $message = "Thanks for subscribing to our newsletter";
                $sender = "From: tr3coinnewsletter@gmail.com";

                require_once '../PHPMailer/PHPMailer.php';
                require_once '../PHPMailer/SMTP.php';
                require_once '../PHPMailer/Exception.php';

                $mail = new PHPMailer();

                //Smtp settings

                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'tr3xcoin@gmail.com';
                $mail->Password = 'tr3xcoin).tr3xcoin).tr3xcoin';
                $mail->Port = 465;
                $mail->SMTPSecure = "ssl";

                //Email settings
                $mail->isHTML(true);
                $mail->setFrom($_visitorEmail);
                $mail->addAddress($_visitorEmail);
                $mail->Subject = $subject;  
                $mail->Body = "Thanks for subscribing with us";
                
                if ($mail->send())
                {
                    require '../Components/connectDatabase.php';

                    if ($conn)
                    {
                        $conn = new mysqli($localhost, $username, $password, $database);
                        $queryEmail = "SELECT * FROM newsletter_subscribers";
                        $result = mysqli_query($conn,$queryEmail);

                       if (mysqli_num_rows($result) >= 0 )
                       {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                if ($row['email'] == $_visitorEmail)
                                {
                                    
                                    $visitorEmailStored = True;
                                }                                
                            }
                            if (!$visitorEmailStored)
                            {
                                $insertQuery = "INSERT INTO newsletter_subscribers(email)
                                VALUES ('$_visitorEmail')";
                                if ($conn->query($insertQuery))
                                    {
                                        echo '<p class "formPopup">'.'Welcome to the winning team !'.' </p>';
                                    }
                            }
                            else 
                            {
                                $_visitorEmail = '';
                                echo '<h5 class "warning">'.'Already among the winning team'.' </h5>';
                            }
                       }                       
                    }                

                }
                else
                {
                    echo "Failed to send email".$mail->ErrorInfo;
                }
            }
            else
            {
                echo "<span>"."Please enter a valid email"." </span>";
            }
    }
    ?>                        
        <div class="input-group">
            <input type="text" class="form-control" name="subscribe-input" id="subscribe-form" placeholder="Enter your Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="subscribe-button" name="subscribe-button" type="submit" ><i class="fab fa-telegram-plane"></i></button>
            </div>
          </div>
    </form>
</div>
</div>
<hr>
<span>@2021, Designed by &nbsp; <a href="http://kibet-brian.herokuapp.com/"> Kibet Brian </a></span>>
   </footer>
   <script src="../JsScripts/script.js" ></script>
       <!--AOS JS CDN-->
       <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
       <script>
           AOS.init();
       </script>
       <!--AOS JS CDN-->
</body>
</html>