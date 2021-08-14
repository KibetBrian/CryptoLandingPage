<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>How to Buy | tr3xCoin</title>

    <link rel="stylesheet" href="../Styling/howtobuy.css">
    
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://use.typekit.net/agx2uej.css">
     <link rel="stylesheet" href="../Styling/howtobuy.css">
     <link rel="stylesheet" href="../Styling/animation.css">
</head>
<body>
    <div class="landing-page">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
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
    <div class="container">
        <div class="row">
            <div class="col-12 introduction text-center">
                <h1>HOW TO BUY</h1>
                <p>Check out list of exchanges you can buy tr3xCoin</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid how-to-buy-container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 how-to-buy">
            <h5>Pancake Swap</h5>
            <li class="mb-3">tr3xCoin/BNB</li>
            <a href="https://pancakeswap.finance/">Buy Now</a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 how-to-buy">
            <h5>Coinsbit Exchange</h5>
            <li class="mb-3">tr3xCoin/USD</li>
            <li class="mb-3">tr3xCoin/USDT</li>
            <a href="https://coinsbit.io/">Buy Now</a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 how-to-buy">
            <h5>P2PB2B Exchange</h5>
            <li class="mb-3">tr3xCoin/USD</li>
            <li class="mb-3">tr3xCoin/USDT</li>
            <a href="https://p2pb2b.io/?__cf_chl_jschl_tk__=pmd_07b37f4171cbd77a69aed83e790456593623cbab-1626870958-0-gqNtZGzNAg2jcnBszQhO">Buy Now</a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 how-to-buy">
            <h5>Pancake Swap</h5>
            <li class="mb-3">tr3xCoin/BNB</li>
            <a href="https://pancakeswap.finance/">Buy Now</a>
        </div> 
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
    <form action="./howtobuy.php" method="POST">
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

                       if (mysqli_num_rows($result) >=0 )
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
</body>
</html>