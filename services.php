<?php include './routes.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=get_home_url()  ?>assets/css/services.css">
    <link rel="icon" href="https://shipcartoanotherstate.com/assets/images/Modern.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css" integrity="sha512-/VYneElp5u4puMaIp/4ibGxlTd2MV3kuUIroR3NSQjS2h9XKQNebRQiyyoQKeiGE9mRdjSCIZf9pb7AVJ8DhCg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <?php include './navbar.php' ?>
    <section class="herosection">
        <div class="heroksection-bg"></div>
        <span class="ser">
        <h1>SERVICES</h1>
        <p>We offers a range of services to their customers, including Interstate Shipping, Freight Forwarding, Express Delivery, Residential Moving,Commercial Shipping,Vehicle Transport,Online Tracking and many more</p>
        </span>
    </section>
    <!-- <div class="formsection">
        <form action="">
            <div class="form-group">
                <b>STATE FROM</b><input type="text" name="from" id="from" placeholder="State From"  >
                <b>STATE TO</b><input type="text" name="to" id="to" placeholder="State To" >
                <input type="submit" value="search">
            </div>
        </form>
    </div> -->

    <section class="list-of-services">

    <div class="services-box">
        <div class="image-box">
            <img src="https://cdn.pixabay.com/photo/2018/05/11/23/45/highway-3392100_640.jpg" alt="">
        </div>
        <div class="content-box">
            <div class="content-box-2">
            <a href="commonservice"><h2>Transport Car By Train</h2></a>
            <p class="multiline-ellipsis">Although Shipping an automobile via rail isn't the most frequent technique, some dealerships and manufacturers prefer it when they have a large number of cars to deliver to a single place. Shipping by rail is generally less expensive than shipping by truck or any other means, especially since fuel prices fluctuate.</p>
            <a href="commonservice"><button>View Services</button></a>
            </div>
        </div>
    </div>
    <div class="services-box">
        <div class="content-box">
            <div class="content-box-2">
            <a href="commonservice"><h2>Open Transport Car Shipping</h2></a>
            <p class="multiline-ellipsis">An open auto transport carrier is the most cost-effective way to transport your automobile. Open carriers are preferred by car dealers because they can accommodate up to ten vehicles at once, lowering per-vehicle costs. Another compelling reason to employ open auto transport carriers is for daily-driven vehicles. Granted, your objective isn't to cross the country in your car. The car is driven regularly; it can endure the elements and will not depreciate as quickly as a collectible or exotic car would under similar circumstances. This keeps costs low because customers like you are wanting to send their "daily drives."</p>
            <a href="commonservice"><button>View Services</button></a>
            </div>
        </div>        
        <div class="image-box">
            <img src="https://rapidautoshipping.com/assets/images/auto-transport-open.jpg" alt="">
        </div>
    </div>
    
    </section>
    <section class="why-choose-us">
        <div class="why-choose-us-bg"></div>
        <div class="why-us">
            <p class="why-choose-us__title" style="margin: 0;">Why Choose Us?</p>
            <p style="text-align: center;color:white;margin-bottom:3.5%;padding:0">We Provide the Best Facilites For
                Transport</p>
            <div class="row cc">
                <div class="box">
                    <i class="ri-service-line"></i>
                    <p><strong>BEST SERVICES</strong></p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum quae fugit praesentium at
                        eligendi sequi!</p>
                </div>
                <div class="box">
                    <i class="ri-shield-check-fill"></i>
                    <p><b>SAFE AND SECURE </b></p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum impedit, molestias id culpa,
                        incidunt quos sequi .</p>
                </div>
                <div class="box">
                    <i class="ri-pin-distance-line"></i>
                    <p><b>EXPRESS SHIPPING</b></p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab omnis vitae, laborum explicabo
                        laudantium earum nulla?</p>
                </div>
                <div class="box">
                    <i class="ri-money-dollar-circle-line"></i>
                    <p><b>PRICE MATCH</b></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam amet ipsam labore beatae eveniet
                        eaque?</p>
                </div>
            </div>
        </div>

    </section>
    <section class="how-it-work">
        <p class="how-it-work-title">How It Work</p>
        <div class="how-work row">
            <div class="how-box a">
                <p><b>Picking your Vehicle</b></p>
                <span>Before the pickup, our team will contact you to understand your needs.</span>
            </div>
            <div class="how-a"></div>
            <div class="how-box a">
                <p><b>Shipping your Vehicle</b></p>
                <span>Your vehicle will arrive securely thanks to our professional infrastructure.</span>
            </div>
            <div class="how-a"></div>
            <div class="how-box">
                <p><b>Delivering your vehicle</b></p>
                <span>Most car shipping carriers phone ahead of time to restrict the delivery window.</span>
            </div>
        </div>
    </section>
    <?php include './footer.php' ?>

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
<!-- 

 -->
