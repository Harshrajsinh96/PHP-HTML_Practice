<?php
	

	$connection = mysqli_connect("localhost", "RATHOD", "TQHSF8vqvJbFXXCC", "rathod")
	or die ("Connection_Problem" . mysqli_error($connection));

	if($connection)
		{
		echo "Successful Connection";
		}
	else
		{
		echo "Connection_Error";
		}

	$sql = "INSERT INTO mdh(name, enroll) VALUES ('".$_POST["name"]."','".$_POST["enroll"]."')";

	if ($connection->query($sql) == TRUE) 
		{
			echo "<script type= 'text/javascript'>alert('New record created successfully');
				  self.location='DemoForm.html';</script>";
		}
    else 
    	{
			echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $connection->error."');
				  self.location='DemoForm.html';</script>";
		}
			
$connection->close();

?>