<?php include './routes.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <!-- change -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="<?= get_home_url()  ?>assets/css/index.css" async>
    <link rel="icon" href="https://shipcartoanotherstate.com/assets/images/Modern.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css" integrity="sha512-/VYneElp5u4puMaIp/4ibGxlTd2MV3kuUIroR3NSQjS2h9XKQNebRQiyyoQKeiGE9mRdjSCIZf9pb7AVJ8DhCg==" crossorigin="anonymous" referrerpolicy="no-referrer"  as="style" onload="this.onload=null;this.rel='stylesheet'" async/>
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

        /*  */
    </style>
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="error" id="error">
        <p id="error-text">Directions request returned no results</p>
    </div>
    <section class="herosection">
        <div class="herosection_">
            <div class="herosection_bg">
            </div>
            <img src="<?= get_home_url()  ?>assets/images/ship-car-to-another-state.webp" id="desk_image"  fetchpriority="high" width="100%" height="100%" class="backgroundimg" alt="">
            <div class="row">
                <div class="herosection_content">
                    <h1>Best Auto Shipping Company In Usa</h1>
                    <p class="hero-p">We provide our customers an array of solutions for our clientele, such as cross-state cargo transport, quick consignment dispatch, domestic relocations, automobile conveyance, real-time package monitoring, and a plethora of additional offerings.</p>
                    <div class="rating">
                        <img src="./assets/images/b.svg" class="review-img" width="150px" height="100%" alt="">
                        <p><b>ShipCartoAnotherState</b> rating<br> Based on 13956 customer review</p>
                    </div>
                </div>
                <div class="form-div">
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
                                <input type="text" placeholder="Address or City" id="destination-input" name="ship_to" >
                            </div>
                            <div class="form-group">
                                <label for="">Date OF Pickup</label><br>
                                <input type="date"  name='pick_up_date' min="<?php echo date('Y-m-d'); ?>" max="2030-12-31" placeholder="Pickup Date" id="ship_date">
                            </div>
                            <div class="form-group" id="distance"> </div>
                            <div class="form-group">
                                <label for="">Vehicle Size</label><br>
                                <input type="text" placeholder="Select an option" name="vehicle_size" id="ship_vehicle" readonly>
                                <div class="car-option" id="car-option">
                                    <div class="cars" id="cars"><img src="./assets/images/car/boat-trailer.png" alt="">
                                        <p>boat-trailer</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/dually-pickup.png" alt="">
                                        <p>dually-pickup</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/fullsize-van.png" alt="">
                                        <p>fullsize-van</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/golf-cart.png" alt="">
                                        <p>golf-cart</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/hypercar.png" alt="">
                                        <p>hypercar</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/large-car.png" alt="">
                                        <p>large-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/large-pickup.png" alt="">
                                        <p>large-pickup</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/large-suv.png" alt="">
                                        <p>large-suv</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/medium-pickup.png" alt="">
                                        <p>medium-pickup</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/midsize-suv.png" alt="">
                                        <p>midsize-suv</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/midsize-car.png" alt="">
                                        <p>midsize-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/mini-van.png" alt="">
                                        <p>mini-van</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/motorcycle.png" alt="">
                                        <p>motorcycle</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/small-car.png" alt="">
                                        <p>small-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/small-suv.png" alt="">
                                        <p>small-suv</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/small_car.png" alt="">
                                        <p>small-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/sports-car.png" alt="">
                                        <p>sports-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/travel-trailer.png" alt="">
                                        <p>travel-trailer</p>
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
    <section class="service-section">
        <h2 class="sercive-heading"><span>Our Services</span></h2>
        <p class="our-ser">We offers a range of services to their customers, including Interstate Shipping, Freight Forwarding, Express Delivery, Residential Moving,Commercial Shipping,Vehicle Transport,Online Tracking and many more</p>

        <div class="grid">

            <div class="item ">
                <img src="<?= get_home_url()  ?>assets/images/California-to-Florida.webp" alt="">
                <span class="item2 items1">CALIFORNIA TO FLORIDA</span>
            </div>
            <div class="item">
                <a href="<?= get_home_url()  ?>california-to-hawaii-vehicle-auto-transport"><img src="<?= get_home_url()  ?>assets/images/California-To-Hawaii.webp" alt="">
                <span class="item3 items1">CALIFORNIA TO HAWAII</span></a>
            </div>
            <div class="item">
                <a href="<?= get_home_url()  ?>california-to-texas-vehicle-auto-transport"><img src="<?=get_home_url()  ?>assets/images/California-to-Texas.webp" alt="">
                <span class="item4 items1">CALIFORNIA TO TEXAS</span></a>
            </div>
            <div class="item">
                <a href="<?=get_home_url()  ?>hawaii-to-mainland-vehicle-auto-transport"><img src="<?=get_home_url()  ?>assets/images/Hawaii-To-Mainland.webp" alt="">
                <span class="item5 items1">HAWAII TO MAINLAND</span></a>
            </div>
            <div class="item ">
                <a href="<?=get_home_url()  ?>new-york-to-nevada-auto-transport"><img src="<?=get_home_url()  ?>assets/images/New-York-To-Nevada.webp" alt="">
                <span class="item1 items1 ">NEW-YORK TO NEVADA</span></a>
            </div>
            <div class="item">
                <img src="<?=get_home_url()  ?>assets/images/Hawaii-To-Mainland2.webp" alt="">
                <span class="item6 items1">HAWAII TO CALIFORNIA</span>
            </div>
        </div>
        <div class="more-service">
            <a href="<?=get_home_url()  ?>services"><button>More Services</button></a>
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
                    <p>We Promise! For your vehicle safety. We provide the ultimate protection to your car as it matters most for you. Our top-notch security solutions like enclosed carriers and experienced drivers ensure your vehicle safety. Trust Ship Car To Another State expertise, because your car safety is our priority.
                    </p>
                </div>
                <div class="box">
                    <i class="ri-pin-distance-line"></i>
                    <p><b>EXPRESS SHIPPING</b></p>
                    <p>We excels in express shipping, guaranteeing swift and reliable deliveries, making them the top choice for urgent transportation needs.</p>
                </div>
                <div class="box">
                    <i class="ri-money-dollar-circle-line"></i>
                    <p><b>PRICE MATCH</b></p>
                    <p>You will have unbeatable savings with the Ship Car To Another State Price Match guarantee! We have beaten every competitor's price and we ensure you always get the best services at lowest market cost . </p>
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
                <span>Our professionals clear all the documentation and other processes and ready your vehicle for shipping </span>
            </div>
            <div class="how-a"></div>
            <div class="how-box">
                <p><b>Vehicle delivery</b></p>
                <span>We ensure our professionals deliver your vehicle on the decided date and we provide live shipment tracking with 24×7 live support.</span>
            </div>
        </div>
    </section>
    <section class="blog-section">
        <p class="blog-section-para">SOME OF OUR NEWS FROM LATEST BLOG</p>
        <h2 class="blog-section-heading"> Get the latest news, advice & best practice from blog</h2>
        <div class="blog-body row">
            <div class="blog-item">
                <img src="<?=get_home_url()  ?>assets/images/California-to-Texas.webp" width="100%" height="100%" alt="">
                <div class="blog-detail">
                    <div class="blog-admin-detail">
                        <div class="blog-date"><i class="ri-calendar-2-line"></i>September 5 2023</div>
                        <div class="blog-admin"><i class="ri-user-star-line"></i>Admin</div>
                    </div>
                    <p>Enclosed Auto Transport Chicago(RAS)</p>
                    <a href="<?=get_home_url()  ?>"><button>Read More</button></a>
                </div>
            </div>
            <div class="blog-item">
            <img src="<?=get_home_url()  ?>assets/images/Hawaii-To-Mainland.webp" width="100%" height="100%" alt="">
                <div class="blog-detail">
                    <div class="blog-admin-detail">
                        <div class="blog-date"><i class="ri-calendar-2-line"></i>September 10 2023</div>
                        <div class="blog-admin"><i class="ri-user-star-line"></i>Admin</div>
                    </div>
                    <p>Best Auto Shipping Company USA</p>
                    <a href="<?=get_home_url()  ?>"><button>Read More</button></a>
                </div>
            </div>
            <div class="blog-item">
            <img src="<?=get_home_url()  ?>assets/images/New-York-To-Nevada.webp" alt="" width="100%" height="100%">
                <div class="blog-detail">
                    <div class="blog-admin-detail">
                        <div class="blog-date"><i class="ri-calendar-2-line"></i>September 15 2023</div>
                        <div class="blog-admin"><i class="ri-user-star-line"></i>Admin</div>
                    </div>
                    <p>Some important tips for international shipping</p>
                    <a href="<?=get_home_url()  ?>"><button>Read More</button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="call-to-action">
        <div class="row">
            <h2>Want to know the cost of shipping a car with us?</h2>
            <a href="get-quotes" style="margin-right: 5px;"><button>Get Free Quote</button></a>
            <a href="tel:+1 (833) 233-4447"><button>Call Us Now</button></a>
        </div>
    </section>
    <section class="testmo">
        <!-- <img src="https://cdn.pixabay.com/photo/2021/12/02/06/08/car-carrier-trailer-6839728_640.jpg"
            class="testo-bgimg" alt=""> -->
        <div class="testo-bgimg"></div>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="t-s">
                    <img class="testo-img" src="https://cdn.pixabay.com/photo/2016/11/29/06/46/adult-1867889_640.jpg" alt="cost to ship car to another state">
                    <h2>Mark de cole</h2>
                    <p>They did a great job delivering my two-wheeler in their trailer. Auto Shippers did a great job of
                        delivering it. This is my third time with them, and I am always happy with their services.</p>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="t-s">
                    <img class="testo-img" src="https://cdn.pixabay.com/photo/2017/02/16/23/10/smile-2072907_640.jpg" alt="ship a car to another state">
                    <h2>Steven Faith</h2>
                    <p>I asked them for car shipping in a trailer to Vegas. I have been using their services for many
                        years and I am never disappointed. The vehicles arrived quickly and safely.</p>

                </div>
            </div>

            <div class="mySlides fade">
                <div class="t-s">
                    <img class="testo-img" src="https://cdn.pixabay.com/photo/2016/11/18/19/07/happy-1836445_640.jpg" alt="ship your car to another state">
                    <h2>Estep Meade</h2>
                    <p>Very accurate and in-time services. Their home pickup was excellent, and auto shippers took care
                        of the vehicle very well. If I had known they were so good, I would have also asked them for car
                        shipping.</p>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="t-s">
                    <img class="testo-img" src="https://cdn.pixabay.com/photo/2018/02/16/14/38/portrait-3157821_640.jpg" alt="how to ship your car to another state">
                    <h2>Mark Hill</h2>
                    <p>Their auto shipping services are accurate whether it is home pickup or taking care of my
                        vehicles. I was happy with all their services and their shipping and transport services were
                        better than anyone else.</p>
                </div>
            </div>

        </div>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
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
                    }, 2000)
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
             document.getElementById('ship_vehicle').addEventListener('click',()=>{
                document.getElementById('car-option').style.display='grid'
            })

        var sel = document.querySelectorAll('#cars')
        for (i = 0; i < sel.length; i++) {
            sel[i].addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('ship_vehicle').value = ""+ this.children[1].innerText +""
                document.getElementById('car-option').style.display='none'
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
