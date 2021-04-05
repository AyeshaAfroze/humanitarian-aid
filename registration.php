<?php

if (isset($_POST['Register'])) {



  $var  = $_POST['AccountType'];
  //echo "$var";
  $name = $_POST['Name'];

  //e//cho " welcome $name";

  $age = $_POST['Age'];

  //echo " welcome $age";

  $gender = $_POST['Gender'];

  $occupation = $_POST['Occupation'];

  $Phone = $_POST['PhoneNo'];

  $address = $_POST['Address'];

  $email = $_POST['Email'];

  $password = $_POST['Password'];
  //echo " welcome $password";

  $user = 'root';
  $pass = '';
  $db = 'humanitarianaid';
  $conn = mysqli_connect('localhost:3306', $user, $pass, $db)


    or die("jj");
  //echo "connected";
  if ($var == 'Donor') {
    $q = "select D_email from donordetail where D_email= '$email'";
    $res = $conn->query($q);


    if (strlen($name) < 5) {

      echo "<h3 style=font-size:32px;> your username must be at least 5 characters</h3>";

      //echo "$error";
    } else if (strlen($password) < 8) {

      echo "<h1 style=font-size:32px;> your password must be at least 8 characters</h1>";
      //echo "$error";
    } else if ($res->num_rows > 0) {

      echo "<h5 style=font-size:32px;> Account already exists</h5>";
    } else {
      $name = $conn->real_escape_string($name);
      $password = $conn->real_escape_string($password);
      $vkey = random_int(1, 100);
      //  $email=$conn->real_escape_string($email);


      //echo "$vkey";

      //$sql1="INSERT INTO register(email,confirmed,confirmcode) values
      //('')";
      //$conn->query($sql1); 



      $sql = "INSERT INTO donordetail 
(D_name,D_age,D_gender,D_occupation,D_phoneNo,D_address,D_email,D_password,D_confirmed,D_confirmcode) 
values('$name','$age','$gender','$occupation','$Phone','$address','$email','$password','0','$vkey')";
      $conn->query($sql);

      if ($sql) {

        $to = $email;
        $subject = "Email Verification";
        $message = "<a href='http://localhost/verify.php?vkey= $vkey'>RegisterAccount</a>";
        $headers = "From : asifurannoy@gmail.com\r\n";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
        if (mail($to, $subject, $message, $headers)) {
          // echo "succesfull";
          header('location:submit.php');
        } else {

          echo "<p> acoount Creattion failed</p>";
        }
        // header('location:thankyou.php');







      } else {
        echo $conn->error;
      }
    }
  }




  if ($var == 'Needy') {
    $q = "select N_email from Needydetail where N_email= '$email'";
    $res = $conn->query($q);


    if (strlen($name) < 5) {

      echo "<h1 style=font-size:32px;> your password must be at least 8 characters</h1>";

      //echo "$error";
    } else if (strlen($password) < 8) {

      echo "<h1 style=font-size:32px;> your password must be at least 8 characters</h1>";
      //echo "$error";
    } else if ($res->num_rows > 0) {

      echo "<h5 style=font-size:32px;> Account already exists</h5>";
    } else {
      $name = $conn->real_escape_string($name);
      $password = $conn->real_escape_string($password);
      $vkey = random_int(1, 100);
      //  $email=$conn->real_escape_string($email);


      //echo "$vkey";

      //$sql1="INSERT INTO register(email,confirmed,confirmcode) values
      //('')";
      //$conn->query($sql1); 



      $sql = "INSERT INTO Needydetail 
(N_name,N_age,N_gender,N_occupation,N_phoneNo,N_address,N_email,N_password,N_confirmed,N_confirmcode) 
values('$name','$age','$gender','$occupation','$Phone','$address','$email','$password','0','$vkey')";
      $conn->query($sql);

      if ($sql) {

        $to = $email;
        $subject = "Email Verification";
        $message = "<a href='http://localhost/verifyneed.php?vkey= $vkey'>RegisterAccount</a>";
        $headers = "From : asifurannoy@gmail.com\r\n";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
        if (mail($to, $subject, $message, $headers)) {
          // echo "succesfull";
          header('location:submit.php');
        } else {

          echo "<p> acoount Creattion failed</p>";
        }
        // header('location:thankyou.php');







      } else {
        echo $conn->error;
      }
    }
  }


























}





?>






















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
      Registration Form</div>
    <form method="POST">
      <div class="dropdown">
        <select class="select" name="AccountType">
          <option disabled selected>AccountType</option>
          <option value="Donor">Donor</option>
          <option value="Needy">Needy</option>

        </select>
      </div>



      <div class="field">
        <input type="text" name="Name" required>
        <label>Name</label>
      </div>

      <div class="field">
        <input type="text" name="Age" required>
        <label>Age</label>
      </div>

      <div class="field">
        <input type="text" name="Gender" required>
        <label>Gender</label>
      </div>
      <div class="field">
        <input type="text" name="Occupation" required>
        <label>Occupation</label>
      </div>

      <div class="field">
        <input type="nember" name="PhoneNo" required>
        <label>Contact Number</label>
      </div>
      <div class="field">
        <input type="text" name="Address" required>
        <label>Address</label>
      </div>

      <div class="field">
        <input type="text" name="Email" required>
        <label>Email Address</label>
      </div>










      <div class="field">
        <input type="password" name="Password" required>
        <label>Password</label>
      </div>


      <div class="field">
        <input type="submit" name="Register" value="Register">
      </div>
      <div cl ass="login-link">
        Already a member? <a href="login.php">Signin now</a></div>
    </form>
  </div>
</body>

</html>