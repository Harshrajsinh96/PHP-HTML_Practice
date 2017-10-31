<?php
	include_once "connection.php";
?>
<html>
	<head>
		<title>Dropdown</title>
		<!--<style>
body{width:610px;}
.frmDronpDown {border: 1px solid #F0F0F0;background-color:#C8EEFD;margin: 2px 0px;padding:40px;}
.demoInputBox {padding: 10px;border: #F0F0F0 1px solid;border-radius: 4px;background-color: #FFF;width: 50%;}
.row{padding-bottom:15px;}
</style>-->
	</head>

	<body>
		<div class="frmDronpDown">
		<div class="row">

		<center>
			<div class="country">
			<label><b>Country :</b></label>
			<select name="country" class="demoInputBox" onchange="getId(this.value)">
				<option value="">Select Country</option>
				<?php
					$query = "SELECT * FROM country"; 
					$results = mysqli_query($connection, $query);

					foreach ($results as $country) {
				?>
				<option value="<?php echo $country["cid"]; ?>"><?php echo $country["country"]; ?></option>
				<?php
					}
				?>
			</select>
			</div>
			<div class="row">
			</div><hr>
			<div class="city">
			<label><b>City :</b></label>
			<select name="city" id="city" class="demoInputBox">
				<option value="">Select City</option>
				
			</select>
			</div>

		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		
		<script>
			function getId(val)
			{
				//alert(val);
					$.ajax({
					type: "POST",
					url: "selectcity.php",
					data:'cid='+val,
					success: function(data){
					$("#city").html(data);
					}
					});

			}

		</script>
	</center>
	</div>
</div>
	</body>
</html>
