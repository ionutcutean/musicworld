<?php
$hostname = "localhost";
$username = "root";
$password = "";
$bd = "music_world";

$conexiune = mysqli_connect($hostname,$username,$password)
or die ("Eroare! Functia apelata da eroare, este posbil ca cei 3 parametrii sa fie completati eronat!");

$baza_date = mysqli_select_db($conexiune,$bd)
or die ("Eroare! Numele aceste baze de date nu exista!");

function createCart(){
    global $conexiune;
    $query = 'INSERT INTO cos() values(NULL);';
    $result = mysqli_query( $conexiune ,$query);

    $query = 'SELECT * FROM cos ORDER BY id_cos DESC LIMIT 1;';
    $result = mysqli_query($conexiune, $query);
    $row = mysqli_fetch_assoc($result);

    return $row['id_cos'];
}

function createAddress(){
    global $conexiune;

    $query = "INSERT INTO adresa(strada, bloc, etaj, apartament, cod_postal, judet, localitate, numar)
    VALUES(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);";
    $result = mysqli_query($conexiune, $query);

    $query = "SELECT * FROM adresa ORDER BY id desc limit 1;";
    $result = mysqli_query($conexiune, $query);

    $row = mysqli_fetch_assoc($result);

    return $row['id'];
}

function createProfile($fName, $lName, $phone, $aid){
    global $conexiune;

    $query = "INSERT INTO profil(nume,prenume,telefon,id_adresa)
    VALUES('$fName', '$lName', '$phone','$aid');";

    $result = mysqli_query($conexiune, $query);

    $query = "SELECT * from profil where id_adresa = '$aid'";
    $result = mysqli_query($conexiune, $query);
    $row = mysqli_fetch_assoc($result);

    return $row['id'];
}

function getProfile(){
    global $conexiune;
    $query = "SELECT * FROM user where email='".$_SESSION['logged_user']."';";
    $result = mysqli_query($conexiune, $query);

    $assoc = mysqli_fetch_assoc($result);

    $query = "SELECT * FROM profil where id='".$assoc['id_profil']."';";
    $result = mysqli_query($conexiune, $query);

    $res = mysqli_fetch_assoc($result);
    return $res;
}

function getProfileInformation(){
    global $conexiune;

    $profile = getProfile();

    $profileInformation = 
    '<form class="information-form" method="POST" action="profile.php?page=0">
    <div><label for="fName">First Name</label>
    <input name="fName" type="text" value="'.$profile['prenume'].'"/>
    </div>
    <div><label for="lName">Last Name</label>
    <input name="lName" type="text" value="'.$profile['nume'].'"/>
    </div>
    <div><label for="phone">Mobile</label>
    <input name="phone" type="text" value="'.$profile['telefon'].'"/>
    </div>
    <input type="submit" name="submit" value="Save"/>
    </form>';

    return $profileInformation;
}

function getAddress(){
    global $conexiune;
    $profile = getProfile();

    $query = "SELECT * from adresa where id='".$profile['id_adresa']."';";
    $result = mysqli_query($conexiune, $query);

    $address = mysqli_fetch_assoc($result);

    return $address;
}

function getProfileAddress(){
    $address = getAddress();
    $profileAddress = 
    '<form class="information-form" method="POST" action="profile.php?page=1">
    <div><label for="strada">Street</label>
    <input name="strada" type="text" value="'.$address['strada'].'"/>
    </div>
    <div><label for="numar">Number</label>
    <input name="numar" type="text" value="'.$address['numar'].'"/>
    </div>
    <div><label for="bloc">Unit</label>
    <input name="bloc" type="text" value="'.$address['bloc'].'"/>
    </div>
    <div><label for="etaj">Floor</label>
    <input name="etaj" type="text" value="'.$address['etaj'].'"/>
    </div>
    <div><label for="apartament">Appartament</label>
    <input name="apartament" type="text" value="'.$address['apartament'].'"/>
    </div>
    <div><label for="cod_postal">Zip Code</label>
    <input name="cod_postal" type="text" value="'.$address['cod_postal'].'"/>
    </div>
    <div><label for="judet">County/Region</label>
    <input name="judet" type="text" value="'.$address['judet'].'"/>
    </div>
    <div><label for="localitate">City</label>
    <input name="localitate" type="text" value="'.$address['localitate'].'"/>
    </div>
    <input type="submit" name="submit" value="Save"/>
    </form>';

    return $profileAddress;
}
?>