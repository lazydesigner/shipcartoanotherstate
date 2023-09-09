<?php include './routes.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }

        .form-div {
            width: 30%;
            margin: auto;
            padding: 1.5%;
            box-sizing: content-box;
            border-radius: 15px;
            background-color: #ffffff;
            position: relative;
            z-index: 1;
            /* backdrop-filter: blur(22px); */
            /* -webkit-backdrop-filter: blur(22px); */

        }

        .part1 {
            display: block;
        }

        .part2 {
            display: none;
        }

        .form-div label {
            color: rgb(27, 27, 27);
            font-size: large;
            margin-left: 5px;
        }

        .form-div h1 {
            font-size: 2rem;
            text-align: center;
            font-weight: 800;
            color: rgb(28, 28, 28);
        }

        .form-group {
            margin: 15px 0;
            position: relative;
        }

        .form-div input {
            width: 100%;
            height: 40px;
            border: 1px solid rgb(68, 68, 68);
            border-radius: 5px;
            padding: 1%;
            background-color: #ffffff10;
            outline: 0;
            color: rgb(18, 17, 17);
        }

        .form-div input[type=submit] {
            width: 150px;
            margin: 10px 0;
            cursor: pointer;
            margin: auto;
            text-align: center;
            color: rgb(21, 21, 21);
            font-weight: bolder;
        }

        ::placeholder {
            color: rgb(16, 16, 16);
        }

        .container {
            background-image: url('https://cdn.pixabay.com/photo/2017/08/17/05/59/peterbilt-2650184_1280.jpg');
            background-position: center;
            background-size: 100%;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            display: grid;
            place-items: center;
            position: relative;
        }

        .container-bg {
            width: 100%;
            height: 100%;
            background-color: rgba(18, 18, 18, 0.886);
            position: absolute;
            top: 0;
            left: 0;
        }

        .car-option {
            position: absolute;
            background-color: whitesmoke;
            padding: 5%;
            display: none;
            grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
            /* 3 columns with minimum width of 250px */
            grid-gap: 20px;
            /* Adjust the gap between grid items as needed */
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 150px;
            overflow: auto;
            z-index: 1;
            border-radius: 5px;
            user-select: none;
        }

        .cars {
            cursor: pointer;
            user-select: none;
        }

        .cars p {
            padding: 0;
            margin: 0;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #555555;
        }

        .formobile {
            display: none;
        }

        .fordesktop {
            display: flex;
        }

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

        @media screen and (max-width:770px) {
            .form-div {
            width: 60%;
            }
        }
        @media screen and (max-width:550px) {
            .form-div {
                width: 95%;
            }
        }
    </style>
</head>

<body>


    <div class="error" id="error">
        <p id="error-text">Directions request returned no results</p>
    </div>
    <div class="container">
        <div class="container-bg"></div>
        <div class="form-div">
            <h1><strong>Get A Free Quote</strong></h1>
            <form action="<?=get_home_url()  ?>save-to-form.php" method="post" id="next-step">
 
                <div class="part1" id="part1">
                    <div class="form-group">
                        <input type="text" placeholder="Address or City" value="<?= $_GET['from'] ?>" name="ship_from" id="ship_from" hidden>

                        <input type="text" placeholder="Address or City" value="<?= $_GET['to'] ?>" name="ship_to" id="ship_to" hidden>
                        <input type="text" id="url" value="<?= $_SERVER['REQUEST_URI'] ?>" name="url" placeholder="Address or City" hidden>
                        <div id="ip"></div>

                        <input type="text" placeholder="distance" value="<?= $_GET['path_distance'] ?>" name="path_distance" id="path_distance" hidden>
                    </div>
                    <div class="form-group">
                        <label for="">Date OF Pickup</label><br>
                        <input type="date" placeholder="Pickup Date" id="ship_date" name='pick_up_date'>
                    </div>
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
                    <div class="form-group">
                        <label for="">Email</label><br>
                        <input type="email" name="user_email" placeholder="Enter Your Email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label><br>
                        <input type="text" name="phone_number" placeholder="Enter Your Phone" id="phone" min="10" onkeyup="formatPhoneNumber(this)" max="10">
                    </div>
                    <div class="form-group" style="text-align: center;margin:10px auto;">
                        <input type="submit" name="submit" value="submit">
                    </div>
                </div>

            </form>
        </div>
    </div>




    <script>
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

        document.getElementById('next-step').addEventListener('submit', function(e) {

            // let from = document.getElementById('origin-input').value
            // let to = document.getElementById('destination-input').value
            let date = document.getElementById('ship_date').value
            let vehicle = document.getElementById('ship_vehicle').value
            let email = document.getElementById('email').value
            let mobile = document.getElementById('phone').value
            if (date == '' || date == null || vehicle == '' || vehicle == null || email == '' || email == null || mobile == '' || mobile == null) {
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
    </script>
</body>

</html>