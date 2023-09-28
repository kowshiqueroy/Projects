<!DOCTYPE html>


<?php include 'dashboard-header.php' ?>

<?php include  $_SERVER['DOCUMENT_ROOT'] .'/'.'projects/app/msg.php';



?>


<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


  <script
  src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">


  <div style="
  
  border: 5px solid;
  margin: auto;
  width: 50%;
  padding: 10px;
  
  
  ">
<label for="clist">Category:   </label>
<select style="width:200px;" class="clist" id="clist">



<?php
 include 'config.php';

$sql = "SELECT categoryname FROM categoryname_list";
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

 
<label for="plist">Item Name: </label>
<select style="width:200px;" class="plist" id="plist">



<?php
 include 'config.php';

$sql = "SELECT itemname FROM itemname_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {



echo "<option value='".$row["itemname"]."'>".$row["itemname"]."</option>"; 

//  echo "id: " . $row["id"]. " - mail: " . $row["mail"]. " - user_type: " . $row["user_type"].  " - pass: " . $row["pass"]. "<br>";
}
} else {
// echo "0 results";
}
include 'close-config.php';
?>





</select>


</div>



<script>
    jQuery('.clist').chosen();
    jQuery('.plist').chosen();
</script>




<?php

include 'dashboard-footer.php';
?>

