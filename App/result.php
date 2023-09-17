<?php
 include 'files/templates/conn-db.php';

$sql = "SELECT * user_type FROM user_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {



echo $row["user_type"];

 //  echo "id: " . $row["id"]. " - mail: " . $row["mail"]. " - user_type: " . $row["user_type"].  " - pass: " . $row["pass"]. "<br>";
  }
} else {
 // echo "0 results";
}
include 'files/templates/close-db.php';
?>