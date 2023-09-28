<!DOCTYPE html>

<?php include  $_SERVER['DOCUMENT_ROOT'] .'/'.'projects/app/msg.php';



?>
<?php include 'dashboard-header.php' ?>




<style>


.open-button2 {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 20px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>







 


  <?php
 include 'config.php';
 $mail=$_SESSION['email'];

$sql = "SELECT * FROM user_list WHERE mail='$mail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {




echo $row["user_type"]; 
echo '<br>';
echo $row["mail"]; 
echo '<br>';
echo $row["reg_date"]; 



 //  echo "id: " . $row["id"]. " - mail: " . $row["mail"]. " - user_type: " . $row["user_type"].  " - pass: " . $row["pass"]. "<br>";
  }
} else {
 // echo "0 results";
}
include 'close-config.php';
?>











<button  class="open-button2" onclick="openForm2()">+ Change Password</button>



<div class="form-popup" id="myForm2">
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="form-container">
    <h1>Pass Change</h1>

    <label for="user-type"><b><?php echo $_SESSION['email'];?></b></label>

<br>

    <label for="pass"><b>Current Password</b></label>
    <input type="text" placeholder="pass" name="cpass" required>

    <label for="pass"><b>New Password</b></label>
    <input type="text" placeholder="pass" name="npass" required>

   

    <button name="save2"  type="submit" class="btn">Save</button>
    <button type="button" class="btn cancel" onclick="closeForm2()">X</button>
  </form>
</div>










<script>
function openForm2() {
  document.getElementById("myForm2").style.display = "block";
}

function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
}
</script>












<?php 



if(isset($_POST['save2'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
include 'config.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }




  $type=$_SESSION['type'];
  $mail=$_SESSION['email'];

  $cpass =md5( test_input($_POST["cpass"]));
  
  $npass =md5( test_input($_POST["npass"]));

  $sql = "SELECT * FROM user_list WHERE user_type='$type' AND mail='$mail' AND binary pass='$cpass' ";
  
  $result = $conn->query($sql);


  if (
  $data=$result->fetch_assoc()){



    $sql = "UPDATE user_list SET pass='$npass' WHERE mail='$mail'";

    if ($conn->query($sql) === TRUE) {

      echo "New record created successfully";

      echo"<script>document.getElementById('id01').style.display='block';</script>";
      echo"<script>toastFunction('Done');</script>";
    }


    else {
      echo "<br><br>Error changing Data";
  
      echo"<script>toastFunction('Error');</script>";
    }

  
  } else {
    echo "<br><br>Error changing Data";

    echo"<script>toastFunction('Error');</script>";
  }





    }


}

include 'dashboard-footer.php';
?>