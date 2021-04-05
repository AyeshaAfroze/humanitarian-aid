<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sp.css">

    <title>Document</title>

    <style>
        .navbar {
            width: 100%;
             margin-top: 00%;
            background-color: #40868b;
            padding: 0% 10%;
            text-align: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            padding: 10px 20px;
            cursor: pointer;




        }
        body {
  /*padding: 0px;
  margin: 0;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  background:url('../img/energy.jpg');
  background-repeat:no-repeat;*/

  background-image: url("../img/p2.jpg"); /* The image used */
background-color: #cccccc; /* Used if the image is unavailable */
height: 100%; /* You must set a specified height */
background-position: center; /* Center the image */
background-repeat: no-repeat; /* Do not repeat the image */
background-size:cover; 
  
}
#header {
        background-color: #16a085;
        color: #fff;
    }
    h1 {
        top: 00%;
        margin-top: 2%;
        margin-bottom: 40%;
        border: 1px solid #bdc3c7;

        font-weight: 600;
        text-align: center;
        background-color: #fff;
        color: #16a085;
        padding: 10px 0px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
table {
        
       position: relative;
        left: 45%;
        top: 10%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 90%;
        height: 100px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }

    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }

    
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }



    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    </style>

</head>

<body>
    <div class="navbar">
        <a href="home.html">Home</a>
        <a href="needyDetails.php">Needy Details</a>


</div>
    <form method="POST">

        <div class="field">
            <input type="text" name="Name" required>
            <label>Product Name</label>
        </div>       

        <div class="field">
            <input type="submit" name="Donate" value="Search">
        </div>
   </form>
    
    
        <form  method="POST">           

        <div class="fieldOne">
            <input type="text" name="serial" required>
            <label>Enter needed product id</label>
        </div>
        <div class="field">
            <input type="text" name="Quantity" required>
            <label>Quantity</label>
        </div>




        <div class="field">
            <input type="text" name="unit" required>
            <label>unit</label>
        </div>

<div class="fieldOne">
            <input type="submit" name="sendrequest" value="Send Request">
        </div>
    </form>  
    

    <table>

    <tr id="header">

            <th>Product id</th>
            <th>Product name</th>
            <th>Quantity</th>            
            <th>DonorId</th>          
            <th>unit</th>     
        </tr>


<?php
session_start();
$m= $_SESSION['l'];
//echo "$m";

if (isset($_POST['Donate'])) {
    $name = $_POST['Name'];
   // echo " welcome $name";
    //$Quantity = $_POST['Quantity'];
    $user = 'root';
    $pass = '';
    $db = 'humanitarianaid';
    $conn = mysqli_connect('localhost:3306', $user, $pass, $db)
        or die("jj");
    //echo "connected";

    $sql = "SELECT * FROM stock where productname= '$name' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            echo "<tr><td>".$row["serial"] ."</td><td>".$row["productname"]."</td><td>"
            .$row["quantity"]."</td><td>" .$row["donorid"]."</td><td>" .$row["unit"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 result";
    }   
}

if (isset($_POST['sendrequest'])) {
    $productid = $_POST['serial'];
    $Quantity = $_POST['Quantity'];

    $user = 'root';
    $pass = '';
    $db = 'humanitarianaid';
    $conn = mysqli_connect('localhost:3306', $user, $pass, $db)
        or die("jj");
    //echo "connected";



    $sql="SELECT * FROM stock WHERE serial= $productid";
    
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
   // echo  $row["serial"] ;
   // echo "id1: " . $row["productname"] ;
    //echo "id2: " . $row["donorid"] ;
   // echo "id3: " . $row["quantity"] ;
    //echo "id4: " . $row["unit"] ;
    //echo "$m";

    echo "Request Given Succesfully";


    $did= $row["donorid"] ;
    $pn= $row["productname"] ;
   
    //echo "$pn";

    $unit= $row["unit"] ;

    $sql1 = "insert into request (NeedyId,DonorId,ProductId,ProductName,Quantity,Unit) values('$m', '$did' ,'$productid','$pn','$Quantity', '$unit')" ;
    $conn->query($sql1);   
}
    //$conn->query($sql1);  

?>
</table>
</body>
</html>








