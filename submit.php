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
<h2>Verification mail sent. Check your mail to verify your account.</h2>


<?php





/*$var  = $_POST['AccountType'];
//echo "$var";
$name=$_POST['Name'];

//e//cho " welcome $name";

$age=$_POST['Age'];

//echo " welcome $age";

$gender=$_POST['Gender'];

$occupation=$_POST['Occupation'];

$Phone=$_POST['PhoneNo'];

$address=$_POST['Address'];

$email=$_POST['Email'];

$password=$_POST['Password'];
//echo " welcome $password";

$user='root';
$pass= '';
$db='humanitarianaid';
$conn=mysqli_connect('localhost:3306',$user,$pass,$db)


or die("jj");
echo "connected";
if($var =='Donor')
{
$q="select D_email from donordetail ";
$result = $conn->query($q);


    if(strlen($name)<5){

        $error="<p> your username must be at least 5 characters</p>";
    }
    else if(strlen($password)<8){

        $error="<p> your username must be at least 8 characters</p>";
    }


    else
    {
        $name=$conn->real_escape_string($name);
        $password=$conn->real_escape_string($password);
       $vkey=random_int(1,100);
      //  $email=$conn->real_escape_string($email);


        echo "$vkey";
        
       //$sql1="INSERT INTO register(email,confirmed,confirmcode) values
       //('')";
       //$conn->query($sql1); 
   
        
     
    $sql="INSERT INTO donordetail 
(D_name,D_age,D_gender,D_occupation,D_phoneNo,D_address,D_email,D_password,D_confirmed,D_confirmcode) 
values('$name','$age','$gender','$occupation','$Phone','$address','$email','$password','0','$vkey')";
    $conn->query($sql); 

    if($sql)
    {

        $to=$email;
        $subject="Email Verification";
        $message="<a href='http://localhost/verify.php?vkey= $vkey'>RegisterAccount</a>";
        $headers="From : asifurannoy@gmail.com\r\n";
        $headers="MIME-Version: 1.0". "\r\n";
        $headers="Content-type:text/html;charset=UTF-8"."\r\n";
        if(mail($to,$subject,$message,$headers))
        {
            echo "succesfull";
        }
        else
        {

            echo "failed";
        }
       // header('location:thankyou.php');
        


        
    }
    else
    {
        echo $conn->error;
    }
    
    
    }

}

else if($var=='Needy')
{

$sql="INSERT INTO needydetail (N_name,N_age,N_gender,N_occupation,N_phoneNo,N_address,N_email,N_password) values('$name','$age','$gender','$occupation','$Phone','$address','$email','$password')";
$conn->query($sql);  


}






?>

</body>

</html>

*/