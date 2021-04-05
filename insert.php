<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="#">
    <title>submit</title>
</head>
<style>

body {
        /*padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background:url('../img/energy.jpg');
        background-repeat:no-repeat;*/

        background-image: url("../img/tree.jpg"); /* The image used */
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

    h2 {
        top: 20%;
        margin-top: 20%;
        margin-bottom: 00%;
        border: 1px solid #bdc3c7;
        margin-left: 20%;
        width: 60%;

        font-weight: 600;
        text-align: center;
        background-color: purple;
        color: #fff;
        padding: 10px 0px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

</style>


<body>
<h2>INSERTED</h2><?php

$name=$_POST['Name'];

//echo " welcome $name";
$quantity=$_POST['Quantity'];
$donorid=$_POST['DonorId'];

$unit=$_POST['unit'];

$user='root';
$pass= '';
$db='humanitarianaid';
$conn=mysqli_connect('localhost:3306',$user,$pass,$db)
or die("jj");
//echo "connected";


$sql="INSERT INTO stock (productname,quantity,unit,donorid) values('$name','$quantity','$unit','$donorid')";
$conn->query($sql);  






?>









