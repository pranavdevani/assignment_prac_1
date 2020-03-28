<?php
$first_n = $_POST['FirstName'];
$last_n = $_POST['LastName'];
$gender = $_POST['gender'];
$birth_d = $_POST['date'];
$city = $_POST['city'];
$state = $_POST['state'];
$email = $_POST['email'];
$phone_n = $_POST['phoneno'];
if (!empty($first_n) || !empty($last_n) || !empty($gender) || !empty($birth_d) || !empty($city) || !empty($state) || !empty($email)|| !empty($phone_n) )
{
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "pranavpractical5";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     
     $INSERT = "INSERT Into registration_form  (first_n, last_n, gender, birth_d, city, state, email, phone_n) values('$first_n', '$last_n', '$gender', '$birth_d', '$city', '$state', '$email', '$phone_n')";
     //Prepare statement
    if ($conn->query($INSERT)) 
        {
            echo "New record is inserted sucessfully";
        } 
      else {
      echo "Error: " . $INSERT . "<br>". $conn->error;
     }

     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
