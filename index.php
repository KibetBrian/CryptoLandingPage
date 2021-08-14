<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tr3xCoin</title>
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
   <!--AOS Animate CSS CDN-->
   <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
   <!--AOS Animate CSS CDN-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js" integrity="sha512-5vwN8yor2fFT9pgPS9p9R7AszYaNn0LkQElTXIsZFCL7ucT8zDCAqlQXDdaqgA1mZP47hdvztBMsIoFxq/FyyQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <!--Chart JS CDN-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Styling/style.css">
    <link rel="stylesheet" href="./Styling/animation.css">
    <link rel="stylesheet" href="https://use.typekit.net/agx2uej.css">
    <script>
       $(document).ready(
           ()=>
           {
            $(".subscribe-button").click(
            ()=>{
                $(".subscribe-form").load("./loaddata.php");
            }
            );
           }
       );
    </script>
</head>
<body>
    <div class="landing-page">
      
    <!-- Background animation Start -->
    <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    <!-- Background animation End -->


    <!--=======Navbar Start======-->
    <?php 
        require './Components/includes.php';
        echo ($navbar);
    ?>     
    <!--========Navbar End========--> 
  
    <!--Landing Page Content-->
    <div class="landing-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 landing-col-1"  data-aos="fade-up" data-aos-duration="1800" data-aos-once="true">
                    <h1 class="sliding-text" id="slidingText">tr3xCoin</h1>
                    <h5 class="introduction-title" id="introductionTitle">Revolutionary <span class="highlight">CryptoCurrency</span> for investors</h5>
                    <p class="introduction-paragraph mt-3">tr3xCoin is the life changing community driven  CryptoCurrency with security being its major focus</p>
                   <div class="landing-buttons mt-4">
                    <a href="./Components/liveChart.php" class="landing-button-livechart">Live Chart</a>
                    <a href="https://pancakeswap.finance/" class="landing-button-howitworks">Buy Coins <i class="fas fa-arrow-right"></i></a>
                   </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 landing-col-2">
                    <div class="snack-bar">
                        Coming Soon
                    </div>
                    <button class="downloadButton">
                        Download Wallet
                    </button>
                    <img src="./Assets/landingImage.svg" data-aos="fade-down" data-aos-duration="2500" data-aos-once="true" class="img-fluid landing-illustration " id="landingIllustration" alt="tr3xCoin">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="quick-coin-stats">
                <div class="live-stats">
                    <div class="live-stats-badge">
                        <a href="./Components/liveChart.php">Live Price</a>
                    </div>
                </div>
                <div class="price">
                    <h5>0.000000565 <i class="fas fa-sort-up live-stats-icon"></i></h5>
                    <p>Current Price (USD)</p>
                </div>
                <div class="holders">
                    <h5>1000 <i class="fas fa-plus live-stats-icon"></i></h5>
                    <p>Holders</p>
                </div>
                <div class="supply">
                    <h5>1000000</h5>
                    <p>Supply</p>
                </div>
                <div class="market-cap">
                    <h5>$9843.75</h5>
                    <p>Market Cap  (USD)</p>
                </div>
            </div>
        </div>
    </div>
    </div>
     <!--Landing Page Content-->
    <div class="x-future">
            <h1 class="underline">3 main protocols of tr3xCoin</h1>
            <p class="x-future-p">The tr3xCoin Protocol is a community driven, fair launched DeFi Token. Three simple functions
                occur during each trade: Reflection, <span class="highlight"> LP Acquisition</span> , and Burn.</p>
     <div class="x-future-cards-container">
        <div class="x-future-card" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div class="card-number">One</div>
            <div class="x-future-card-icon"><i class="fas fa-users"></i></div>
            <div class="x-future-card-title"><h5>Community Driven</h5></div>
            <div class="x-future-card-content"><p>Community driven & fair launch. Dev locked all team tokens for 2 years and participated in the fair launch with everyone else.</p></div>
        </div>
        <div class="x-future-card" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true">
            <div class="card-number">Two</div>
            <div class="x-future-card-icon"><i class="fas fa-water"></i></div>
            <div class="x-future-card-title"><h5>Automatic Lp</h5></div>
            <div class="x-future-card-content"><p>Every trade contributes toward automatically generating liquidity locked inside PancakeSwap LP.</p></div>
        </div>
        <div class="x-future-card" data-aos="fade-up" data-aos-duration="2500" data-aos-once="true">
            <div class="card-number">Three</div>
            <div class="x-future-card-icon"><i class="fas fa-hand-holding-water"></i></div>
            <div class="x-future-card-title"><h5>RFI Static Rewards</h5></div>
            <div class="x-future-card-content"><p>Holders earn static rewards through static reflection as the watch their balance and tr3xCoin grow indefinitely.</p></div>
        </div>
     </div>
    </div>
    <!--Timeline Start-->
    <div class="timeline-container">
        <div class="timeline-title"><h1 class="underline">The RoadMap</h1></div>
        <div class="timeline">
            <div class="content-wrapper left" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
                <div class="content">
                    <h2>Protocol Initialized</h2>
                    <p>We have successfully launched, deployed tr3xCoin for pre sale on PancakeSwap. We have also started integration process for other necessary APIs needed to support tr3xCoin mission. Our devs are working hard daily </p>
                </div>
            </div>
            <div class="content-wrapper right" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true">
                <div class="content">
                    <h2>Initial Push</h2>
                    <p>We will finish and launch the SaveCrypt Digital system on mainnet.We will secure more listing for tr3xCoin! </p>
                </div>
            </div>
            <div class="content-wrapper left" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true">
                <div class="content">
                    <h2>Holding the Line</h2>
                    <p>We will list tr3xCoin on more public exchanges. We will perform our first token reduction. </p>
                </div>
            </div>
            <div class="content-wrapper right" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true">
                <div class="content">
                    <h2>tr3xCoin is Unstoppable!</h2>
                    <p>We will finish the tr3xCoin Wallet with integrated P2P market place and fiat to crypto API.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Timeline End-->
    <div class="features">
        <div class="container">
                <h5 class="features-title underline">Features of tr3xCoin</h5>
                <p class="features-paragraph">We burned all of our energy to develop a fully functioning quality crypto. Thanks to coffee</p>
            <div class="row mt-5 features-row ">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card features-card" id="card" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">
                        <h3 class="mt-3">Token Presale</h3>
                        <p>Maximize your token sale reward</p>
                        <div class="hr"></div>
                        <div class="time  mt-5  d-flex justify-content-center">
                            <div class="days">
                                <h1 class="d"></h1>
                                <p>Days</p>
                            </div>
                            <div class="hours ml-3">
                                <h1 class="h"></h1>
                                <p>Hours</p>
                            </div>
                            <div class="hours ml-3">
                                <h1 class="m"></h1>
                                <p>Minutes</p>
                            </div>
                            <div class="hours ml-3">
                                <h1 class="s" id="s"></h1>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <button type="button" class="features-button mt-5">Join the Wishlist</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center  features-points">
                    <ul>
                    <li><i class="fas fa-dollar-sign"></i> Buy and Sell</li>
                    <li><i class="fas fa-shield-alt"></i>Security Assured</li>
                    <li><i class="fas fa-random"></i>Send and Receive</li>
                    <li><i class="far fa-clock"></i>Access Anytime</li>
                    </ul>
                        <ul  id="futures-ul-2">
                        <li><i class="fas fa-globe"></i>Acess Anywhere</li>
                        <li><i class="fas fa-undo"></i>Daily Backups</li>
                        <li><i class="fas fa-user-cog"></i>Easy Setups</li>
                        <li><i class="fas fa-money-bill-wave"></i>Easy Cashout</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid feature-2">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
                    <h5 class="features-2-title">90.7% of the tokens will be available to everyone</h5>
                    <p class="features-2-paragraph">tr3xCoin tokens will start selling on summer this year.Keep learning the working principles of the currency and make your money ready to invest in the future of P2P money tranfer.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="chart">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="row char-row" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="chart-cards d-block">
                                <img src="./Assets/blockchain.svg" alt="CryptoCurrency" class="card-icon">
                                <p>Top currency</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="chart-cards d-block">
                                <img src="./Assets/shield.svg" alt="Wallet" class="card-icon">
                                <p>1000+ Holders</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="chart-cards d-block">
                                <img src="./Assets/shield.svg" alt="Security" class="card-icon">
                                <p>Layered Security</p>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <div class="container progress-chart-container">
           <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 progress-chart">
                        <div class="progressive-bar">
                        <div class="progressive-bar-content">
                            <h6>Development</h6>
                            <p>18M</p>
                        </div>
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="progressive-bar">
                           <div class="progressive-bar-content">
                            <h6>Profit</h6>
                            <p>12M</p>
                           </div>
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="progressive-bar">
                        <div class="progressive-bar-content">
                            <h6>Goal</h6>
                            <p>1B</p>
                        </div>
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="progressive-bar">
                           <div class="progressive-bar-content">
                            <h6>Duration</h6>
                            <p>10y</p>
                           </div>
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 4%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                    </div>
                   <div class="col-lg-6 col-md-12 col-sm-12 progress-chart" data-aos="zoom-in" data-aos-once="true" data-aos-duration="2000">
                    <canvas id="myCirularChart"> </canvas>
                   </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 feature-3-col-2">
                <h5 class="feature-3-title">Reward you and your loved ones the future of transactions</h5>
                <p>tr3xCoin is a fully decentrallized  peer to peer Internet currency secured by Mathematics that enables instant, near-zero cost payments to anyone in the world.</p>
            </div>
           </div>
        </div>
    </div>
    <!--Footer Start-->
        <footer>
        <div class="footer-contents-container">
