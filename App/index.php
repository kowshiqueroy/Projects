
<?php
include "files/templates/head.php";



//Set the session timeout for 2 seconds
$timeout = 2;

//Set the maxlifetime of the session
ini_set( "session.gc_maxlifetime", $timeout );

//Set the cookie lifetime of the session
ini_set( "session.cookie_lifetime", $timeout );
session_start();


if(isset($_SESSION['email']) && ! $_SESSION['email']==""){

    echo $_SESSION['email'];

    echo '<script>toastFunction("Success");</script>';



    echo '
    
      <audio style ="display:none" controls="controls" autoplay="autoplay" id="audio"> height="0.5" width="0.5">
     <source src="files/sound/success.mp3" type="audio/mp3">
    </audio>
    <?php echo $sound ?>';

   header( 'Location: dashboard.php');
    die();
}
else{


   
echo '<script>toastFunction("Error");</script>';



echo '

  <audio style ="display:none" controls="controls" autoplay="autoplay" id="audio"> height="0.5" width="0.5">
 <source src="files/sound/eroor.mp3" type="audio/mp3">
</audio>
<?php echo $sound ?>';
}


?>


<?php

include "files/templates/head-menu.php";
include "files/templates/foot-menu.php";

?>

