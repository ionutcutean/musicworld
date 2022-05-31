<html>
<body>

<form action="search.php" method="post">
Search <input type="text" name="search"><br>
<input type ="submit">
</form>

</body>
</html>

<?php

$search = $_POST['search'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "music_world";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from produse where name like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["name"]."  ".$row["prenume"]."  ".$row["email"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>