<?php include './routes.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preload" href="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS2z-zMeHNf4laZiAbzjDBowLLm_wnjwo&v=3.exp&callback=Function.prototype&libraries=places" as="script">
    <link rel="preload" fetchpriority="high" as="image" href="<?= get_home_url()  ?>assets/images/ship-car-to-another-state2.webp" type="image/webp">
    <link rel="preload" fetchpriority="high" as="image" href="<?= get_home_url()  ?>assets/images/ship-car-to-another-state.webp" type="image/webp">
    <meta charset="UTF-8">
    <meta name="title" content="How To Ship A Car To Another State | Ship Car To Another State" />
    <meta name="description" content="Ship Car To Another State is the best choice for your car, whether it's a luxurious sedan or a Classic Car. We provide you the best affordable and reliable Auto Shipping services in the US. Call us now at +1-833-233-4447" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="How To Ship A Car To Another State | Ship Car To Another State" />
    <meta property="og:description" content="Ship Car To Another State is the best choice for your car, whether it's a luxurious sedan or a Classic Car. We provide you the best affordable and reliable Auto Shipping services in the US. Call us now at +1-833-233-4447" />
    <meta property="og:url" content="http://shipcartoanotherstate.com/" />
    <meta property="og:site_name" content="How To Ship A Car To Another State | Ship Car To Another State" />
    <meta name='robots' content='index' />
    <meta name="keywords" content="ship car to another state, ship my car to another state, ship a car to another state, how to ship a car to another state, ship your car to another state , how to ship car to another state, how to ship my car to another state, cost to ship car to another state, how to ship your car to another state" />
    <meta property="article:tag" content="ship car to another state" />
    <meta property="article:tag" content="ship my car to another state" />
    <meta property="article:tag" content="ship a car to another state" />
    <meta property="article:tag" content="how to ship a car to another state" />
    <meta property="article:tag" content="ship your car to another state" />
    <meta property="article:tag" content="how to ship car to another state" />
    <meta property="article:tag" content="how to ship my car to another state" />
    <meta property="article:tag" content="cost to ship car to another state" />
    <meta property="article:tag" content="how to ship your car to another state" />
    <!-- change -->
    <meta name="google-site-verification" content="970kFHxDIhqBEORbOCCKDtfAS19KZPYrQdbsVWcSFCk" />
    <!-- change -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_home_url()  ?>assets/css/index.css?v=<?=time() ?>" async>
    <link rel="icon" href="https://shipcartoanotherstate.com/assets/images/Modern.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css" integrity="sha512-/VYneElp5u4puMaIp/4ibGxlTd2MV3kuUIroR3NSQjS2h9XKQNebRQiyyoQKeiGE9mRdjSCIZf9pb7AVJ8DhCg==" crossorigin="anonymous" referrerpolicy="no-referrer" as="style" onload="this.onload=null;this.rel='stylesheet'" async />
    <title>How To Ship A Car To Another State | Ship Car To Another State</title>
    <style>
        .error {
            width: 220px;
            height: 80px;
            background-color: tomato;
            /* padding: 2%; */
            border-radius: 5px;
            display: none;
            place-items: center;
            color: white;
            position: fixed;
            top: 10%;
            right: 10%;
            text-align: center;
            font-size: 1.2rem;
            z-index: 10;
        }

        .guranteed {
            width: 150px;
            height: 150px;
            position: absolute;
            left: -10%;
            top: -10%;
        }

        /*  */
    </style>
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="error" id="error">
        <p id="error-text">Directions request returned no results</p>
    </div>
    <section class="herosection" id="bod">
        <div class="herosection_">
            <div class="herosection_bg">
            </div>
            <img src="<?= get_home_url()  ?>assets/images/ship-car-to-another-state.webp" id="desk_image" fetchpriority="high" width="100%" height="100%" class="backgroundimg" alt="">
            <div class="row">
                <div class="herosection_content">
                    <h1>Best Company To Ship A Car To Another State</h1>
                    <ul style="list-style: none; font-size:1.4rem;color:white;">
                        <li style="margin: 2% 0;"><i class="ri-check-double-fill" style="margin-right:1%"></i>Best Auto Transporter isince 2012</li>
                        <li style="margin: 2% 0;"><i class="ri-check-double-fill" style="margin-right:1%"></i>100,000 + Successful Cars Delivered</li>
                        <li style="margin: 2% 0;"><i class="ri-check-double-fill" style="margin-right:1%"></i>24x7 Auto Transport Experts</li>
                        <li style="margin: 2% 0;font-size:2rem;"><b><i class="ri-phone-fill" style="margin-right:1%"></i>+1 (833) 233-4447</b></li>
                    </ul>
                    <!-- <p class="hero-p">We are on top of the Auto transportation industry, as we provide fast and budget friendly shipping from one state to another. We have 4 million+ active user with positive customer rating on Trust pilot and 4.9 star rating on BBB</p> -->
                    <div class="rating">
                        <img src="./assets/images/b.svg" class="review-img" width="150px" height="100%" alt="">
                        <p><b>ShipCartoAnotherState</b> rating<br> Based on 13956 customer review</p>
                    </div>
                </div>
                <div class="form-div" style="position: relative;">
                    <div class="guranteed"><img src="./assets/images/qualıty-guarantee.svg" width="100%" height="100%" alt=""></div>
                    <h1><strong>Get A Free Quote</strong></h1>
                    <form action="<?= get_home_url()  ?>save-to-form" id="form-" method="post">

                        <div class="part1" id="part1">
                            <div class="form-group">
                                <label for="">From</label><br>
                                <input type="text" placeholder="Address or City" id="origin-input" name="ship_from">
                                <input type="text" id="url" value="<?= $_SERVER['REQUEST_URI'] ?>" name="url" placeholder="Address or City" hidden>
                            </div>
                            <div class="form-group">
                                <label for="">To</label><br>
                                <input type="text" placeholder="Address or City" id="destination-input" name="ship_to">
                            </div>
                            <div class="form-group">
                                <label for="">Date OF Pickup</label><br>
                                <input type="date" name='pick_up_date' min="<?php echo date('Y-m-d'); ?>" max="2030-12-31" placeholder="Pickup Date" id="ship_date">
                            </div>
                            <div class="form-group" id="distance"> </div>
                            <div class="form-group">
                                <label for="">Vehicle Size</label><br>
                                <input type="text" placeholder="Select an option" name="vehicle_size" id="ship_vehicle" readonly>
                                <div class="car-option" id="car-option">
                                    <div class="cars" id="cars"><img src="./assets/images/car/small-car.png" alt="">
                                        <p>small-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/small_car.png" alt="">
                                        <p>small-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/large-car.png" alt="">
                                        <p>large-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/midsize-car.png" alt="">
                                        <p>midsize-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/sports-car.png" alt="">
                                        <p>sports-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/midsize-suv.png" alt="">
                                        <p>midsize-suv</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/small-suv.png" alt="">
                                        <p>small-suv</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/large-suv.png" alt="">
                                        <p>large-suv</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/hypercar.png" alt="">
                                        <p>hypercar</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/motorcycle.png" alt="">
                                        <p>motorcycle</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/mini-van.png" alt="">
                                        <p>mini-van</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/fullsize-van.png" alt="">
                                        <p>fullsize-van</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/dually-pickup.png" alt="">
                                        <p>dually-pickup</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/golf-cart.png" alt="">
                                        <p>golf-cart</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/large-pickup.png" alt="">
                                        <p>large-pickup</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/medium-pickup.png" alt="">
                                        <p>medium-pickup</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/travel-trailer.png" alt="">
                                        <p>travel-trailer</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/boat-trailer.png" alt="">
                                        <p>boat-trailer</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/others.png" alt="">
                                        <p>others</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="text-align: center;margin:10px auto;">
                                <div class="nex" id="quote">Get A Quote</div>
                            </div>
                        </div>
                        <div class="part2" id="part2">
                            <div id="ip"></div>
                            <div class="form-group">
                                <label for="">Email</label><br>
                                <input type="email" name="user_email" placeholder="Enter Your Email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label><br>
                                <input type="text" placeholder="Enter Your Phone" name="phone_number" id="phone" min="10" onkeyup="formatPhoneNumber(this)" max="10" required>
                            </div>
                            <div class="form-group" style="text-align: center;margin:10px auto;">
                                <input type="submit" value="Previous" id="previous">
                                <input type="submit" value="submit" name="submit" id="next-step">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="top-review-row">
        <div class="top-review-col">
            <div class="top-review-box">
                <div class="top-review-detail">
                    <span>GOOGLE</span><br>
                    <span class="top-rating-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i></span><br>
                    <span style="font-size: small;color:grey;">(14,534 reviews)</span>
                </div>
                <div class="top-review-ratings" style="text-align: center;">
                    <span class="top-rating-font"><strong>4.8</strong></span>
                    <div class="top-review-img"><img src="./assets/images/google.png" width="100%" height="100%" alt=""></div>
                </div>
            </div>
        </div>
        <div class="top-review-col">
            <div class="top-review-box">
                <div class="top-review-detail">
                    <span>Transport Reviews</span><br>
                    <span class="top-rating-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i></span><br>
                    <span style="font-size: small;color:grey;">(3534 reviews)</span>
                </div>
                <div class="top-review-ratings" style="text-align: center;">
                    <span class="top-rating-font"><strong>4.7</strong></span>
                    <div class="top-review-img"><img src="./assets/images/transport-reviews.png" width="100%" height="100%" alt=""></div>
                </div>
            </div>
        </div>
        <div class="top-review-col">
            <div class="top-review-box">
                <div class="top-review-detail">
                    <span>BBB</span><br>
                    <span class="top-rating-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></span><br>
                    <span style="font-size: small;color:grey;">(7534 reviews)</span>
                </div>
                <div class="top-review-ratings" style="text-align: center;">
                    <span class="top-rating-font"><strong>4.9</strong></span>
                    <div class="top-review-img"><img src="./assets/images/bbb.png" width="100%" height="100%" alt=""></div>
                </div>
            </div>
        </div>
        <div class="top-review-col">
            <div class="top-review-box">
                <div class="top-review-detail">
                    <span>TRUSTPILOT</span><br>
                    <span class="top-rating-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></span><br>
                    <span style="font-size: small;color:grey;">(6634 reviews)</span>
                </div>
                <div class="top-review-ratings" style="text-align: center;">
                    <span class="top-rating-font"><strong>4.7</strong></span>
                    <div class="top-review-img"><img src="./assets/images/trustpilot.png" width="100%" height="100%" alt=""></div>
                </div>
            </div>
        </div>
    </div>
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
                <span>Our professionals clear all the documentation and other processes and ready your vehicle for shipping </span>
            </div>
            <div class="how-a"></div>
            <div class="how-box">
                <p><b>Vehicle delivery</b></p>
                <span>We ensure our professionals deliver your vehicle on the decided date and we provide live shipment tracking with 24×7 live support.</span>
            </div>
        </div>
    </section>
    <div class="how-it-work-v">
        <p class="how-it-work-title">How we Ship Your Car from Point A to Point B</p>
        <div class="how-it-work-steps-v">
            <div class="how-it-work-box" style="text-align: center;">
                <strong>STEP 1</strong> <br>
                <b>Get Quotes</b>
                <p style="text-align: start;">It is never easy to get car shipping quotes with other Vehicle Transportation companies, but we here make the process simple as our Auto Transport Experts are just a call away ( +1 (833) 233-4447. ) Our Vehicle Shipping Quotes are based on cost on which we can safely deliver your vehicle to your Desired location on a given time including full Car insurance coverage and taxes in it.</p>
            </div>
            
            <div class="how-it-work-box" style="background-color: tomato;text-align: center;">
                <strong>STEP 2</strong> <br>
                <b>Vehicle Pickup</b>
                <p style="text-align: start;">On Provided Date our Specialise Auto Transport Carrier will contact you and inform you about the Car Pickup Time and Location as Provided earlier. The Driver will pickup the Car with all required tools to ensure the it gets safely loaded on the truck. Driver will take pictures and Videos of the Vehicle and will confirm the same to the Auto Transport Agent</p>
            </div>
            <div class="how-it-work-box av" style="background-color: green;text-align: center;">
                <strong>STEP 3</strong> <br>
                <b>Shipping Process</b>
                <p style="text-align: start;">As soon as we receive your car the care and safety of your vehicle is our Responsibility. We understand that you are not only shipping your car but also trusting us. We provide you the GPS tracking system most of the time to track the current location of the Auto Carrier so you can have peace of mind. As you are shipping with the best Auto Transportation company so your CAr Shipment is Fully insured.</p>
            </div>
            <div class="how-it-work-box" style="background-color: #fc038c;text-align: center;">
                <strong>STEP 4</strong> <br>
                <b>Vehicle Delivery</b>
                <p style="text-align: start;">Like Pickup, Our Auto Carrier Driver will call you and confirm you about the Delivery Time on the mentioned date by the Transport Agent. Our Driver will come to your desired location as close as possible . At the time of Vehicle Delivery we charge you the Final Payment as mentioned during the booking and Drivers take Pictures and videos of the Car to ensure transportation agent about the successful delivery of the Vehicle.</p>
            </div>
        </div>
    </div>

    <section class="index-pricing-table">
        <h2>Based On Our Recent Car Shipping Experience Average Costs To Ship A Car Per Miles</h2>
       <div class="div-index-table">
       <table >
            <thead>
                <tr>
                    <th>Distance</th>
                    <th>Estimated Time</th>
                    <th>Estimated Open Transport Cost</th>
                    <th>Estimated Closed Transport Cost</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0 - 500 Miles</td>
                    <td>1 - 3 Days</td>
                    <td>$550</td>
                    <td>$850</td>
                </tr>
                <tr>
                    <td>500 - 1500 Miles</td>
                    <td>3 - 5 Days</td>
                    <td>$970</td>
                    <td>$1370</td>
                </tr>
                </tr>
                <tr>
                    <td>1500 - 2500 Miles</td>
                    <td>5 - 7 Days</td>
                    <td>$1270</td>
                    <td>$1650</td>
                </tr>
                </tr>
                <tr>
                    <td>2500 Miles And Above</td>
                    <td>7 - 9 Days</td>
                    <td>$1580</td>
                    <td>$2150</td>
                </tr>
            </tbody>
        </table>
       </div>
    </section>

    <section class="Calculator-page">
        <h2>How Car Shipment Cost is Calculated</h2>
        <p>Based on several factors that occurs during the auto transportation journey help us in evaluating the total cost to ship your vehicle. There are other factors excluding the below give factors like, modification of Vehicle, time of the year, express shipment and many more.</p>
            <div class="calculator-row">
                <div class="colculator-col">
                    <h3>Weight & Size of Vehicle</h3>
                    <p> Small car are light weighted and long cars are heavy thus affect the number of Cars accommodate in a trailer ultimately affects the cost.</p>
                </div>
                <div class="colculator-col">
                    <h3>Type of Trailer</h3>
                    <p >Open Carrier are usually cheaper and can carry more number of vehicles whereas enclosed carriers are expensive in nature.</p>
                </div>
                <div class="colculator-col">
                    <h3>Transport Distance</h3>
                    <p>Shorter the Shipping distance is lower the price and as number of miles increase the days, fuel, and other factors affects the cost.</p>
                </div>
                <div class="colculator-col2">
                    <h3>Condition of Vehicle</h3>
                    <p>If the Vehicle is in running condition than it would be easy to transport but if car is in non running state there are other tools needed thus cost increses</p>
                </div>
                <div class="colculator-col3">
                    <h3>Exact Shipping Cost</h3>
                    <p>Your Shipping cost is ready including Insurance & Taxes. Let us Book your Shipment now</p>
                </div>
            </div>
    </section>

    <section class="service-section">
        <h2 class="sercive-heading"><span>Some Major Auto Shipping Routes In USA</span></h2>
        
        <p class="our-ser">We are specialise in shipping Vehicles all across the States. Some of our Most Popular Shipping Routes are mentioned here where we have our Auto Transportation Experts and group of Auto Transport Carriers to make the Shipping Experience at its best.</p>

        <div class="grid">

            <div class="item ">
                <a href="<?= get_home_url()  ?>california-to-florida-vehicle-auto-transport"><img src="<?= get_home_url()  ?>assets/images/California-to-Florida.webp" alt="">
                    <span class="item2 items1">CALIFORNIA TO FLORIDA</span></a>
            </div>
            <div class="item">
                <a href="<?= get_home_url()  ?>california-to-hawaii-vehicle-auto-transport"><img src="<?= get_home_url()  ?>assets/images/California-To-Hawaii.webp" alt="">
                    <span class="item3 items1">CALIFORNIA TO HAWAII</span></a>
            </div>
            <div class="item">
                <a href="<?= get_home_url()  ?>california-to-texas-vehicle-auto-transport"><img src="<?= get_home_url()  ?>assets/images/California-to-Texas.webp" alt="">
                    <span class="item4 items1">CALIFORNIA TO TEXAS</span></a>
            </div>
            <div class="item">
                <a href="<?= get_home_url()  ?>hawaii-to-mainland-vehicle-auto-transport"><img src="<?= get_home_url()  ?>assets/images/Hawaii-To-Mainland.webp" alt="">
                    <span class="item5 items1">HAWAII TO MAINLAND</span></a>
            </div>
            <div class="item ">
                <a href="<?= get_home_url()  ?>new-york-to-nevada-auto-transport"><img src="<?= get_home_url()  ?>assets/images/New-York-To-Nevada.webp" alt="">
                    <span class="item1 items1 ">NEW-YORK TO NEVADA</span></a>
            </div>
            <div class="item">
                <a href="<?= get_home_url()  ?>hawaii-to-california-auto-transport-service"><img src="<?= get_home_url()  ?>assets/images/Hawaii-To-Mainland2.webp" alt="">
                    <span class="item6 items1">HAWAII TO CALIFORNIA</span></a>
            </div>
        </div>
        <div class="more-service">
            <a href="<?= get_home_url()  ?>"><button>Other Shipping Routes</button></a>
        </div>

    </section>
    <section class="why-choose-us">
        <div class="why-choose-us-bg"></div>
        <div class="why-us">
            <p class="why-choose-us__title">Reasons to Choose us for your Upcoming Auto Shipment Needs</p>
            <!-- <p style="text-align: center;color:white;margin-bottom:3.5%;padding:0">We Provide the Best Facilites For
                Transport</p> -->
          

            <div class="why-us-row">
                <div class="why-us-col">
                    <div class="why-us-icon"><img src="./assets/images/ach.svg" width="100%" height="100%" alt=""></div>
                    <h3>11 Years of Auto Transportation</h3>
                    <p>Being an experience auto transporter in the industry, we understand most of the shipping routes and challenges during the vehicle transportation making your car shipping process easy and reliable.</p>
                </div>
                <div class="why-us-col">
                <div class="why-us-icon"><img src="./assets/images/exp.svg" width="100%" height="100%" alt=""></div>
                    <h3>Auto Transport Experts</h3>
                    <p>In the process of Car Shipment it is very necessary to have excellent customer support agents to answer and assist the shipment process Our Auto Professionals goes an extra mile to make your complex car shipping process an easy one.</p>
                </div>
                <div class="why-us-col">
                <div class="why-us-icon"><img src="./assets/images/zero.svg" width="100%" height="100%" alt=""></div>
                    <h3>$ Zero Down Payment</h3>
                    <p>We never take any upfront payment to schedule your Auto Transportation.We charge you  money at the time of assigning of the driver. Once Driver is appointed we get in touch to confirm the date and time of the Auto Carrier.</p>
                </div>
            </div>
            <div class="why-us-row">
            
                <div class="why-us-col">
                <div class="why-us-icon"><img src="./assets/images/price.svg" width="100%" height="100%" alt=""></div>
                    <h3> Price Match</h3>
                    <p>You will have unbeatable savings with the Ship Car To Another State Price Match guarantee! We have beaten every competitor's price and we ensure you always get the best services at lowest market cost .</p>
                </div>
                <div class="why-us-col">
                <div class="why-us-icon"><img src="./assets/images/insure.svg" width="100%" height="100%" alt=""></div>
                    <h3>Fully Insured</h3>
                    <p>Our Auto insurance are from the top notch insurance agency making your car shipment 100% insured covering all kind of damages if occured during the car shipment process. Insurance coverage are always included in the price that we offer.</p>
                </div>
                <div class="why-us-col">
                <div class="why-us-icon"><img src="./assets/images/peace.svg" width="100%" height="100%" alt=""></div>
                    <h3>Peace of Mind</h3>
                    <p>Our Responsibility begins once you finalize the order with us. We answer all your questions at the time of booking, work as per your desired Car shipping requirement with the driver and provide you GPS tracking system to track Carrier during transportation.</p>
                </div>
            </div>
        </div>

    </section>
    <section class="call-to-action">
        <div class="row" style="align-items: center;">
            <div class="call-to-action-first-div"><h2>Ready to Ship Your Car with Best Auto Transporter in the Vehicle Transportation Industry ?</h2></div>
            <div style="display: flex;gap:1%;" class="call-to-btn-wrap"><a href="get-quotes" style="margin-right: 5px;"><button>Get Free Instant Quote</button></a>
            <a href="tel:+1 (833) 233-4447"><button>+1 (833) 233-4447</button></a></div>
        </div>
    </section>
    <section class="blog-section">
        <p class="blog-section-para">SOME OF OUR NEWS FROM LATEST BLOG</p>
        <h2 class="blog-section-heading"> Get the latest news, advice & best practice from blog</h2>
        <div class="blog-body row">
            <div class="blog-item">
                <img src="<?= get_home_url()  ?>assets/images/California-to-Texas.webp" width="100%" height="100%" alt="">
                <div class="blog-detail">
                    <div class="blog-admin-detail">
                        <div class="blog-date"><i class="ri-calendar-2-line"></i>September 5 2023</div>
                        <div class="blog-admin"><i class="ri-user-star-line"></i>Admin</div>
                    </div>
                    <p>Enclosed Auto Transport Chicago(RAS)</p>
                    <a href="<?= get_home_url()  ?>"><button>Read More</button></a>
                </div>
            </div>
            <div class="blog-item">
                <img src="<?= get_home_url()  ?>assets/images/Hawaii-To-Mainland.webp" width="100%" height="100%" alt="">
                <div class="blog-detail">
                    <div class="blog-admin-detail">
                        <div class="blog-date"><i class="ri-calendar-2-line"></i>September 10 2023</div>
                        <div class="blog-admin"><i class="ri-user-star-line"></i>Admin</div>
                    </div>
                    <p>Best Auto Shipping Company USA</p>
                    <a href="<?= get_home_url()  ?>"><button>Read More</button></a>
                </div>
            </div>
            <div class="blog-item">
                <img src="<?= get_home_url()  ?>assets/images/New-York-To-Nevada.webp" alt="" width="100%" height="100%">
                <div class="blog-detail">
                    <div class="blog-admin-detail">
                        <div class="blog-date"><i class="ri-calendar-2-line"></i>September 15 2023</div>
                        <div class="blog-admin"><i class="ri-user-star-line"></i>Admin</div>
                    </div>
                    <p>Some important tips for international shipping</p>
                    <a href="<?= get_home_url()  ?>"><button>Read More</button></a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="testmo">
        <!-- <img src="https://cdn.pixabay.com/photo/2021/12/02/06/08/car-carrier-trailer-6839728_640.jpg"
            class="testo-bgimg" alt=""> -->
        <div class="testo-bgimg"></div>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="t-s">
                    <i class="ri-double-quotes-l" style="font-size: 4rem;"></i>
                    <h2>Mark de cole</h2>
                    <p style="font-size: 2rem;">They did a great job delivering my two-wheeler in their trailer. Auto Shippers did a great job of
                        delivering it. This is my third time with them, and I am always happy with their services.</p>
                        <div class="top-review-img2"><img src="./assets/images/google2.png" width="100%" height="100%" alt="" ></div>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="t-s">
                    <i class="ri-double-quotes-l" style="font-size: 4rem;"></i>
                    <h2>Steven Faith</h2>
                    <p style="font-size: 2rem;">I asked them for car shipping in a trailer to Vegas. I have been using their services for many
                        years and I am never disappointed. The vehicles arrived quickly and safely.</p>
                        <div class="top-review-img2"><img src="./assets/images/transpoorts.png" width="100%" height="100%" alt="" ></div>

                </div>
            </div>

            <div class="mySlides fade">
                <div class="t-s">
                    <i class="ri-double-quotes-l" style="font-size: 4rem;"></i> 
                    <h2>Estep Meade</h2>
                    <p style="font-size: 2rem;">Very accurate and in-time services. Their home pickup was excellent, and auto shippers took care
                        of the vehicle very well. If I had known they were so good, I would have also asked them for car
                        shipping.</p>
                        <div class="top-review-img2"><img src="./assets/images/trustpilot2.png" width="100%" height="100%" alt="" ></div>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="t-s">
                    <i class="ri-double-quotes-l" style="font-size: 4rem;"></i>
                    <h2>Mark Hill</h2>
                    <p style="font-size: 2rem;">Their auto shipping services are accurate whether it is home pickup or taking care of my
                        vehicles. I was happy with all their services and their shipping and transport services were
                        better than anyone else.</p>
                        <div class="top-review-img2"><img src="./assets/images/google2.png" width="100%" height="100%" alt="" ></div>
                </div>
            </div>
            <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        </div>
    </section>
    <section class="services-we-provide">
        <div class="services-we-provide-row">
            <div class="services-we-provide-col">
                <div class="services-we-provide-img">
                    <img src="./assets/images/california-to-alabama.webp" width="100%" height="100%" alt="">
                </div>
            </div>
            <div class="services-we-provide-col services-we-provide-content" >
                <h2>Complete Auto Transportation Solution Under One Roof</h2>
                <div class="provided-services">
                    <h3>Open Transport Carrier</h3>
                    <p>Open Air Carrier are affordable shipping options to move your car as it can carry more vehicles and being most convenient options there are wide number of open air carriers available in the Auto Transportation Industry</p>
                </div>
                <div class="provided-services">
                    <h3>Enclosed Carrier</h3>
                    <p>Enclosed Carriers are most secured mode of transporting your vehicle from one state to another. It is a hard iron box from outside and soft from inside inbuilt with car protective features thus gives the car owners a peace of mind.</p>
                </div>
                <div class="provided-services">
                    <h3>Door to Door Transport</h3>
                    <p>At Shipcartoanotherstate.com we ensure about Car Pick up and Delivery point as close as possible to your Desired location making it convenient and hassle free for our Customers.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="list-of-car">
        <div class="list-of-car-1">
            <img src="./assets/images/Luxury.png" width="100%" height="100%" alt="">
            <p style="font-size:medium;color:rgb(13, 13, 115);font-weight: bold;">Luxury Car Shipping</p>
        </div>
        <div class="list-of-car-1">
        <img src="./assets/images/mclaren-car-Sport.png" width="100%" height="100%" alt="">
            <p style="font-size:medium;color:rgb(13, 13, 115);font-weight: bold;">Sports Car Shipping</p>
        </div>
        <div class="list-of-car-1">
        <img src="./assets/images/Black-Lexus.png" width="100%" height="100%" alt="">
            <p style="font-size:medium;color:rgb(13, 13, 115);font-weight: bold;">Long Car Shipping</p>
        </div>
        <div class="list-of-car-1">
        <img src="./assets/images/mini-truck.png" width="100%" height="100%" alt="">
            <p style="font-size:medium;color:rgb(13, 13, 115);font-weight: bold;">Mini Truck Shipping</p>
        </div>
        <div class="list-of-car-1">
        <img src="./assets/images/classic-car.png" width="100%" height="100%" alt="">
            <p style="font-size:medium;color:rgb(13, 13, 115);font-weight: bold;">Classic Car Shipping</p>
        </div>
        <div class="list-of-car-1">
        <img src="./assets/images/mini-car.png" width="100%" height="100%" alt="">
            <p style="font-size:medium;color:rgb(13, 13, 115);font-weight: bold;">Small Car Shipping</p>
        </div>
        <div class="list-of-car-1">
        <img src="./assets/images/Ninja-H2.png" width="100%" height="100%" alt="">
            <p style="font-size:medium;color:rgb(13, 13, 115);font-weight: bold;">Motercycle Shipping</p>
        </div>
        
    </section>
    <section class="state-list">
        <div class="state-list-bg">
            <h2>Vehicle Shipping States</h2>
        <div class="state-list-row">
            <div class="state-list-col">
                <ul>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Alabama.jpeg" width="100%" height="100%" alt=""></div>Alabama Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Alaska.svg" width="100%" height="100%" alt=""></div>Alaska Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Arizona.svg" width="100%" height="100%" alt=""></div>Arizona Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Arkansas.svg" width="100%" height="100%" alt=""></div>Arkansas Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/california.png" width="100%" height="100%" alt=""></div>California Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/connecticut.webp" width="100%" height="100%" alt=""></div>Connecticut Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/delaware.webp" width="100%" height="100%" alt=""></div>Delaware Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/florida.webp" width="100%" height="100%" alt=""></div>Florida Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/georgia.png" width="100%" height="100%" alt=""></div>Georgia Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Hawaii.png" width="100%" height="100%" alt=""></div>Hawaii Car Transport</a></li>
                </ul>
            </div>
            <div class="state-list-col">
                <ul>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Illinois.png" width="100%" height="100%" alt=""></div>Illinois Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Indiana.png" width="100%" height="100%" alt=""></div>Indiana Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Iowa.png" width="100%" height="100%" alt=""></div>Iowa Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Kansas.png" width="100%" height="100%" alt=""></div>Kansas Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Kentucky.png" width="100%" height="100%" alt=""></div>Kentucky Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Louisiana.png" width="100%" height="100%" alt=""></div>Louisiana Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Maine.png" width="100%" height="100%" alt=""></div>Maine Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Maryland.png" width="100%" height="100%" alt=""></div>Maryland Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Massachusetts.png" width="100%" height="100%" alt=""></div>Massachusetts Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Michigan.png" width="100%" height="100%" alt=""></div>Michigan Auto Transport</a></li>
                </ul>
            </div>
            <div class="state-list-col">
                <ul>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Minnesota.png" width="100%" height="100%" alt=""></div>Minnesota Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Mississippi.png" width="100%" height="100%" alt=""></div>Mississippi Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Missouri.png" width="100%" height="100%" alt=""></div>Missouri Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Montana.png" width="100%" height="100%" alt=""></div>Montana Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Nebraska.png" width="100%" height="100%" alt=""></div>Nebraska Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Nevada.png" width="100%" height="100%" alt=""></div>Nevada Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/New-Hampshire.png" width="100%" height="100%" alt=""></div>New Hampshire Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/New-Jersey.png" width="100%" height="100%" alt=""></div>New Jersey Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/New-Mexico.png" width="100%" height="100%" alt=""></div>New Mexico Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/New-York.png" width="100%" height="100%" alt=""></div>New York Auto Transport</a></li>
                </ul>
            </div>
            <div class="state-list-col">
                <ul>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/North-Carolina.png" width="100%" height="100%" alt=""></div>North Carolina Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/North-Dakota.png" width="100%" height="100%" alt=""></div>North Dakota Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Ohio.png" width="100%" height="100%" alt=""></div>Ohio Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Oklahoma.png" width="100%" height="100%" alt=""></div>Oklahoma Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Oregon.png" width="100%" height="100%" alt=""></div>Oregon Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Pennsylvania.png" width="100%" height="100%" alt=""></div>Pennsylvania Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Rhode-Island.png" width="100%" height="100%" alt=""></div>Rhode Island Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/South-Carolina.png" width="100%" height="100%" alt=""></div>South Carolina Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/South-Dakota.png" width="100%" height="100%" alt=""></div>South Dakota Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Tennessee.png" width="100%" height="100%" alt=""></div>Tennessee Auto Transport</a></li>
                </ul>
            </div>
            <div class="state-list-col">
                <ul>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Texas.png" width="100%" height="100%" alt=""></div>Texas Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Utah.png" width="100%" height="100%" alt=""></div>Utah Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Vermont.png" width="100%" height="100%" alt=""></div>Vermont Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Virginia.png" width="100%" height="100%" alt=""></div>Virginia Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Washington.png" width="100%" height="100%" alt=""></div>Washington Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/West-Virginia.png" width="100%" height="100%" alt=""></div>West Virginia Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Wisconsin.png" width="100%" height="100%" alt=""></div>Wisconsin Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Wyoming.png" width="100%" height="100%" alt=""></div>Wyoming Car Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Colorado.png" width="100%" height="100%" alt=""></div>Colorado Auto Transport</a></li>
                    <li><a href=""><div class="img-box"><img src="./assets/images/flags/Idaho.png" width="100%" height="100%" alt=""></div>Idaho Auto Transport</a></li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section class="section5">
        <h2>Frequently asked questions</h2>

        <div class="faq">
            <div class="question" id="plus_">How much does it cost to ship my car to another state with ShipCartoAnotherState.com?
                <span><b>+</b></span>
            </div>
            <div class="answer" id="answer2">
                <p>The cost of shipping varies depending on factors like distance, vehicle size, and chosen service. You can request a personalized quote on our website for accurate pricing.</p>
            </div>
        </div>
        <div class="faq">
            <div class="question" id="plus_">What's the average delivery time for car shipments across state lines?
                <span><b>+</b></span>
            </div>
            <div class="answer" id="answer3">
                <p>Delivery times vary, but typically range from 5 to 10 days. Factors like distance and route can impact delivery times. Contact us for a more precise estimate.</p>
            </div>
        </div>
        <div class="faq">
            <div class="question" id="plus_">Do you provide insurance for my vehicle during the shipping process?<span><b>+</b></span></div>
            <div class="answer" id="answer4">
                <p>Yes, we offer insurance coverage for your vehicle during transit. Our top priorities are your car's safety and protection.</p>
            </div>
        </div>
        <div class="faq">
            <div class="question" id="plus_">Are there any specific vehicle requirements or restrictions for shipping?<span><b>+</b></span></div>
            <div class="answer" id="answer5">
                <p>We can accommodate various vehicle types, including cars, trucks, and motorcycles. Please ensure your vehicle is in working condition and adequately prepared for transport.</p>
            </div>
        </div>

        <div class="faq">
            <div class="question" id="plus_">Can I track the progress of my car shipment online?<span><b>+</b></span>
            </div>
            <div class="answer" id="answer7">
                <p>Yes, we provide a tracking service that allows you to monitor your vehicle's progress throughout the shipping journey. You'll have peace of mind knowing where your car is at all times.</p>
            </div>
        </div>
        <div class="faq">
            <div class="question" id="plus_">What do I need to prepare or provide before scheduling car transport with your company?<span><b>+</b></span></div>
            <div class="answer" id="answer8">
                <p>Before scheduling, make sure your vehicle is clean, remove personal items, and secure loose parts. We'll guide you through the specific requirements during the booking process to ensure a smooth experience
                </p>
            </div>
        </div>

        <!-- <div class="section2_btn">
            <a href=""><button class="button_head">Reserve Your Spot</button></a>
        </div> -->

    </section>
    <?php include './footer.php' ?>
    <div class="sitebutton sitebutton-call" id="sitebutton">
        <a href="tel:+1 (833) 233-4447" ><button style="font-size: 1.2rem;"><i class="ri-phone-fill"></i> +1 (833) 233-4447</button></a>
    </div>
    <div class="sitebutton" id="sitebutton">
        <a href="<?= get_home_url()  ?>get-quotes"><button>GET FREE QUOTES</button></a>
    </div>


    <div class="query-form-body" id="query-form-body">
        <div class="query-form-bg"></div>
        <div class="query-form">
            <div class="query-details">
                <p><strong>Does your Shipment Include Sea Routes</strong></p>
            </div>
            <div class="query-btn">
                <button style="border:1px solid green" onclick="redirectform()">Yes</button>
                <button style="background-color: red;" onclick="closerdiv()">No</button>
            </div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS2z-zMeHNf4laZiAbzjDBowLLm_wnjwo&v=3.exp&callback=Function.prototype&libraries=places"></script>
    <script>
        document.getElementById('quote').addEventListener('click', function(e) {

            let from = document.getElementById('origin-input').value
            let to = document.getElementById('destination-input').value
            let date = document.getElementById('ship_date').value
            let vehicle = document.getElementById('ship_vehicle').value
            let isEmpty = document.getElementById('distance_').value;
            if (from == '' || from == null || to == '' || to == null || date == '' || date == null || vehicle == '' || vehicle == null) {
                document.getElementById('error').style.display = 'grid'
                document.getElementById('error-text').innerText = "Fields Can't Be Empty ";
                setTimeout(() => {
                    document.getElementById('error').style.display = 'none'
                }, 2000)
            } else if (isEmpty == '' || isEmpty == null) {
                document.getElementById('error').style.display = 'grid'
                document.getElementById('error-text').innerText = "Directions request returned no results";
                setTimeout(() => {
                    document.getElementById('error').style.display = 'none'
                }, 3000)
            } else {
                document.getElementById('part1').style.display = 'none';
                document.getElementById('part2').style.display = 'block';
            }
        })

        const originInput = document.getElementById('origin-input');
        const destinationInput = document.getElementById('destination-input');
        const originAutocomplete = new google.maps.places.Autocomplete(originInput);
        const destinationAutocomplete = new google.maps.places.Autocomplete(destinationInput);
        const directionsService = new google.maps.DirectionsService();
        const directionsRenderer = new google.maps.DirectionsRenderer();

        // Add a listener for when the user selects places in both fields.
        originAutocomplete.addListener('place_changed', calculateDistance);
        destinationAutocomplete.addListener('place_changed', calculateDistance);

        function calculateDistance() {
            const origin = originAutocomplete.getPlace();
            const destination = destinationAutocomplete.getPlace();

            if (!origin || !destination) {
                return; // Handle invalid input
            }

            const request = {
                origin: origin.geometry.location,
                destination: destination.geometry.location,
                travelMode: 'DRIVING', // You can change this to other travel modes like 'WALKING' or 'TRANSIT'
                unitSystem: google.maps.UnitSystem.IMPERIAL,
            };

            directionsService.route(request, function(response, status) {
                if (status === 'OK') {
                    let distance = response.routes[0].legs[0].distance.text;
                    // Display or use the distance information as needed.
                    document.getElementById('distance').innerHTML = '<input type="text" value=' + distance + ' name="path_distance" id="distance_" hidden>'
                } else {
                    // Handle directions request error
                    document.getElementById('distance').innerHTML = '<input type="text" name="path_distance" id="distance_" hidden>'
                    document.getElementById('error').style.display = 'grid'
                    document.getElementById('error-text').innerText = "Directions request returned no results ";
                    setTimeout(() => {
                        document.getElementById('error').style.display = 'none'
                        opnerdiv()
                    }, 1500)
                }
            });
        }

        document.getElementById('form-').addEventListener('submit', function(e) {
            // e.preventDefault()
            let email = document.getElementById('email').value
            let mobile = document.getElementById('phone').value
            if (email == '' || email == null || mobile == '' || mobile == null) {
                e.preventDefault()
                document.getElementById('error').style.display = 'grid'
                document.getElementById('error-text').innerText = "Fields Can't Be Empty ";
                setTimeout(() => {
                    document.getElementById('error').style.display = 'none'
                }, 2000)
            }
        })



        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
        }

        a = document.querySelectorAll('#plus_')
        for (i = 0; i < a.length; i++) {
            a[i].addEventListener("click", function(e) {
                e.preventDefault();
                this.parentElement.children[0].children[0].classList.toggle('rotate_');
                this.parentElement.children[1].classList.toggle("plus_");
            })
        }

        // document.getElementById('quote').addEventListener('click', function(e) {
        //     e.preventDefault();
        //     document.getElementById('part1').style.display = 'none';
        //     document.getElementById('part2').style.display = 'block';

        // })
        document.getElementById('previous').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('part2').style.display = 'none';
            document.getElementById('part1').style.display = 'block';

        })

        function formatPhoneNumber(input) {
            // Remove all non-digit characters from the input
            const phoneNumber = input.value.replace(/\D/g, '');

            // Apply the desired pattern (e.g., XXX-XXX-XXXX)
            if (phoneNumber.length <= 3) {
                input.value = phoneNumber;
            } else if (phoneNumber.length <= 6) {
                input.value = `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(3)}`;
            } else {
                input.value = `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(3, 6)}-${phoneNumber.slice(6, 10)}`;
            }

            // Display the formatted phone number
            document.getElementById('formattedPhoneNumber').textContent = input.value;
        }

        document.getElementById('navbar2').addEventListener('click', () => {
            document.getElementById('navbar2').style.display = 'none';
            document.getElementById('navbar3').style.display = 'block';
            document.getElementById('fordesktop').style.display = 'grid';
        })
        document.getElementById('navbar3').addEventListener('click', () => {
            document.getElementById('navbar2').style.display = 'block';
            document.getElementById('navbar3').style.display = 'none';
            document.getElementById('fordesktop').style.display = 'none';
        })

        var ip
        fetch('https://api.ipify.org?format=json')
            .then(response => response.json())
            .then(data => {
                ip = data.ip;
                document.getElementById('ip').innerHTML += "<input type='text' name='ip' value='" + ip + "' hidden>"
            })
            .catch(error => {
                console.log(error);
            });
        document.getElementById('ship_vehicle').addEventListener('click', () => {
            document.getElementById('car-option').style.display = 'grid'
        })

        var sel = document.querySelectorAll('#cars')
        for (i = 0; i < sel.length; i++) {
            sel[i].addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('ship_vehicle').value = "" + this.children[1].innerText + ""
                document.getElementById('car-option').style.display = 'none'
            })
        }
        var image = document.getElementById('desk_image');
        var originalSrc = '<?= get_home_url()  ?>assets/images/ship-car-to-another-state.webp';
        var alternateSrc = '<?= get_home_url()  ?>assets/images/ship-car-to-another-state2.webp';

        function handleResize() {
            var windowWidth = window.innerWidth || document.documentElement.clientWidth;
            if (windowWidth >= 500) {
                image.src = originalSrc;
            } else {
                image.src = alternateSrc;
            }
        }
        window.addEventListener('resize', handleResize);
        handleResize();


        window.addEventListener('scroll', function() {
            a = window.pageYOffset
            if (a >= 500) {
                ac = document.querySelectorAll('#sitebutton')
                for(i=0;i<ac.length;i++){
                    ac[i].style.display = 'block'
                }
                // document.getElementById('sitebutton').style.display = 'block'
            } else {
                // document.getElementById('sitebutton').style.display = 'none'
                ac = document.querySelectorAll('#sitebutton')
                for(i=0;i<ac.length;i++){
                    ac[i].style.display = 'none'
                }
            }
        });

        function closerdiv() {
            document.getElementById('query-form-body').style.display = 'none';
            document.getElementById('destination-input').value = '';
        }

        function opnerdiv() {
            document.getElementById('query-form-body').style.display = 'grid';
        }

        function redirectform() {
            window.location = 'query'
        }
    </script>
</body>

</html>

<!-- 
Home 
About 
Contact
Services
Blogs





city from 
city to
car model
date of journey
email
phone

 -->