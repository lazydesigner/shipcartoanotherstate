<?php include './routes.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css" integrity="sha512-/VYneElp5u4puMaIp/4ibGxlTd2MV3kuUIroR3NSQjS2h9XKQNebRQiyyoQKeiGE9mRdjSCIZf9pb7AVJ8DhCg==" crossorigin="anonymous" referrerpolicy="no-referrer" as="style" onload="this.onload=null;this.rel='stylesheet'" async />

    <link rel="stylesheet" href="<?= get_home_url()  ?>assets/css/index.css?v=2" async>
    <title>Query Form</title>

    <style>
        textarea {
            resize: none;
            width: 503px;
            height: auto;
            margin-top: 10px;
            border: 1px solid rgb(193, 193, 193);
            border-radius: 5px;
            outline: 0;

        }

        input {
            width: 250px;
            height: 40px;
            border: 1px solid rgb(188, 188, 188);
            border-radius: 5px;
            outline: 0;
            padding: 1%;
        }

        .send {
            width: 150px;
            height: 50px;
            border: 0;
            background-color: rgba(11, 11, 138, 0.949);
            color: whitesmoke;
            cursor: pointer;
        }

        ::placeholder {
            color: black;
        }
        .query-form2{
            width: 100%;
            height: 100%;
            display: grid;
            place-items: center;
        }
    </style>
</head>

<body>
    <?php include './navbar.php' ?>

    <div>
        <div class="query-form2">
            <div class="contact-div">
                <form action="">
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Enter Your Email">
                        <input type="text" name="phone" id="phone" min="10" onkeyup="formatPhoneNumber(this)" max="10" placeholder="Enter Your Number">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Enter Your Query"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="send">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include './footer.php' ?>
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
    </script>
</body>

</html>