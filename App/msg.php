






  <style> #someelem
   {
   cursor: pointer;
   }

#audio{

    display:none;

}
   
</style>

<script>
    function toastFunction(msg="working") {
  var x = document.getElementById("toast");
  x.className = "show";

  if (msg=="Success"){

    x.style.backgroundColor = "green";
    x.style.color = "white";

  }

 else if (msg=="Error"){

    x.style.backgroundColor = "red";
    x.style.color = "white";

}
 
  x.textContent=msg;
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>

<div id="toast">
  <div class="checkicon"> <i class="fas fa-bell"></i> </div>Working</div>

  

<script>toastFunction("Connecting");</script>

<style>






.center{
text-align: center;
}

#toast {
  visibility: hidden;
  min-width: 250px;
  margin-left: -200px;
  background-color: white;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  color: black;
  text-align: center;
  border-radius: 10px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  right: 5%;
  top: 10%;
  font-size: 16px;
}

#toast.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {right: 0%; opacity: 0;} 
  to {right: 10%; opacity: 1;}
}

@keyframes fadein {
  from {right: 0%; opacity: 0;}
  to {right: 10%; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {right: 10%; opacity: 1;} 
  to {right: 0%; opacity: 0;}
}

@keyframes fadeout {
  from {right: 10%; opacity: 1;}
  to {right: 0%; opacity: 0;}
}
.checkicon i{
    font-size: 40px;
    color: #47d764;
}
    </style>