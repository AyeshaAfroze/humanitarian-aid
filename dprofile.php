<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">
      <title>Humanitarian Aid</title>
      <link rel="stylesheet" href="./css/home.css">
      <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="logo">WELCOME AS A DONOR</span>
          </a>
          <button class="navbar-toggler navbar-toggler-right" 
          type="button" data-toggle="collapse" data-target="#navbarResponsive" 
          aria-controls="navbarResponsive" aria-expanded="false" 
          aria-label="Toggle navigation">Menu
          <i class="fas fa-bars ml-1"></i>
        </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                  <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="donorhome.html">Home</a></li>
             
              <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="donate.php">Donate</a></li>
            
           <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.html">Contact</a></li>   
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="home.html">Logout</a></li>               
              </ul>
          </div>
      </div>
  </nav>

  
<?php
$user='root';
$pass= '';
$db='humanitarianaid';
$conn=mysqli_connect('localhost:3306',$user,$pass,$db)
or die("jj");
//necho "connected";
session_start();
 $r= $_SESSION['h'];
$sql="SELECT * FROM donordetail WHERE D_id= $r";
$result=$conn->query($sql);


if($result->num_rows>0)
{
   while($row=$result -> fetch_assoc())  {

    

    ?>
    <div class="wrapper">
    <div class="title">Donor Profile</div>
      <form action="submit" method="POST">

     <div class="field">
      <input type="text" name="Name"  value="<?php echo $row['D_name'] ;  ?>">
      <label>Name</label>
    </div>

    <div class="field">
      <input type="number"  name="Age"  value="<?php echo $row['D_age'] ;  ?>">
      <label>Age</label>
    </div>

    <div class="field" >
      <input type="text" name="Gender" value="<?php echo $row['D_gender'] ;  ?>">
      <label>Gender</label>
    </div>
    <div class="field">
      <input type="text"  name="occupation" value="<?php echo $row['D_occupation'] ;  ?>">
      <label>occupation</label>
    </div>

    <div class="field">
      <input type="text"  name="PhoneNO" value="<?php echo $row['D_phoneNo'] ;  ?>">
      <label>PhoneNo</label>
    </div>
    <div class="field">
      <input type="text"  name="Address" value="<?php echo $row['D_address'] ;  ?>">
      <label>Address</label>
    </div>

      <div class="field">
        <input type="text" name="Email"  value="<?php echo $row['D_email'] ;  ?>">
        <label>Email Address</label>
      </div>
      
        <div class="field">
          <input type="text"  name="Password" value="<?php echo $row['D_password'] ;  ?>">
          <label>Password</label>
        </div>
     

<div class="field">
        <input type="submit" name="Log Out" value="Log Out">
      </div>

</form>
</div>
          

    <?php


}



} 
else {
    echo "0 result";

}
$conn-> close();




?>  






  
</body>
</html>














