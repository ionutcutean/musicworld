<!DOCTYPE html>
<html lang="en">
<?php
    include 'header.php';
    include 'footer.php';
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/styles.css" />
    <link rel="stylesheet" href="./styles/top.css" />
    <link rel="stylesheet" href="./styles/middle.css" />
    <link rel="stylesheet" href="./styles/bottom.css" />
    <title>Music World</title>
    <script src="scripts/main.js"></script>
</head>

<body>
    <?php echo $header?>
    <div class="middle">
        <div class="hero">
            <div class="hero__slider">
                <div class="hero__slider-arrowleft" onclick="slide(-1)">&#9754;</div>
                <div class="hero__slider__slide">
                    <img src="assets/img/synths.webp" alt="imagine-slide" />
                </div>
                <div class="hero__slider__slide">
                    <img src="assets/img/piano.webp" alt="imagine-slide" />
                </div>
                <div class="hero__slider__slide">
                    <img src="assets/img/studio" alt="imagine-slide" />
                </div>
                <div class="hero__slider__slide">
                    <img src="assets/img/record.webp" alt="imagine-slide" />
                </div>
                <div class="hero__slider__slide">
                    <img src="assets/img/looper.webp" alt="imagine-slide" />
                </div>
                <div class="hero__slider-arrowright" onclick="slide(1)">&#9755;</div>
            </div>
        </div>
        <div class="hero__services">
            <div class="hero__services__service">
                <img src="assets/img/free-delivery.png" alt="service-icon">
                <p>Comenzile care depășesc suma de 100€ vor avea livrare gratuită</p>
            </div>
            <div class="hero__services__service">
                <img src="assets/img/support.png" alt="service-icon">
                <p>Serviciu de suport disponibil 24/7</p>
            </div>
            <div class="hero__services__service">
                <img src="assets/img/delivered.png" alt="service-icon">
                <p>Transportul poate fi urmărit prin aplicația noastră de tracking</p>
            </div>
        </div>
    </div>
    <?php echo $footer?>
</body>

</html>