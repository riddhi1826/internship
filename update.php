<?php
include("connection.php");
error_reporting(0);
 $_GET['na'];
 $_GET['em'];
 $_GET['mn'];
 $_GET['da'];
 $_GET['pi'];
?>


<html>
<head>
<title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}
    .container {
    padding: 16px;
    }
    hr {
     border: 1px solid #f1f1f1;
    margin-bottom: 25px;
    }
    .btn {
         border: none; 
         color: white; 
         padding: 14px 28px; 
         cursor: pointer; 
          }

        .success {background-color: #4CAF50;} 
        .success:hover {background-color: #46a049;}
    input[type=text],input[type=email],input[type=date] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
     background: #f1f1f1;
    }

    input[type=text]:focus,input[type=email]:focus,input[type=date]:focus {
     background-color: #ddd;
      outline: none;
 }
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
  border: 5px solid black;
  width: 50%; 
}
    </style> 
</head>
<body>
<form class="modal-content" method="GET" action="">
    <div class="container">
    <h1>Student Form</h1>
    <p>Please fill in this form.</p>
       <hr>
        <label>Name:</label>
        <input type="text" name="Name" placeholder="Enter your name" value="<?php echo $_GET['na']; ?>"><br><br>
        <label>Email:</label>
        <input type="email" name="Email" placeholder="Enter your email" value="<?php echo $_GET['em']; ?>"><br><br>
        <label>Mobile:</label>
        <input type="text" name="Mobilenumber" placeholder="Enter your number" value="<?php echo $_GET['mn']; ?>"><br><br>
        <label>Date of Birth:</label>
        <input type="date" name="DateofBirth" value="<?php echo $_GET['da'];  ?>"><br><br>
        <label>Pincode:</label>
        <input type="text" name="Pincode" placeholder="Enter pincode" value="<?php  echo $_GET['pi']; ?>"><br><br>
        <input type="submit" name="Submit" value="Update">
    </div>
</form>
<?php


if($_GET['Submit'])
{
	$name=$_GET['Name'];
	$email=$_GET['Email'];
	$mobile=$_GET['Mobilenumber'];
	$dob=$_GET['DateofBirth'];
	$pincode=$_GET['Pincode'];
	$query="UPDATE APPLICATION SET Email='$email', Mobilenumber='$mobile',DateofBirth='$dob',Pincode='$pincode' WHERE Name='$name'";
	$data= mysqli_query($conn,$query);
	if ($data) {
		echo "<font color='green'>Record Updated successfully. <a href='display.php'>Check Updated List Here</a>";

	}
	else{
		echo "<font color='red'>Record Not Updated. <a href='display.php'>Check Updated List Here</a>";
	}
}
else{
	echo "<font color='blue'>Click on Update button to save the changes";
}
?>


</body>
</html>