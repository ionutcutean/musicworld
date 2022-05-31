<!DOCTYPE html>
<html lang="en">
<?php 
include 'header.php';
include 'footer.php';
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./styles/styles.css" />
    <link rel="stylesheet" href="./styles/top.css" />
    <link rel="stylesheet" href="./styles/middle.css" />
    <link rel="stylesheet" href="./styles/bottom.css" />
    <link rel="stylesheet" href="./about.css" />
    <script src="./scripts/main.js"></script>
    <title>Music World</title>
    <script src="scripts/main.js"></script>
</head>

<body>
    <?php echo $header?>

    <div class="middle">
        <section class="about__section">
            <div class="about">
                <h1>About</h1>
                <div class="about__container">
                    <div class="about__card">
                        <h2>Cine suntem noi?</h2>
                        <p>Noi suntem echipa Music World ,funcționam din anul 2018 și suntem unul dintre cele mai
                            interesante magazine în domeniul nostru de activitate.În anul 2020 am fost în topul celor
                            mai de succes magazine care furnizeaza produse de acest tip.
                        </p>
                    </div>
                    <div class="about__card">
                        <h2>Cu ce ne ocupam noi?</h2>
                        <p>Site-ul nostru este un magazin de comerț electronic care furnizeaza clientilor echipamente și
                            instrumente muzicale de cea mai bună calita</p>
                    </div>
                    <div class="about__card">
                        <h2>Contact</h2>
                        <p> Telefon: 0784720746
                            Email:music@email.com
                        </p>
                    </div>
                    <div class="about__card">
                        <h2>Promovare</h2>
                        <p>Majoritatea clienților care au cumpărat un produs au revenit în magazinul nostru și a doua
                            oară.
                            Va sfătuim să cumparați de la noi deoarece oferim produse de calitate la prețuri
                            avantajoase!</p>
                    </div>
                    <div class="about__card">
                        <h2>Gama de produse!!!</h2>
                        <ul>
                            <li>Instumrnte de suflat</li>
                            <li>Instumrnte cu corzi</li>
                            <li>Instumrnte de percuție</li>

                        </ul>
                    </div>
                    <div class="about__card">
                        <h2>Dezvoltare</h2>
                        <p>Dorim sa aducem câte un instrument de bună calitate în coșul fiecarui client</p>
                    </div>
                </div>
        </section>
    </div>
    <?php echo $footer?>
</body>

</html>