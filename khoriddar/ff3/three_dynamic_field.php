<?php
$n1="company";
$n2="role";
$n3="user";
?>





<!-- f1 dropdown -->
<label for="f1"><?php echo $n1; ?></label>
				<select class="form-control" id="f1">
					<option value=""></option>
					<?php 
					$query = "SELECT * FROM company";
					$result = $con->query($query);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo '<option value="'.$row[$n1.'_name'].'">'.$row[$n1.'_name'].'</option>';
						}
					}else{
						//echo '<option value="">Country not available</option>'; 
					}
					?>
				</select>
        <br />

				<!-- f2 dropdown -->
				<label for="f2"><?php echo $n2; ?></label>
				<select class="form-control" id="f2">
					
				</select>
        <br />

				<!-- f3 dropdown -->
				<label for="f3"><?php echo $n3; ?></label>
				<select class="form-control" id="f3">
				
				</select>






  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">


<?php echo '

<script>
  var n1="hello";
</script>

' ?>



    <script type="text/javascript">
    $(document).ready(function(){
      // f1 dependent ajax
      $("#f1").on("change",function(){
        var d1 = String($(this).val());

        
        $.ajax({
          url :"ff3/action.php",
          type:"POST",
          cache:false,
          data:{d1:d1},
          success:function(data){
            $("#f2").html(data);
         
            $('#f3').html('');


          }
        });			
      });

      // f2 dependent ajax
      $("#f2").on("change", function(){
        var d2 = String($(this).val());
        $.ajax({
          url :"ff3/action.php",
          type:"POST",
          cache:false,
          data:{d2:d2},
          success:function(data){
            $("#f3").html(data);
    
          }
        });
      });
    });


    jQuery('#f1').chosen({"search_contains": true}) ;  
    
  


  </script>








