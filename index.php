<?php include './routes.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preload"
        src="https://www.blg-logistics.com/fileadmin/_processed_/b/c/csm_BLG-Autotransport-7_d8a2558bd9.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=get_home_url()  ?>assets/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Paytone+One&family=Roboto+Slab&family=Seymour+One&family=Sonsie+One&family=Yanone+Kaffeesatz:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css"
        integrity="sha512-/VYneElp5u4puMaIp/4ibGxlTd2MV3kuUIroR3NSQjS2h9XKQNebRQiyyoQKeiGE9mRdjSCIZf9pb7AVJ8DhCg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Design One</title>
</head>

<body>
   <?php include 'navbar.php' ?>
    <section class="herosection">
        <div class="herosection_">
            <div class="herosection_bg">
            </div>
            <img src="https://cdn.pixabay.com/photo/2017/11/13/21/13/trucker-2946821_1280.jpg" width="100%"
                height="100%" class="backgroundimg" alt="">
            <div class="row">
                <div class="herosection_content">
                    <h1>Best Auto Shipping Company In Usa</h1>
                    <p class="hero-p">We provide our customers an array of solutions for our clientele, such as cross-state cargo transport, quick consignment dispatch, domestic relocations, automobile conveyance, real-time package monitoring, and a plethora of additional offerings.</p>
                    <div class="rating">
                        <img src="./assets/images/b.svg" class="review-img" width="150px" alt="">
                        <p><b>ShipCartoAnotherState</b> rating<br> Based on 13956 customer review</p>
                    </div>
                </div>
                <div class="form-div">
                    <h1><strong>Get A Free Quote</strong></h1>
                    <form action="">

                        <div class="part1" id="part1">
                            <div class="form-group">
                                <label for="">From</label><br>
                                <input type="text" placeholder="Address or City" id="ship_from">
                            </div>
                            <div class="form-group">
                                <label for="">To</label><br>
                                <input type="text" placeholder="Address or City" id="ship_to">
                            </div>
                            <div class="form-group">
                                <label for="">Date OF Pickup</label><br>
                                <input type="date" placeholder="Pickup Date" id="ship_date">
                            </div>
                            <div class="form-group">
                                <label for="">Vehicle Size</label><br>
                                <input type="text" placeholder="Select an option" id="ship_vehicle">
                            </div>
                            <div class="form-group" style="text-align: center;margin:10px auto;">
                                <input type="submit" value="Get A Quote" id="quote">
                            </div>
                        </div>
                        <div class="part2" id="part2">
                            <div class="form-group">
                                <label for="">Email</label><br>
                                <input type="email" placeholder="Enter Your Email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label><br>
                                <input type="text" placeholder="Enter Your Phone" id="phone" min="10" onkeyup="formatPhoneNumber(this)" max="10" required>
                            </div>
                            <div class="form-group" style="text-align: center;margin:10px auto;">
                                <input type="submit" value="Previous" id="previous">
                                <input type="submit" value="submit" id="next-step">
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
                <img src="https://rapidautoshipping.com/assets/images/auto-transport-open.jpg" alt="">
                <span class="item2 items1">OPEN TRANSPORT SHIPPING</span>
            </div>
            <div class="item">
                <img src="https://res.cloudinary.com/dsmsqwx6q/image/upload/v1667634733/cash-macanaya-9cSMMMSmZzY-unsplash-1024x1024_hbosfx.jpg"
                    alt="">
                <span class="item3 items1">ENCLOSED AUTO TRANSPORT</span>
            </div>
            <div class="item">
                <img src="https://rapidautoshipping.com/assets/images/loading-equipment-in-container-1.png" alt="">
                <span class="item4 items1">HEAVY EQUIPMENT SHIPPING</span>
            </div>
            <div class="item">
                <img src="https://rapidautoshipping.com/assets/images/door-to-door-bg.jfif" alt="">
                <span class="item5 items1">DOOR TO DOOR</span>
            </div>
            <div class="item ">
                <img src="https://res.cloudinary.com/dsmsqwx6q/image/upload/v1665832014/received_594529625738657_y8wkkh.jpg"
                    alt="">
                <span class="item1 items1 ">
                    SNOWBIRD SHIPPING
                </span>
            </div>
            <div class="item">
                <img src="https://res.cloudinary.com/dsmsqwx6q/image/upload/v1667637211/Recent%20Uploads/pexels-photo-4558369_clqufj.jpg"
                    alt="">
                <span class="item6 items1">BOAT SHIPPING</span>
            </div>
        </div>
        <div class="more-service">
            <a href=""><button>More Services</button></a>
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
                    <p>We Offers exceptional shipping services, ensuring timely, secure, and cost-effective delivery of goods across state lines. Their professionalism sets them apart</p>
                </div>
                <div class="box">
                    <i class="ri-shield-check-fill"></i>
                    <p><b>SAFE AND SECURE </b></p>
                    <p>We prioritizes safety and security, employing advanced measures to protect your shipments, and providing peace of mind for all your delivery needs.</p>
                </div>
                <div class="box">
                    <i class="ri-pin-distance-line"></i>
                    <p><b>EXPRESS SHIPPING</b></p>
                    <p>We excels in express shipping, guaranteeing swift and reliable deliveries, making them the top choice for urgent transportation needs.</p>
                </div>
                <div class="box">
                    <i class="ri-money-dollar-circle-line"></i>
                    <p><b>PRICE MATCH</b></p>
                    <p>We offers competitive price matching, ensuring you get the best value for your shipping services without compromising on quality.</p>
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
    <section class="blog-section">
        <p class="blog-section-para">SOME OF OUR NEWS FROM LATEST BLOG</p>
        <h2 class="blog-section-heading"> Get the latest news, advice & best practice from blog</h2>
        <div class="blog-body row">
            <div class="blog-item">
                <img src="https://rapidautoshipping.com/assets/images/door-to-door-bg.jfif" width="100%" height="100%"
                    alt="">
                <div class="blog-detail">
                    <div class="blog-admin-detail">
                        <div class="blog-date"><i class="ri-calendar-2-line"></i>September 5 2023</div>
                        <div class="blog-admin"><i class="ri-user-star-line"></i>Admin</div>
                    </div>
                    <p>Enclosed Auto Transport Chicago(RAS)</p>
                    <a href=""><button>Read More</button></a>
                </div>
            </div>
            <div class="blog-item">
                <img src="https://rapidautoshipping.com/assets/images/hauling-truck-bg-2.jpg" width="100%" height="100%"
                    alt="">
                <div class="blog-detail">
                    <div class="blog-admin-detail">
                        <div class="blog-date"><i class="ri-calendar-2-line"></i>September 10 2023</div>
                        <div class="blog-admin"><i class="ri-user-star-line"></i>Admin</div>
                    </div>
                    <p>Best Auto Shipping Company USA</p>
                    <a href=""><button>Read More</button></a>
                </div>
            </div>
            <div class="blog-item">
                <img src="https://rapidautoshipping.com/assets/images/auto-transport-open.jpg" width="100%"
                    height="100%" alt="">
                <div class="blog-detail">
                    <div class="blog-admin-detail">
                        <div class="blog-date"><i class="ri-calendar-2-line"></i>September 15 2023</div>
                        <div class="blog-admin"><i class="ri-user-star-line"></i>Admin</div>
                    </div>
                    <p>Some important tips for international shipping</p>
                    <a href=""><button>Read More</button></a>
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
                    <img class="testo-img" src="https://cdn.pixabay.com/photo/2016/11/29/06/46/adult-1867889_640.jpg">
                    <h2>Mark de cole</h2>
                    <p>They did a great job delivering my two-wheeler in their trailer. Auto Shippers did a great job of
                        delivering it. This is my third time with them, and I am always happy with their services.</p>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="t-s">
                    <img class="testo-img" src="https://cdn.pixabay.com/photo/2017/02/16/23/10/smile-2072907_640.jpg">
                    <h2>Steven Faith</h2>
                    <p>I asked them for car shipping in a trailer to Vegas. I have been using their services for many
                        years and I am never disappointed. The vehicles arrived quickly and safely.</p>

                </div>
            </div>

            <div class="mySlides fade">
                <div class="t-s">
                    <img class="testo-img" src="https://cdn.pixabay.com/photo/2016/11/18/19/07/happy-1836445_640.jpg">
                    <h2>Estep Meade</h2>
                    <p>Very accurate and in-time services. Their home pickup was excellent, and auto shippers took care
                        of the vehicle very well. If I had known they were so good, I would have also asked them for car
                        shipping.</p>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="t-s">
                    <img class="testo-img"
                        src="https://cdn.pixabay.com/photo/2018/02/16/14/38/portrait-3157821_640.jpg">
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

    <script>
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
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active"; 
            setTimeout(showSlides, 5000); // Change image every 2 seconds
        }

        a = document.querySelectorAll('#plus_')
        for (i = 0; i < a.length; i++) {
            a[i].addEventListener("click", function (e) {
                e.preventDefault();
                this.parentElement.children[0].children[0].classList.toggle('rotate_');
                this.parentElement.children[1].classList.toggle("plus_");
            })
        }

        document.getElementById('quote').addEventListener('click',function(e){
            e.preventDefault();
            document.getElementById('part1').style.display = 'none';
            document.getElementById('part2').style.display = 'block';

        })
        document.getElementById('previous').addEventListener('click',function(e){
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