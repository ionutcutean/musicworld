<!DOCTYPE html>
<html lang="en">
<?php 
include 'header.php';
include 'footer.php';
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/styles.css" />
    <link rel="stylesheet" href="./styles/top.css" />
    <link rel="stylesheet" href="./styles/middle.css" />
    <link rel="stylesheet" href="./styles/bottom.css" />
    <script src="./scripts/main.js"></script>
    <title>Music World</title>
</head>

<body style="height: 100%;">
<?php echo $header?>
    <div class="middle">
        <div class="wrapper">
            <div class="category">
                <h1 class="category__title">Instrumente de suflat</h1>
                <div class="category__instruments">
                    <div class="category__instrument">
                        <img src="assets/img/saxofon.jpg" alt="instrument" />
                        <h2 class="category__instrument__title">Saxofon Selmer</h2>
                    </div>
                    <div class="category__instrument">
                        <img src="assets/img/saxofon.jpg" alt="instrument" />
                        <h2 class="category__instrument__title">Saxofon Yamaha</h2>
                    </div>
                    <div class="category__instrument">
                        <img src="assets/img/saxofon.jpg" alt="instrument" />
                        <h2 class="category__instrument__title">Saxofon Startone</h2>
                    </div>
                </div>
            </div>
            <div class="category">
                <h1 class="category__title">Instrumente de suflat</h1>
                <div class="category__instruments">
                    <div class="category__instrument">
                        <img src="assets/img/clarinet.jpg" alt="instrument" />
                        <h2 class="category__instrument__title">Clarinet Selmer </h2>
                    </div>
                    <div class="category__instrument">
                        <img src="assets/img/clarinet.jpg" alt="instrument" />
                        <h2 class="category__instrument__title">Clarinet Yamaha</h2>
                    </div>
                    <div class="category__instrument">
                        <img src="assets/img/clarinet.jpg" alt="instrument" />
                        <h2 class="category__instrument__title">Clarinet Buffer</h2>
                    </div>
                </div>
            </div>
            <div class="category">
                <h1 class="category__title">Instrumente de suflat</h1>
                <div class="category__instruments">
                    <div class="category__instrument">
                        <img src="assets/img/flaut.webp" alt="instrument" />
                        <h2 class="category__instrument__title">Flaut A</h2>
                    </div>
                    <div class="category__instrument">
                        <img src="assets/img/flaut.webp" alt="instrument" />
                        <h2 class="category__instrument__title">Flaut B</h2>
                    </div>
                    <div class="category__instrument">
                        <img src="assets/img/flaut.webp" alt="instrument" />
                        <h2 class="category__instrument__title">Flaut C</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $footer?>
</body>

</html>