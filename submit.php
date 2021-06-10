<?php
$servername="localhost";
$username="root";
$password="";
$dbname="college";
$conn=new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed:".mysql_error());
}
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $feedback = $_POST['feedback'];
     $email = $_POST['email'];
     $phone=$_POST['phone'];
     $rating = $_POST['rating'];
     
     $sql = "INSERT INTO register(name,feedback,email,phone,rating)VALUES ('$name','$feedback','$email','$phone','$rating')";
     if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
     } else {
        echo "Error: " . $sql . "  " . mysqli_error($conn);
     }
    
 mysqli_close($conn);
}
?>
