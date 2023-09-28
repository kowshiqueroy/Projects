<?php  
$n1=$_GET['n1'] ; 

?>


<?php
// Include the database connection file
include('db_config.php');




if (isset($_POST['d1']) && !empty($_POST['d1'])) {

	// Fetch state name base on country id
	$query = "SELECT * FROM role WHERE company_name = '".$_POST['d1']."'";
	$result = $con->query($query);

	if ($result->num_rows > 0) {
		//echo '<option value="">Select</option>'; 
		while ($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['role_name'].'">'.$row['role_name'].'</option>'; 

	
			//jQuery('#f2').chosen();
	
		}

	
	} else {
		echo '<option value="">not available</option>'; 
	}


	//	echo	"<script>jQuery('#f2').chosen();</script>";

} elseif(isset($_POST['d2']) && !empty($_POST['d2'])) {

	// Fetch city name base on state id
	$query = "SELECT * FROM user WHERE role_name = '".$_POST['d2']."'";
	$result = $con->query($query);

	if ($result->num_rows > 0) {
		//echo '<option value="">Select</option>'; 
		while ($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['user_name'].'">'.$row['user_name'].'</option>'; 

		

		}
	} else {
		//echo '<option value="">not available</option>'; 
	}
}
?>