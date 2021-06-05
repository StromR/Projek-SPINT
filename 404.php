<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found :)</title>

    <link rel="stylesheet" href="css/404.css">


    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Link Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="assets/logo.svg">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="xs-12 md-6 mx-auto">
                <div id="countUp">
                    <div class="number" data-count="404">0</div>
                    <div class="text">Hello visitor</div>
                    <div class="text">Why did you come here?</div>
                    <div class="text">GO BACK!!!</div> <br>
                    <a onclick="goBack()" type="button" class="btn btn-outline-danger">BACK</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Keur Nomor -->
    <script>
    const counter = document.querySelectorAll('.number');
    const speed = 3000;

    counter.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;

            const inc = target / speed;

            console.log(count);

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 1)
            } else {
                count.innerText = target
            }
        }
        updateCount();
    });

    function goBack() {
        window.history.back();
    }
    </script>

</body>

</html>