<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/s2.css">
  <title>Document</title>
</head>

<body>
  <div class="wrapper">
    <div class="title">
      Login Form</div>
    <form class="h" action="#" method="POST">
      <div class="dropdown">
        <select class="select" name="LOGINTYPE">
          <option disabled selected>LOGINType</option>
          <option value="Admin">Admin</option>

          <option value="Donor">Donor</option>
          <option value="Needy">Needy</option>

        </select>
      </div>


      <div class="field">
        <input type="text" name='mail' required>
        <label>Email Address</label>
      </div>
      <div class="field">
        <input type="password" name='password' required>
        <label>Password</label>
      </div>
      <div class="content">
        <div class="checkbox">
          <input type="checkbox" id="remember-me">
          <label for="remember-me">Remember me</label>
        </div>
        <div class="pass-link">
          <a href="#">Forgot password?</a>
        </div>
      </div>
      <div class="field">
        <input type="submit" value="Login" name="login">
      </div>
      <div class="signup-link">
        Not a member? <a href="#">Signup now</a></div>
    </form>
  </div>
</body>

</html>


<?php
session_start();
$user = 'root';
$pass = '';
$db = 'humanitarianaid';
$conn = mysqli_connect('localhost:3306', $user, $pass, $db)
  or die("jj");
//echo "connected";


//$iemail=$_POST['mail'];

//$ipass=$_POST['password'];


if (isset($_POST['login']) && ($_POST['LOGINTYPE']) == 'Donor') {
  $sql = "select D_id,D_email,D_password,D_confirmed from donordetail";
  $result = $conn->query($sql);

 



  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

       
      //$_SESSION['h']=$row["D_id"];         
      $email = $row["D_email"];
      $pass = $row["D_password"];
      $confirm=$row["D_confirmed"];
   //   echo "$email ";
      //echo "<br>";
      if ($email == $_POST['mail'] && $pass == $_POST['password']   && $confirm=='1') {
        $_SESSION['h']=$row["D_id"];
        header('Location:dprofile.php');
      }
      
      
      else
        continue;
    }
   

    echo "<h3> Account is not created</h3>";  






  } else {
    echo "0 result";
  }
  $conn->close();
}


else if (isset($_POST['login']) && ($_POST['LOGINTYPE']) == 'Needy') {
  $sql = "select N_id,N_email,N_password ,N_confirmed from Needydetail";
  $result = $conn->query($sql);



  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      $email = $row["N_email"];
      $pass = $row["N_password"];
      $confirm=$row["N_confirmed"];
      echo "$email ";
      //echo "<br>";
      
      
      
      if ($email == $_POST['mail'] && $pass == $_POST['password'] && $confirm=='1') {
        $_SESSION['l']=$row["N_id"];
        header('Location:nprofile.php');
      

      } else
        continue;
    }



    
    
      echo "<h3> Account is not created</h3>";  
    
    











  } else {
    echo "0 result";
  }
  $conn->close();
}

else if (isset($_POST['login']) && ($_POST['LOGINTYPE']) == 'Admin') {
  $sql = "select A_email,PASSWORD from admindetail";
  $result = $conn->query($sql);



  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      $email = $row["A_email"];
      $pass = $row["PASSWORD"];
      echo "$email ";
      //echo "<br>";
      if ($email == $_POST['mail'] && $pass == $_POST['password']    ) {
        header('Location:AdminDetails.php');
      } else
        continue;
    }


  } else {
    echo "0 result";
  }
  $conn->close();
}





?>