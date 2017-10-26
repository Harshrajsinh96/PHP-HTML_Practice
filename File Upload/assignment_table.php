<?php
	
	$connection = mysqli_connect("localhost", "college", "GOLRhjGSmHQwwLd7", "college")
	or die ("Connection_Problem" . mysqli_error($connection));

	if($connection)
		{
			echo "Successful Connection";
			echo nl2br("\n");
		}
	else
		{
			echo "Connection_Error";
		}
					
						$hr;
						$subcode  = "SELECT sub_code FROM subject_master WHERE sub_id =$_POST[sub_id]";
						$result = mysqli_query($connection, $subcode) or die ("Erar!" . mysqli_error($connection));
						
						while($row = mysqli_fetch_row($result))
						{
							$hr = $row[0];
						}
						$link = upload($hr);
						
		
		function upload($input)
					{ 	
						if(isset($_FILES['file'])) {
						$file = $_FILES['file'];

						$file_name = $file['name'];
						$file_tmp = $file['tmp_name'];
						$file_size = $file['size'];
						$file_error = $file['error'];

						$file_ext = explode('.',$file_name);
						$file_ext = strtolower(end($file_ext));

						$allowed = array('jpg','pdf');

						if(in_array($file_ext, $allowed)) {
						if ($file_error === 0) {
						if ($file_size <=2097152) {

						$file_name_new = $input.'-' . 'Assignment'.'-'.$_POST["ass_no"].'.'.$file_ext;
						$file_destination = 'Uploads/'.$file_name_new;
						$link = 'localhost/8/Uploads/' . $file_name_new;
					
						if(move_uploaded_file($file_tmp, $file_destination)) {
						echo $file_destination;
						echo nl2br("\n");
						echo ('File Uploaded');
						echo nl2br("\n");
						return $link;
										}	else {echo ('Error!-1');}
									}	else {echo ('Error!-2');}
								}	else {echo ('Error!-3');}
							}	else {echo ('Error!-4');}
						}	else {echo ('Error!-5');}
					}
					
	$sql = "INSERT INTO assignment_table(discipline_id,branch_id,sem_id,div_id,sub_id,faculty_id,ass_no,link,assign_date,submission_date) 
	VALUES ('".$_POST["discipline_id"]."','".$_POST["branch_id"]."','".$_POST["sem_id"]."','".$_POST["div_id"]."','".$_POST["sub_id"]."','".$_POST["faculty_id"]."','".$_POST["ass_no"]."','".$link."','".$_POST["assign_date"]."','".$_POST["submission_date"]."')";

	$result1 = mysqli_query($connection, $sql) or die ("Erar!" . mysqli_error($connection));

	//<meta http-equiv="refresh" content="3;url=assignment_table.html/">
	//hr();
	//function hr()
	//				{
	//				sleep(3);
	//				header('Location: assignment_table.html');
	//				}
$connection->close();
?>