<?php
  include_once "connection.php";

					$sql = "SELECT enr_no,'-',first_name,last_name FROM student_master";
					$result = mysqli_query($connection, $sql);

					if (!$result)
    				die('Could not successfully run query :'.mysqli_error());

					if (mysqli_num_rows($result) > 0)
					{
?>
					<table style="border: 0px">
       				 <?php
          		 	 while ($row = mysqli_fetch_assoc($result))
          		 	 {
               		echo '<tr><td>';
               		echo '<input type="checkbox" name="selected[]" value="'.$row['enr_no'].'"/>';
               		echo '</td>';
                	foreach ($row as $key => $value)
               		echo '<td>'.htmlspecialchars($value).'</td>';
               		echo '</tr>';
           		 	}
       				?>
    				</table>
    		    	<?php
					}
					?>