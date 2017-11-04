<?php
	include_once "connection.php";
	
	if(!empty($_POST["cityId"]))
	{
		$cityId = $_POST["cityId"];
		$query = "SELECT * FROM gaam WHERE cityId = $cityId";
		$results = mysqli_query($connection, $query);
?>
		<option value="">Select Gaam</option>
<?php
		foreach ($results as $gaam)
		{
?>
		<option value= "<?php echo $gaam["gaamId"]; ?>"><?php echo $gaam["gaam"]; ?></option>
<?php
		}
	}
?>