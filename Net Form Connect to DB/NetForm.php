<html>
<head>
<title>Insert Data In Database Using Mysqli</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="main">
<h1>Insert Data In Database Using MySQLi</h1>
<div id="login">
<h2>Student's Form</h2>
<hr/>
<form action="NetForm.php" method="post">
<label>Student Name :</label>
<input type="text" name="stu_name" id="name" required="required" placeholder="Please Enter Name"/><br /><br />
<label>Student Email :</label>
<input type="email" name="stu_email" id="email" required="required" placeholder="john123@gmail.com"/><br/><br />
<label>Student City :</label>
<input type="text" name="stu_city" id="city" required="required" placeholder="Please Enter Your City"/><br/><br />
<input type="submit" value=" Submit " name="insert"/><br />
</form>
</div>

<div id="formget">
<a href=style.css"/></a>
</div>

</div> 

<?php
if(isset($_POST["insert"])){
$servername = "localhost";
$username = "RATHOD";
$password = "TQHSF8vqvJbFXXCC";
$dbname = "rathod";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO students (stu_name, stu_email, stu_city)
VALUES ('".$_POST["stu_name"]."','".$_POST["stu_email"]."','".$_POST["stu_city"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";

} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>