<?php include '../../routes.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=get_home_url() ?>assets/css/commonservice.css" async>
    <link rel="preload" fetchpriority="high" as="image" href="<?= get_home_url()  ?>assets/images/New-York-To-Nevada.webp" type="image/webp">
    <link rel="icon" href="https://shipcartoanotherstate.com/assets/images/Modern.png" type="image/png">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css" integrity="sha512-/VYneElp5u4puMaIp/4ibGxlTd2MV3kuUIroR3NSQjS2h9XKQNebRQiyyoQKeiGE9mRdjSCIZf9pb7AVJ8DhCg==" crossorigin="anonymous" referrerpolicy="no-referrer"   as="style" onload="this.onload=null;this.rel='stylesheet'" async/>
    <title>Document</title>
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
        .form-section{position: relative;align-items: center;}
        .guranteed{
            width: 150px;
            display: block;
        }

        /*  */
    </style>
</head>

<body>
    <div class="error" id="error">
        <p id="error-text">Directions request returned no results</p>
    </div>
    <?php include '../../navbar.php' ?>
    <section class="service-banner">
        <div class="service-banner-bg"></div>
        <div class="service-banner-heading">
            <div>
                <h1>Open Transport Car Shipping</h1>
                <p>Open Transport Car Shipping is the most popular and cost-effective of our services.Your vehicle will be transported from one location to another using an open-trailer car carrier. These carriers are commonly seen on highways and are used to deliver vehicles to dealerships nationwide.</p>
            </div>
        </div>
    </section>
    <section class="form-section">
    <div class="guranteed"><img src="<?=get_home_url()  ?>assets/images/qualıty-guarantee.svg" width="100%" height="100%" alt=""></div>
        <form action="form-submit" id="form-submit">
        <div class="form-group" id="distance"></div>
            <div class="form-group">
                <!--<b>FROM:</b>--> <input type="text" placeholder="State or City" name="from" id="origin-input">
            </div>
            <div class="form-group">
                <!--<b>TO:</b>--> <input type="text" placeholder="State or City" name="to" id="destination-input">
            </div>
            
            <div class="form-group form-group-b">
                <input type="submit" id="send" value="Get Quote">
            </div>
        </form>
    </section>

    <section class="service-content-section">

        <div class="content-section">
            <div class="content-box-1">
                <h2 class="content-section-heading">Open Transport Vehicle Transport Services</h2>
                <p class="content-section-paragraph">
                    There are a variety of options available for transporting your vehicle across the nation. Open Transport Car Shipping is a popular option, as it offers a number of advantages over other shipping methods.

                    This article examines open auto transport car cargo, its benefits, and how it differs from other shipping methods.
                </p>
            </div>
            <div class="content-box-1">
                <h2 class="content-section-heading">What Does Open Transport Car Shipping Mean?</h2>
                <p class="content-section-paragraph">Open Transport Car Shipping is the most common and cost-effective method. For automobile owners, dealerships, and manufacturers, this method uses an open trailer to move multiple autos. This car shipment has pros and cons. </p>
                <p class="content-section-paragraph">If you need to ship cars hundreds or thousands of miles across the country, open transit is best. Your car is carried on an open trailer with numerous others, making it cheaper than alternative options. It also has more pick-up and delivery times to fit your schedule. </p>
                <p class="content-section-paragraph">Many consumers, dealers, and manufacturers prefer open-transport car shipments. It's ideal for average auto owners who want to ship their cars large distances, relocate, or send auction cars. It works well for dealerships and car manufacturers transporting several vehicles.</p>
                <p class="content-section-paragraph">Depending on distance, weather, and other variables, Open Carrier Car Shipping can cost hundreds to thousands. Brokers can provide bids and help transport cars. These organizations have skilled people to safely handle the process and transport your vehicle.</p>

            </div>
            <div class="addvertisement">
                <p>We are committed to delivering a safe, equitable, and reliable transportation system.</p>
                <a href="<?=get_home_url()  ?>get-quotes"><button>GET QUOTES</button></a>
            </div>
            <div class="content-box-1">
                <h2 class="content-section-heading">Types of Open Transport Car Shipping</h2>
                <p class="content-section-paragraph">There may be some differences between open-air and closed-air conveyance.</p>
                <ul class="content-section-ul">
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">A single car</h3>
                        <p class="content-section-paragraph">When fully extended, the term "single-car open-air transport" refers to a trailer with capacity for only one vehicle. Throughout the transfer, your vehicle will be secured and left in its designated location on the trailer.</p>
                        <p class="content-section-paragraph">This mode of transportation eliminates the need to wait for the delivery of other automobiles or concerns about different vehicles, so there will be no need to wait</p>
                        <p class="content-section-paragraph">Despite this, it is still quite expensive, as you must pay for the entire journey rather than splitting the cost with other passengers. This prohibits cost-sharing with other consumers.</p>
                    </li>
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">Only one tier</h3>
                        <p class="content-section-paragraph">Your vehicle will travel alongside a limited number of other vehicles, as single-level Open Carrier Car Shipping can accommodate many automobiles.</p>
                        <p class="content-section-paragraph">You are not required to interact with other consumers; it is still a rapid method. It is more affordable and accessible compared to single-car open-air transportation.</p>
                    </li>
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">Multi-Level</h3>
                        <p class="content-section-paragraph">Multiple-level open carriers are frequently used for vehicle transportation because they can convey the majority of automobiles in a single trip.</p>
                        <p class="content-section-paragraph">They have the most affordable rates and are simple to schedule, but they transport many vehicles on each voyage, which may cause a delay.</p>
                    </li>
                </ul>
            </div>
            <div class="content-box-img">
                <img src="https://dashboard.rapidautoshipping.com/assets/images/img_gallery/1036363089.webp" alt="content-box-img" width="100%" height="100%">
            </div>
            <div class="content-box-1">
                <h2 class="content-section-heading">Advantages of Open Carrier Car Shipping</h2>
                <p class="content-section-paragraph">You have two primary options when transporting a vehicle: open transport and enclosed transport. While enclosed transport provides greater protection for your vehicle, open transport continues to be the most popular option for a number of reasons.</p>
                <ul class="content-section-ul">
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">The Accessibility</h3>
                        <p class="content-section-paragraph">An important advantage of Open Transport Car Shipping is its affordability. Because open transport carriers can transport more vehicles simultaneously than enclosed transport carriers, the cost per vehicle is substantially lower.</p>
                        <p class="content-section-paragraph">This makes Open Carrier Car Shipping a more appealing option for customers who must send their vehicles on a budget.</p>
                    </li>
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">Availability</h3>
                        <p class="content-section-paragraph">Another benefit of Open Transport Car Shipping is its accessibility. Because open transport carriers are more prevalent than enclosed transport carriers, it is more likely that an open transport carrier will be available when required.</p>
                        <p class="content-section-paragraph">This is especially useful if you must transport your vehicle on short notice or during a busy time of year, such as the holidays or moving season.</p>
                    </li>
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">Versatility</h3>
                        <p class="content-section-paragraph">In addition, Open Carrier Car Shipping provides more flexibility compared to enclosed transport. If you need to transport a large vehicle that cannot fit in an enclosed trailer, Open Carrier Car Shipping may be the only available option.</p>
                        <p class="content-section-paragraph">You may conveniently transport all of your vehicles at once thanks to the capacity of open transport carriers to carry several vehicles of various makes and models.</p>
                    </li>
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">Enhanced Visibility</h3>
                        <p class="content-section-paragraph">Lastly, Open Carrier Car Shipping provides enhanced visibility, which can benefit you and the transport company. Inspecting vehicles during transport is simpler for shippers when using open auto transport trailers because these trailers are exposed to the elements.</p>
                        <p class="content-section-paragraph">And because your vehicle is visible to everyone passing by, it is less likely to be stolen or vanish.</p>
                    </li>
                </ul>
            </div>
            <div class="content-box-1">
                <h2 class="content-section-heading">What's the Difference Between Enclosed and Open Auto Shipping?</h2>
                <p class="content-section-paragraph">Enclosed and open auto transport is different. Open carrier transport moves your automobile on an open trailer. Your vehicle is exposed, but it's cheaper.</p>
                <p class="content-section-paragraph">Our consumers love it since it's fast, secure, and easy. Your vehicle is safeguarded on all sides with enclosed auto transport.</p>
                <p class="content-section-paragraph">These factors should be considered while choosing enclosed and open auto transport. Open-air automobile transport works for most vehicles and their owners. Open carrier transport is cheaper, and road damage is minimal.</p>
            </div>

            <div class="content-box-1">
                <h2 class="content-section-heading">When is Open-air Transportation Advised?</h2>
                <p class="content-section-paragraph">There are many options for car cargo, but if your vehicle is standard and you're looking to save money, we recommend open carrier transport. Automobile dealerships select it for this reason and because it is a safe, dependable, and quick option.</p>
                <p class="content-section-paragraph">Open and enclosed car transport are both viable options. Still, each is required in particular situations, and we've found that open carrier car transport can accommodate the overwhelming majority of car transports.</p>
            </div>

            <div class="content-box-img">
                <img src="https://dashboard.rapidautoshipping.com/assets/images/img_gallery/1036363089.webp" alt="content-box-img" width="100%" height="100%">
            </div>
            <div class="content-box-1">
                <h2 class="content-section-heading">How Much Does Open Carrier Transport Cost?</h2>
                <p class="content-section-paragraph">When selecting the proper shipping method, cost is always a consideration. However, our transport services do not have a set price; rather, an estimate is created for each unique circumstance, with numerous factors influencing the final quotation. The dimensions and mass. </p>
                <p class="content-section-paragraph">There is a limit to the number of vehicles that carriers can transport and a load limit. Shipping will be more costly the heavier the cargo.</p>
                <ul class="content-section-ul">
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">Season of the year</h3>
                        <p class="content-section-paragraph">Summer is the busiest season for this service, so prices are typically higher between Memorial Day and Labor Day.</p>
                    </li>
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">Distance</h3>
                        <p class="content-section-paragraph">Costs for labor, tolls, and fuel also affect the final estimate. The greater the distance your machine must travel, the higher the cost.</p>
                    </li>
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">Manufacturer and model</h3>
                        <p class="content-section-paragraph">Vehicles that require more protection are more expensive.</p>
                    </li>
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">The extent</h3>
                        <p class="content-section-paragraph">In addition to the manufacturer and model, the length of the machine can impact the price. Smaller vehicles allow for more space in the truck, allowing carriers to transport more items.</p>
                    </li>
                </ul>
            </div>
            <div class="addvertisement">
                <p>When people want transportation, they want it now.</p>
                <a href="<?=get_home_url()  ?>get-quotes"><button>GET QUOTES</button></a>
            </div>
            <div class="content-box-1">
                <h2 class="content-section-heading">How to Determine When a Vehicle Is Ready?</h2>
                <p class="content-section-paragraph">Before our chauffeurs arrive to collect your vehicle, we recommend that you prepare it for the move. Here is what you must do before shipping the vehicle:</p>
                <ul class="content-section-ul">
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">Rinse it</h3>
                        <p class="content-section-paragraph">During this process, you can examine for existing damage. This is crucial, particularly when using an open auto transport truck.</p>
                    </li>
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">Deactivate all alarm systems</h3>
                        <p class="content-section-paragraph">Deactivate all alarms in the vehicle.</p>
                    </li>
                    <li class="content-section-li">
                        <h3 class="content-section-heading-h3">Examine for air leakage and pressure</h3>
                        <p class="content-section-paragraph">Not having your tires properly inflated may increase the likelihood of tire damage</p>
                    </li>
                </ul>
            </div>
            <div class="content-box-1">
                <h2 class="content-section-heading">How Does Rapid Auto Shipping Work?</h2>
                <p class="content-section-paragraph">Three straightforward procedures are required to ship a vehicle: You must first obtain a quote from an auto transport company and schedule your shipment.</p>
                <p class="content-section-paragraph">Second, your vehicle will be collected from the location of your choosing. Your vehicle will be transported to you and delivered.</p>

            </div>
            <div class="content-box-1">
                <h2 class="content-section-heading">Schedule a vehicle transport through Rapid Auto Shipping</h2>
                <p class="content-section-paragraph">The finest open transport service for you should make shipment scheduling easy. That's our specialty.</p>

            </div>
            <div class="content-box-1">
                <h2 class="content-section-heading">Your vehicle is collected, and the vehicle transport journey commences</h2>
                <p class="content-section-paragraph">Our knowledgeable Rapid auto shipping coordinators are standing by to reserve your place with one of our seasoned and trustworthy vehicle transporters.</p>
            </div>
            <div class="content-box-1">
                <h2 class="content-section-heading">Our open auto shipping service transports your vehicle to its final destination.</h2>
                <p class="content-section-paragraph">We are a custom-made vehicle transportation company. You can contact your auto transporter at any time for information about your vehicle's shipment.</p>
            </div>


        </div>

    </section>


    <!-- EXTRA -->
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
    <section class="call-to-action">
        <div class="row" style="align-items: center;">
            <div class="call-to-action-first-div"><h2>Ready to Ship Your Car with Best Auto Transporter in the Vehicle Transportation Industry ?</h2></div>
            <div style="display: flex;gap:1%;" class="call-to-btn-wrap"><a href="get-quotes" style="margin-right: 5px;"><button>Get Free Instant Quote</button></a>
            <a href="tel:+1 (833) 233-4447"><button>+1 (833) 233-4447</button></a></div>
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
    <?php include '../../footer.php' ?>
    <div class="sitebutton sitebutton-call" id="sitebutton">
        <a href="tel:+1 (833) 233-4447" ><button style="font-size: 1.2rem;"><i class="ri-phone-fill"></i> +1 (833) 233-4447</button></a>
    </div>
    <div class="sitebutton" id="sitebutton">
        <a href="<?= get_home_url()  ?>get-quotes"><button>GET FREE QUOTES</button></a>
    </div> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS2z-zMeHNf4laZiAbzjDBowLLm_wnjwo&v=3.exp&callback=Function.prototype&libraries=places"></script>
    <script>
        document.getElementById('form-submit').addEventListener('submit', function(e) {
            let from = document.getElementById('origin-input').value
            let to = document.getElementById('destination-input').value
            let isEmpty = document.getElementById('distance_').value;
            if (from == '' || from == null || to == '' || to == null) {
                e.preventDefault()
                document.getElementById('error').style.display = 'grid'
                document.getElementById('error-text').innerText = "Fields Can't Be Empty ";
                setTimeout(() => {
                    document.getElementById('error').style.display = 'none'
                }, 2000)
            } else if (isEmpty == '' || isEmpty == null) {
                e.preventDefault()
                document.getElementById('error').style.display = 'grid'
                document.getElementById('error-text').innerText = "Directions request returned no results";
                setTimeout(() => {
                    document.getElementById('error').style.display = 'none'
                }, 3000)
            }
        })
    </script>
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
<!-- When people want transportation, they want it now. -->

<!-- We are committed to delivering a safe, equitable, and reliable transportation system. -->
