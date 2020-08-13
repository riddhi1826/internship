<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    *{box-sizing: border-box}
    .container {
    padding: 16px;
    }
    hr {
      border: 0px solid #f1f1f1;
      margin-bottom: 25px;
    }
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
<form class="modal-content" method="GET" action="" style="margin-bottom: 20px;margin-top :20px;">
    <div class="container">
    <h1>Form Validation</h1>
       <hr>
        <label>Name:</label>
        <input type="text" name="Name" placeholder="Enter your name"><br><br>
        <label>Email:</label>
        <input type="email" name="Email" placeholder="Enter your email"><br><br>
        <label>Mobile:</label>
        <input type="text" name="Mobilenumber" placeholder="Enter your number"><br><br>
        <label>Date of Birth:</label>
        <input type="date" name="DateofBirth"><br><br>
        <label>Pincode:</label>
        <input type="text" name="Pincode" placeholder="Enter pincode"><br><br>
        <input type="submit" name="Submit">
    </div>
</form>
<?php
if($_GET['Submit'])
{
$na=$_GET['Name'];
$em=$_GET['Email'];
$mn=$_GET['Mobilenumber'];
$da=$_GET['DateofBirth'];
$pi=$_GET['Pincode'];

if($na!="" && $em!="" && $mn!="" && $da!="" && $pi!="")
{
$query = "INSERT INTO APPLICATION VALUES('$na','$em','$mn','$da','$pi')";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "data inserted into database";
}   
}
else
{
    echo "All fields are required";
}
}
?>
</body>
</html>