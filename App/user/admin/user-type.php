<!DOCTYPE html>


<?php include 'dashboard-header.php' ?>




<style>
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




<style>table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th {
  cursor: pointer;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}

</style>



<h2>User Types</h2>


<table id="myTable">
  <tr>

  <th>ID</th>

   <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->  
    <th onclick="sortTable(0)">User Type</th>
    <th onclick="sortTable(1)">User</th>
    <th>Timestamp</th>
  </tr>
  
 


  <?php
 include 'config.php';

$sql = "SELECT * FROM user_type";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

  
  while($row = $result->fetch_assoc()) {



echo "<tr><td>".$row["id"]."</td>"; 
echo "<td>".$row["user_type"]."</td>"; 
echo "<td>".$row["admin_id"]."</td>"; 
echo "<td>".$row["times"]."</td></tr>"; 

 //  echo "id: " . $row["id"]. " - mail: " . $row["mail"]. " - user_type: " . $row["user_type"].  " - pass: " . $row["pass"]. "<br>";
  }
} else {
 // echo "0 results";
}
include 'close-config.php';
?>


</table>



<script>
function sortTable() {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
}
</script>




<button class="open-button" onclick="openForm()">+ Create New</button>

<div class="form-popup" id="myForm">
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" class="form-container">
    <h1>Create</h1>

    <label for="user-type"><b>User Type</b></label>
    <input type="text" placeholder="user-type" name="user-type" required>

   

    <button name="save"  type="submit" class="btn">Save</button>
    <button type="button" class="btn cancel" onclick="closeForm()">X</button>
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

  $user_type = test_input($_POST["user-type"]);
  $admin_id = $_SESSION['email'];

$sql = "INSERT INTO user_type (user_type, admin_id)
  VALUES ('$user_type','$admin_id')";
  
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