<?php include './routes.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Ship Car To Another State - Contact Us" />
<meta name="description" content="Ship Car To Another State offers affordable, quick, and secure transportation services to its clients. Obtain a shipping estimate straight away at +1-833-233-4447" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Ship Car To Another State - Contact Us" />
<meta property="og:description" content="Ship Car To Another State offers affordable, quick, and secure transportation services to its clients. Obtain a shipping estimate straight away at +1-833-233-4447" />
<meta property="og:url" content="http://shipcartoanotherstate.com/contact-us" />
<meta property="og:site_name" content="Ship Car To Another State - Contact Us" />
<meta name='robots' content='index' />
<meta name="keywords" content="Ship Car To Another State Contact Us, Ship Car To Another State, Contact us Ship Car To Another State">
<meta name="keywords" content="Ship Car To Another State Contact Us" />
<meta property="article:tag" content="Ship Car To Another State" />
<meta property="article:tag" content="Contact us Ship Car To Another State" />
    <link rel="stylesheet" href="<?=get_home_url()  ?>assets/css/contact.css">
    <link rel="icon" href="https://shipcartoanotherstate.com/assets/images/Modern.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css" integrity="sha512-/VYneElp5u4puMaIp/4ibGxlTd2MV3kuUIroR3NSQjS2h9XKQNebRQiyyoQKeiGE9mRdjSCIZf9pb7AVJ8DhCg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ship Car To Another State - Contact Us</title>
 
</head>
<body>
    <?php include './navbar.php' ?>
    <section class="herosection">
        <div class="heroksection-bg"></div>
        <span class="ser">
        <h1>CONTACT US</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        </span>
    </section>

    <section class="contact-section">
        <div class="contact-detail">
            <div class="contact-info">
                <div class="info-box">
                <i class="ri-home-4-line"></i><span>Texas, USA</span>
                </div>
                <div class="info-box">
                <i class="ri-mail-send-line"></i><span>support@shipcartoanotherstate.com</span>
                </div>
                <div class="info-box">
                <i class="ri-phone-fill"></i><span>+1 (833) 233-4447</span>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <div class="contact-div">
                <form action="">
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Enter Your Name">
                        <input type="email" name="email" id="email" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group">
                       <textarea name="" id="" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div class="form-group">
                       <button class="send">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="why-choose-us">
        <div class="why-choose-us-bg"></div>
        <div class="why-us">
            <p class="why-choose-us__title" style="margin: 0;">Why Choose Us?</p>
            <p style="text-align: center;color:white;margin-bottom:3.5%;padding:0">We Provide the Best Facilites For
                Transport</p>
            <div class="row">
                <div class="box">
                    <i class="ri-service-line"></i>
                    <p><strong>BEST SERVICES</strong></p>
                    <p>At high excellence, we offer our customers a wide range of services like open and enclosed car transport service with additional services including Door-to-Door car shipping, California to Hawaii car shipping and Military PCS shipping with competitive rates.</p>
                </div>
                <div class="box">
                    <i class="ri-shield-check-fill"></i>
                    <p><b>SAFE AND SECURE </b></p>
                    <p>We Promise! For your vehicle safety. We provide the ultimate protection to your car as it matters most for you. Our top-notch security solutions like enclosed carriers and experienced drivers ensure your vehicle safety. Trust Ship Car To Another State expertise, because your car safety is our priority.</p>
                </div>
                <div class="box">
                    <i class="ri-pin-distance-line"></i>
                    <p><b>EXPRESS SHIPPING</b></p>
                    <p>We excels in express shipping, guaranteeing swift and reliable deliveries, making them the top choice for urgent transportation needs.</p>
                </div>
                <div class="box">
                    <i class="ri-money-dollar-circle-line"></i>
                    <p><b>PRICE MATCH</b></p>
                    <p>You will have unbeatable savings with the Ship Car To Another State Price Match guarantee! We have beaten every competitor's price and we ensure you always get the best services at lowest market cost .</p>
                </div>
            </div>
        </div>

    </section>
    <section class="how-it-work">
        <p class="how-it-work-title">How It Work</p>
        <div class="how-work row">
            <div class="how-box a">
                <p><b>Vehicle pick up</b></p>
                <span>Our staff professional will pick your vehicle from your desired location on your desired date.</span>
            </div>
            <div class="how-a"></div>
            <div class="how-box a">
                <p><b>Shipping Process</b></p>
                <span>Our professionals clear all the documentation and other processes and ready your vehicle for shipping</span>
            </div>
            <div class="how-a"></div>
            <div class="how-box">
                <p><b>Vehicle delivery</b></p>
                <span>We ensure our professionals deliver your vehicle on the decided date and we provide live shipment tracking with 24×7 live support.</span>
            </div>
        </div>
    </section>
    <?php include './footer.php' ?>
    <div class="sitebutton" id="sitebutton">
        <a href="<?= get_home_url()  ?>get-quotes"><button>GET FREE QUOTES</button></a>
    </div>
    <script>
         document.getElementById('navbar2').addEventListener('click',()=>{
            document.getElementById('navbar2').style.display ='none';
            document.getElementById('navbar3').style.display ='block';
            document.getElementById('fordesktop').style.display ='grid';
        })
        document.getElementById('navbar3').addEventListener('click',()=>{
            document.getElementById('navbar2').style.display ='block';
            document.getElementById('navbar3').style.display ='none';
            document.getElementById('fordesktop').style.display ='none';
        })
    </script>
   </body>
</html>
