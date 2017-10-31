<?php
	include_once "connection.php";
	
	if(!empty($_POST["cid"]))
	{
		$cid = $_POST["cid"];
		$query = "SELECT * FROM city WHERE cid = $cid";
		$results = mysqli_query($connection, $query);
?>
		<option value="">Select City</option>
<?php
		foreach ($results as $city)
		{
?>
		<option value= "<?php echo $city["cityId"]; ?>"><?php echo $city["city"]; ?></option>
<?php
		}
	}
?>