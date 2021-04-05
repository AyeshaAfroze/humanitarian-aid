<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="#">
    <title>Stock Table</title>
</head>

<style>
    .navbar{
        margin-top:0%;
        top:3%;
        padding:4px 0px;

        background-color:  purple;
               
                text-align: center;
            
    width: 100%;
    
   
    
    align-items: center;
    justify-content: space-evenly;
}

    .navbar a {
        color: white;
        text-decoration: none;
        font-size: 1.5rem;
        padding: 20px 20px;
        cursor: pointer;
    }
    .navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;

}

.navbar ul li a{
    text-decoration: none;
    color:beige;
    text-transform: uppercase;
}

.navbar ul li::after{
    content: '';
    height: 3px;
    width:0%;
    background: #009688;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;

}
.navbar ul li:hover::after{
    width: 100%;

}


    body {
        /*padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background:url('../img/energy.jpg');
        background-repeat:no-repeat;*/

        background-image: url("../img/energy.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size:cover; 
        
    }

    #header {
        background-color: purple;
        color: #fff;
    }

    h1 {
        top: 00%;
        margin-top: 2%;
        margin-bottom: 25%;
        border: 1px solid #bdc3c7;

        font-weight: 600;
        text-align: center;
        background-color: #fff;
        color: purple;
        padding: 10px 0px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    table {
        position: absolute;
        left: 50%;
        top: 60%;
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

    th,
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



    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
</style>

<body>
    <div class="navbar">
    <ul>
        <a href="home.html">Home</a>
        <a href="donordetails.php">Donor Details</a>
        <a href="needydetails.php">Needy Details</a>
        <a href="request.php">Request</a>
        <a href="records.php">Records</a>
</ul>




    </div>



    <h1>---STOCK TABLE---</h1>
    <hr>

    <table>
        <tr id="header">
        
          
            <th>Serial</th>
          
            <th>Productname</th>
          <th>Quantity</th>
          <th>Unit</th>
          <th>DonorId</th>
        
          


        </tr>

<?php

$user='root';
$pass= '';
$db='humanitarianaid';
$conn=mysqli_connect('localhost:3306',$user,$pass,$db)
or die("jj");
//echo "connected";
$sql="select * from stock";
$result=$conn->query($sql);



if($result->num_rows>0)
{
   while($row=$result -> fetch_assoc()){

    echo "<tr><td>".$row["serial"] ."</td><td>".$row["productname"]."</td><td>".$row["quantity"]."</td><td>".$row["unit"]."</td><td>".$row["donorid"] ."</td></tr>";



}
echo "</table>";


} 
else {
    echo "0 result";

}
$conn-> close();




?>






        </table>


</body>
</html>