<?php include("connect.php");
$name=$_POST['Name'];
$company=$_POST['Company'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$message=$_POST['Message'];
$insert="insert into cardetail set
			name='$name',
			company='$company',
			email='$email',
			phone='$phone',
			message='$message'";
			mysqli_query($con,$insert) or die(mysqli_error());
?>
<!--Author:Gaurav Jha

-->
<!DOCTYPE HTML>
<html>
<head>
<title>Hospital Management System</title>

<!-- /js files -->
</head>
<body>
<H1>Succesfully</H1>

</body>
</html>