<div class="quick-links-container">
    <h6>Quick Links</h6>
   <a href="./index.php">Home</a>
   <a href="./Components/howtobuy.php">How to buy</a>
   <a href="./Components/whitepaper.php">White Paper</a>
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
    <form action="./index.php" method="POST">
    <?php

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;


        if (isset($_POST ['subscribe-input']))
            {
            $_visitorEmail = $_POST ['subscribe-input'];

            if (filter_var($_visitorEmail, FILTER_VALIDATE_EMAIL))
            {
                $to = $_visitorEmail;
                $subject = "tr3xcoin newsletter subscription";
                $message = "Thanks for subscribing to our newsletter";
                $sender = "From: tr3coinnewsletter@gmail.com";

                require_once './PHPMailer/PHPMailer.php';
                require_once './PHPMailer/SMTP.php';
                require_once './PHPMailer/Exception.php';

                $mail = new PHPMailer();

                //Smtp settings

                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = /*Your email */
                $mail->Password = /*Your Email Password*/
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
                    require './Components/connectDatabase.php';

                    if ($conn)
                    {
                        $conn = new mysqli($localhost, $username, $password, $database);
                        $queryEmail = "SELECT * FROM newsletter_subscribers";
                        $result = mysqli_query($conn, $queryEmail);

                       if (mysqli_num_rows($result) >= 0 )
                         {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                if ($row ['email'] == $_visitorEmail)
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
    <!--Footer End-->
    
    <!--JQuery CDN-->
    <script
			  src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script>
    <!--JQuery CDN-->
    <!--AOS JS CDN-->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!--AOS JS CDN-->
    <script src="./JsScripts/script.js"></script>
</body>
</html>