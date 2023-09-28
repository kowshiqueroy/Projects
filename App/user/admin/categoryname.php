<!DOCTYPE html>


<?php include 'dashboard-header.php' ?>

<?php include  $_SERVER['DOCUMENT_ROOT'] .'/'.'projects/app/msg.php';



?>


<style>


@media screen and (max-width: 900px) {


  .open-button {
    background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 2px;
  width: 100px;
  height: 50px;
  font-size: 9px;
}




.open-button2 {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 105px;
  width: 100px;
  height: 50px;
  font-size: 10px;
}

.open-button3 {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 210px;
  width: 100px;
  height: 50px;
  font-size: 10px;




}
}


@media screen and (min-width: 901px) {

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}




.open-button2 {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 320px;
  width: 280px;
}

.open-button3 {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 620px;
  width: 280px;
}
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




<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>



<h2>Category Name List</h2>



<table>
  <tr>
    <th>ID</th>
    <th>Category Name</th>
    <th>Date</th>
  </tr>
 


  <?php
 include 'config.php';

$sql = "SELECT * FROM categoryname_list ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {



echo "<tr><td>".$row["id"]."</td>"; 
echo "<td>".$row["categoryname"]."</td>"; 

echo "<td>".$row["reg_date"]."</td></tr>"; 

 //  echo "id: " . $row["id"]. " - mail: " . $row["mail"]. " - user_type: " . $row["user_type"].  " - pass: " . $row["pass"]. "<br>";
  }
} else {
 // echo "0 results";
}
include 'close-config.php';
?>


</table>






<button class="open-button" onclick="openForm()">+ Create</button>

<div class="form-popup" id="myForm">
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="form-container">
    <h1>Create</h1>

   











    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="name" name="name" required>

    

    <button name="save"  type="submit" class="btn">Save</button>
    <button type="button" class="btn cancel" onclick="closeForm()">X</button>
  </form>
</div>




<button  class="open-button2" onclick="openForm2()">Modify</button>



<div class="form-popup" id="myForm2">
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="form-container">
    <h1>Modify</h1>

    <label for="user-type"><b>Name</b></label>
    





    <select style="margin-left:20px" id="user" name="name">

<?php
 include 'config.php';

$sql = "SELECT  categoryname FROM categoryname_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {



echo "<option value='".$row["categoryname"]."'>".$row["categoryname"]."</option>"; 

//  echo "id: " . $row["id"]. " - mail: " . $row["mail"]. " - user_type: " . $row["user_type"].  " - pass: " . $row["pass"]. "<br>";
}
} else {
// echo "0 results";
}
include 'close-config.php';
?>

</select>



<br>

    <label for="nname"><b>New Name</b></label>
    <input type="text" placeholder="nname" name="nname" required>

   

    <button name="save2"  type="submit" class="btn">Save</button>
    <button type="button" class="btn cancel" onclick="closeForm2()">X</button>
  </form>
</div>




<button  class="open-button3" onclick="openForm3()">- Delete</button>



<div class="form-popup" id="myForm3">
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="form-container">
    <h1>Delete</h1>

    <label for="user-type"><b>Name</b></label>
    


    <select style="margin-left:20px" id="user" name="name">

<?php
 include 'config.php';

$sql = "SELECT  categoryname FROM categoryname_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {



echo "<option value='".$row["categoryname"]."'>".$row["categoryname"]."</option>"; 

//  echo "id: " . $row["id"]. " - mail: " . $row["mail"]. " - user_type: " . $row["user_type"].  " - pass: " . $row["pass"]. "<br>";
}
} else {
// echo "0 results";
}
include 'close-config.php';
?>

</select>



<br>


  

   

    <button name="save3"  type="submit" class="btn">Delete</button>
    <button type="button" class="btn cancel" onclick="closeForm3()">X</button>
  </form>
</div>








<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<script>
function openForm2() {
  document.getElementById("myForm2").style.display = "block";
}

function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
}
</script>


<script>
function openForm3() {
  document.getElementById("myForm3").style.display = "block";
}

function closeForm3() {
  document.getElementById("myForm3").style.display = "none";
}
</script>








<?php 



if(isset($_POST['save'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
include 'config.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $name = test_input($_POST["name"]);
 


$sql = "INSERT INTO categoryname_list (categoryname)
  VALUES ('$name')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

    echo"<script>document.getElementById('id01').style.display='block';</script>";



    

    echo"<script>toastFunction('Done');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;

    echo"<script>toastFunction('Error');</script>";
  }





    }


}

include 'dashboard-footer.php';
?>




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


  $name = test_input($_POST["name"]);

  $nname = test_input($_POST["nname"]);

$sql = "UPDATE categoryname_list SET categoryname='$nname' WHERE categoryname='$name'";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

    echo"<script>document.getElementById('id01').style.display='block';</script>";



    

    echo"<script>toastFunction('Done');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;

    echo"<script>toastFunction('Error');</script>";
  }





    }


}

include 'dashboard-footer.php';
?>





<?php 



if(isset($_POST['save3'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
include 'config.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  $name = test_input($_POST["name"]);



$sql = "DELETE FROM categoryname_list  WHERE categoryname='$name'";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

    echo"<script>document.getElementById('id01').style.display='block';</script>";



    

    echo"<script>toastFunction('Done');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;

    echo"<script>toastFunction('Error');</script>";
  }





    }


}

include 'dashboard-footer.php';
?>