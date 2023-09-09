<?php include './routes.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=get_home_url()  ?>assets/css/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css" integrity="sha512-/VYneElp5u4puMaIp/4ibGxlTd2MV3kuUIroR3NSQjS2h9XKQNebRQiyyoQKeiGE9mRdjSCIZf9pb7AVJ8DhCg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        /*  */
    </style>
</head>

<body> 


    <?php include './navbar.php' ?>
    <div class="error" id="error">
        <p id="error-text">Directions request returned no results</p>
    </div>
    <div class="container">
        <div class="container-bg"></div>
        <div class="review-section">


            <div class="review-box">
                <div class="review-img">
                    <img src="https://cdn.pixabay.com/photo/2016/11/29/06/46/adult-1867889_640.jpg" width="100%" height="100%" alt="">
                </div>
                <div class="review-name"><b>Estep Meade</b></div>
                <div class="review-title"class="review-title" style="text-align: justify;"><i class="ri-double-quotes-l" style="font-size: 2rem;" ></i>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quas harum officia consequatur vero nihil provident tempora quos excepturi veniam.
                </div>
                <div class="review-star">
                    <span><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></span>
                    <span>september 4 2023</span>
                </div>
            </div>

        </div>
        <div class="form-div">
            <div class="guranteed"><img src="./assets/images/qualıty-guarantee.svg" width="100%" height="100%" alt=""></div>
            <h1><strong>Get A Free Quote</strong></h1>
            <form action="<?=get_home_url()  ?>save-to-form" id="form-" method="post">

                <div class="part1" id="part1">
                    <div class="form-group">
                        <label for="">From</label><br>
                        <input type="text" id="origin-input" name="ship_from" placeholder="Address or City">
                        <input type="text" id="url" value="<?= $_SERVER['REQUEST_URI'] ?>" name="url" placeholder="Address or City" hidden>
                    </div>
                    <div class="form-group">
                        <label for="">To</label><br>
                        <input type="text" id="destination-input" name="ship_to" placeholder="Address or City">

                    </div>
                    <div class="form-group">
                        <label for="">Date OF Pickup</label><br>
                        <input type="date" name='pick_up_date'  min="<?php echo date('Y-m-d'); ?>" max="2030-12-31"  placeholder="Pickup Date" id="ship_date">

                    </div>
                    <div class="form-group">
                        <label for="">Vehicle Size</label><br>
                        <input type="text" readonly placeholder="Select an option" name="vehicle_size" id="ship_vehicle">
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
                    <div class="form-group" id="distance">

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
                        <input type="text" placeholder="Enter Your Phone" name="phone_number" id="phone" min="10" onkeyup="formatPhoneNumber(this)" max="10">
                    </div>
                    <div class="form-group" style="text-align: center;margin:10px auto;">
                        <input type="submit" value="Previous" id="previous">
                        <input type="submit" value="submit" name="submit" id="next-step">
                    </div>
                </div>

            </form>
        </div>
    </div>

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
                    <img class="testo-img" src="https://cdn.pixabay.com/photo/2018/02/16/14/38/portrait-3157821_640.jpg">
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

    <?php include './footer.php' ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS2z-zMeHNf4laZiAbzjDBowLLm_wnjwo&v=3.exp&callback=Function.prototype&libraries=places"></script>
    <script>
        // form validation
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
            }else if(isEmpty == '' || isEmpty == null){
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
        }
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
    <!-- Form validation -->
</body>

</html>