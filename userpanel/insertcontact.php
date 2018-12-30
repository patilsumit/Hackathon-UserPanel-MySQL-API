
<?php

$servername = "localhost";
$username = "id4996493_sumit";
$password = "sumit";
$dbname = "id4996493_womendb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
     $name=$_POST["name"];
     $email=$_POST["email"];
     $subject=$_POST["subject"];
     $message=$_POST["message"];
     
     
   $sql1="INSERT INTO contactuser (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";

    if(mysqli_query($conn,$sql1))
    {
    	 ?>
         	   
	         <meta http-equiv="refresh" content="0;url=index.php"> 
	         <script>alert("Mail send Successfully");</script>

	      <?php
    }
    else
    {
     //  echo ' Not Inserted';
        ?>
	         <meta http-equiv="refresh" content="0;url=contact.php">
	         <script>alert("Sorry, Mail is not send");</script>
	      <?php
    }

?>
