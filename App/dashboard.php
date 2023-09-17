<?php

include 'msg.php';

session_start();

if(isset($_SESSION['email']) && ! $_SESSION['email']==""){

    echo $_SESSION['email'];

    echo '<script>toastFunction("Success");</script>';



    echo '
    
      <audio style ="display:none" controls="controls" autoplay="autoplay" id="audio"> height="0.5" width="0.5">
     <source src="files/sound/success.mp3" type="audio/mp3">
    </audio>
    <?php echo $sound ?>';
}
else{


    header( 'Location: index.php');
die();
echo '<script>toastFunction("Error");</script>';



echo '

  <audio style ="display:none" controls="controls" autoplay="autoplay" id="audio"> height="0.5" width="0.5">
 <source src="files/sound/eroor.mp3" type="audio/mp3">
</audio>
<?php echo $sound ?>';
}


?>
<a href="logout.php">Log out</a>