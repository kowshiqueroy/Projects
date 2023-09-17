<?php


function createDB() {

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // Create database
    $sql = "CREATE DATABASE appDB";
    if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
      include 'files/templates/close-db.php';

      createTable();
   
    
    } else {
      echo "Error creating database: " . $conn->error;


    }
    

    createDB();
    


}






function createTable() {

    include 'files/templates/conn-db.php';
    
 
    
    // sql to create table
    $sql = "CREATE TABLE user_list (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        mail VARCHAR(50) NOT NULL,
        user_type VARCHAR(30) NOT NULL,
        pass VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        
        if ($conn->query($sql) === TRUE) {
          echo "Table MyGuests created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
  
        include 'files/templates/close-db.php';
    
    


}



function insertData () {
  include 'files/templates/conn-db.php';

  $mail="a";
  $type="admin";


  
  $pass= md5("a");
  $sql = "INSERT INTO user_list (mail, user_type, pass)
  VALUES ('$mail', '$type', '$pass')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  include 'files/templates/close-db.php';

}



insertData();


?>