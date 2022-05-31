<!DOCTYPE html>
<html lang="en">
<?php
include 'header.php';
include 'footer.php';
include 'mysql.php';
$error = '';
if(isset($_POST['submit'])){
  $query = "SELECT * from user where email='".$_POST['uname']."'";
  $result = mysqli_query($conexiune, $query);

  if(mysqli_num_rows($result) == 0)
  {
    $error = 'Incorrect combination of username/password!';
  }
  else{
    $row = mysqli_fetch_assoc($result);
    $pwd = $_POST['pwd'];
    if(!password_verify($pwd, $row['parola'])){
      $error = 'Incorrect combination of username/password!';
    }    
    else{
      $_SESSION['logged_user'] = $row['email'];
      $_SESSION['role'] = $row['id_rol'];
      $_SESSION['basket'] = $row['id_cos'];
      $_SESSION['profile'] = $row['id_profil'];

      header("Location: index.php");
    }
  }
}

?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./styles/styles.css" />
  <link rel="stylesheet" href="./styles/top.css" />
  <link rel="stylesheet" href="./styles/middle.css" />
  <link rel="stylesheet" href="./styles/bottom.css" />
  <link rel="stylesheet" href="./styles/login.css" />
  <title>Music World</title>
  <script src="scripts/main.js"></script>
</head>

<body>
  <?php echo $header?>
  <div class="middle fullheight">
    <form class="login-form" method="POST" action="login.php">
      <div class="container">
        <label for="uname">Username</label>
        <input class="custom-input" type="text" placeholder="Enter Username" name="uname" required>
      </div>
      <div class="container">
        <label for="pwd">Password</label>
        <input class="custom-input" type="password" placeholder="Enter Password" name="pwd" required>
      </div>
      <div class="container column-flex center-items">
        <input class="login-btn" value="Login" type="submit" name="submit"></input>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <p style="color:red"><?php echo $error; ?></p>
    </form>
  </div>
  <?php echo $footer?>
</body>


</html>