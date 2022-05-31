<?php
include 'header.php';
include 'footer.php';
include 'helpers.php';
$AccountCreated = '';

$emailAlreadyExistError = '';
$emailEmpty = '';
$emailError = '';
$nameError = '';


if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $telefon = $_POST['phone'];

    $duplicate_email = mysqli_query($conexiune, "SELECT * from user where email='$uname'");

    if (empty($_POST["uname"])) {
        $emailEmpty = "Este necesar să completați o adresă de e-mail.";
    } else if (mysqli_num_rows($duplicate_email) > 0) {
        $emailAlreadyExistError = "Adresa de e-mail este asociată deja unui cont de utilizator.";
    } else if (!filter_var($uname, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Introduceți o adresă de e-mail validă.";
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
        $nameError = "Poți folosi doar litere sau spații în nume.";
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
        $nameError = "Poți folosi doar litere sau spații în nume.";
    } else {
        $cid = createCart();
        $aid = createAddress();
        $pid = createProfile($firstName, $lastName, $telefon, $aid);
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);

        $query = "INSERT INTO user(nume, prenume, email, parola, telefon, id_rol, poza, id_cos, id_profil)
        VALUES ('$lastName','$firstName', '$uname','$pwd','$telefon', 1, NULL, '$cid', '$pid');";

        $result = mysqli_query($conexiune, $query);
        $AccountCreated = "Cont de utilizator înregistrat cu succes. Redirecționare către pagina de logare...";
        header('Refresh: 5; URL=login');

        $_SESSION['logged_user'] = $uname;
    }
}
?>


<!DOCTYPE HTML>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music World</title>
    <link rel="stylesheet" href="./styles/styles.css" />
    <link rel="stylesheet" href="./styles/top.css" />
    <link rel="stylesheet" href="./styles/middle.css" />
    <link rel="stylesheet" href="./styles/bottom.css" />
    <link rel="stylesheet" href="./styles/register.css" />
</head>

<body>
    <?php echo $header ?>
    <div class="middle">
        <div class="registration-box">
            <h1 style="color:white">ÎNREGISTRARE CONT</h1>
            <form class="registration-form" action="registration.php" method="post">
                <div><label for="fName">First Name<span style="color:red;">*</span></label>
                    <input class="custom-input" type="text" name="fName" minlength="1" maxlength="30" >
                </div>
                <div><label for="lName">Last Name<span style="color:red;">*</span></label>
                    <input class="custom-input" type="text" name="lName" minlength="1" maxlength="30" >
                </div>
                <div><label for="phone">Mobile<span style="color:red;">*</span></label>
                    <input class="custom-input" type="tel" pattern="[0-9]{10}" name="phone" minlength="10" maxlength="10" required >
                </div>
                <div><label for="uname">Email<span style="color:red;">*</span></label>
                    <input class="custom-input" type="text" name="uname" class="email" minlength="5" maxlength="30" >
                </div>
                <div><label for="pwd">Password<span style="color:red;">*</span></label><input class="custom-input" type="password" name="pwd" minlength="3" maxlength="30" required autocomplete="off"></div>
                <input type="submit" value="Register" id="registration-btn" name="submit">
            </form>
            <div class="errors-registration">
                <?php
                echo $emailEmpty;
                echo $emailAlreadyExistError;
                echo $emailError;
                echo $nameError;
                ?>
            </div>
            <h5>Câmpurile cu (<span>*</span>) sunt obligatorii de completat.</h5>
            <hr>
            <h4>Ai deja un cont de utilizator?</h4><a href="login.php">Loghează-te aici!</a>
        </div>
    </div>
    <?php echo $footer ?>
</body>

</html>