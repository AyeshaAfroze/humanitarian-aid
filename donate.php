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
<style>

body {
        /*padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background:url('../img/energy.jpg');
        background-repeat:no-repeat;*/

        background-image: url("../img/nevy3.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size:cover; 
        
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="logo"></span>
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
              <a class="nav-link js-scroll-trigger" href="home.html">Home</a></li>
             
              <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="stock.php">Stock</a></li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="AboutUs.html">About</a></li>
           <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.html">Contact</a></li>   
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="home.html">Logout</a></li>               
              </ul>
          </div>
      </div>
  </nav>
    <div class="wrapper">
      <div class="title">Donate Products</div>
    <form action="insert.php" method="POST">

    <div class="field">
        <input type="text" name="Name" required>
        <label>Prduct Name</label>
      </div>

      <div class="field">
        <input type="text"  name="Quantity"required>
        <label>Quantity</label>
      </div>

      <div class="field" >
        <input type="int" name="DonorId"required>
        <label>Donor Id</label>
      </div>
      
      
      
      <div class="field" >
        <input type="int" name="unit"required>
        <label>unit</label>
      </div>






    <div class="field">
          <input type="submit" name="Donate" value="Donate">
        </div>

</form>
</div>
</body>
</html>














