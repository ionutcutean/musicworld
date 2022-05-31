<!DOCTYPE html>
<html lang="en">
<?php
include 'header.php';
include 'footer.php';
include 'helpers.php';
if (isset($_POST['submit'])) {
    $profil = getProfile();
    $address = getAddress();
    if ($_GET['page'] == 0) {
        $query = "UPDATE profil
    SET nume='" . $_POST['lName'] . "',
    prenume='" . $_POST['fName'] . "',
    telefon='" . $_POST['phone'] . "'
    WHERE id=" . $profil['id'] . ";";
        $result = mysqli_query($conexiune, $query);

        header("Location: profile.php?page=0");
    } else {
        $query = "UPDATE adresa
        SET strada='" . $_POST['strada'] . "',
        bloc='" . $_POST['bloc'] . "',
        etaj='" . $_POST['etaj'] . "',
        apartament='" . $_POST['apartament'] . "',
        cod_postal='" . $_POST['cod_postal'] . "',
        judet='" . $_POST['judet'] . "',
        localitate='" . $_POST['localitate'] . "',
        numar='" . $_POST['numar'] . "'
        WHERE id='" . $address['id'] . "';";

        $result = mysqli_query($conexiune, $query);
        header("Location: profile.php?page=1");
    }
}
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./styles/styles.css" />
    <link rel="stylesheet" href="./styles/top.css" />
    <link rel="stylesheet" href="./styles/middle.css" />
    <link rel="stylesheet" href="./styles/bottom.css" />
    <link rel="stylesheet" href="./styles/profile.css" />
    <script src="./scripts/main.js"></script>
    <title>Music World</title>
    <script src="scripts/main.js"></script>
</head>

<body>
    <?php echo $header ?>
    <div class="middle">
        <div class="profile-dashboard">
            <div class="left-menu">
                <div class="container">
                    <p>Tabs</p>
                </div>
                <div class="menu-items">
                    <a href="profile.php?page=0">Personal Information</a>
                    <a href="profile.php?page=1">Address</a>
                    <button>Delete Account</button>
                </div>
            </div>
            <div class="panel">
                <?php
                if ($_GET['page'] == 0)
                    echo getProfileInformation();
                else if ($_GET['page'] == 1)
                    echo getProfileAddress();
                ?>
            </div>
        </div>
    </div>
    <?php echo $footer ?>
</body>

</html>