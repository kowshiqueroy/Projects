
<?php
include "files/templates/head.php";
session_start();


if(isset($_SESSION['email']) && ! $_SESSION['email']==""){
   header( 'Location: user/'.$_SESSION['type'].'/dashboard.php');
    die();
}
else{
   

}


?>


<?php

include "files/templates/head-menu.php";
include "files/templates/foot-menu.php";

?>

