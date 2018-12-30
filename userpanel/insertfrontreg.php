
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
    $address=$_POST["address"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $cnumber=$_POST["cnumber"];
    $gname=$_POST["gname"];
    $gnumber=$_POST["gnumber"];
    $status="NO";
    
    $string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string_shuffled = str_shuffle($string);
    $password = substr($string_shuffled, 0, 4);
    
    echo $password;
	
	/*
	// Authorisation details.
	$username = "patilsumit2020@gmail.com";
	$hash = "e33798352a2bef0fb3f738e8f5218bb0b5604bf27bca09b8b6011a9dc00a9d1e";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$contact"; // A single number or a comma-seperated list of numbers
	$message = "This is Current Otp:".$password;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	*/
		
   $sql1="INSERT INTO women (name,address,city,state,contact,guardian_name,guardian_number,otp,status) VALUES ('$name','$address','$city','$state','$cnumber','$gname','$gnumber','$password','$status')";

    if(mysqli_query($conn,$sql1))
    {
    //	echo 'Inserted';
    	 ?>
	         <meta http-equiv="refresh" content="0;url=index.php">
	         <script> alert("You are Register Successfully");</script>
	      <?php
    }
    else
    {
       echo ' Not Inserted';
       ?>
	         <meta http-equiv="refresh" content="0;url=registration.php">
	         <script> alert("You are Not Register");</script>
	      <?php
    }
    
?>