<?php


if( !isset($_SESSION['email'])){
$_SESSION['email']="";}
include 'msg.php';


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

if(isset($_POST['login'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $type = test_input($_POST["type"]);
  $mail = test_input($_POST["mail"]);
  $pass = test_input($_POST["psw"]);

$pass=md5($pass);
include 'files/templates/conn-db.php';



$sql = "SELECT * FROM user_list WHERE user_type='$type' AND mail='$mail' AND binary pass='$pass' ";
$result = $conn->query($sql);


if (
$data=$result->fetch_assoc()){


$_SESSION['email']= $mail;
$_SESSION['type']= $type;

header( 'Location: user/'.$_SESSION['type'].'/dashboard.php');
die();

}

else {


echo '<script>toastFunction("Error");</script>';


echo '<audio style ="display:none" controls="controls" autoplay="autoplay" id="audio"> height="0.5" width="0.5">
 <source src="files/sound/error.mp3" type="audio/mp3">
</audio>';



}


}



}






?>









<div id="id01" class="modal">
   <form class="modal-content animate" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <div class="imgcontainer">
         <span onclick="document.getElementById('id01').style.display='none'" class="close"
            title="Close Modal">&times;</span>
       
      </div>
      <div class="container">

         <label for="user"><b>User Type</b></label>



         <select style="margin-left:20px" id="user" name="type">

            <?php
 include 'files/templates/conn-db.php';

$sql = "SELECT DISTINCT user_type FROM user_type";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {



echo "<option value='".$row["user_type"]."'>".$row["user_type"]."</option>"; 

 //  echo "id: " . $row["id"]. " - mail: " . $row["mail"]. " - user_type: " . $row["user_type"].  " - pass: " . $row["pass"]. "<br>";
  }
} else {
 // echo "0 results";
}
include 'files/templates/close-db.php';
?>

         </select>

         <br><br>

         <label><b>E-mail</b></label>
         <input type="text" placeholder="name@example.com" name="mail" required>
         <label><b>Password</b></label>
         <input type="password" placeholder="Enter Password" name="psw" required>
         <button name="login" type="submit">Login</button>
  

      </div>
      <div class="container" style="background-color:#f1f1f1">
         <button type="button" onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn">Cancel</button>
         <span class="psw"><a href="#">Forgot Password?</a></span>
      </div>
   </form>
</div>
<script>
   var modal = document.getElementById('id01');
   window.onclick = function(event) {
   if (event.target == modal) {
   modal.style.display = "none";
   }
   }
   </script>

