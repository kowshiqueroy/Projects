<?php


$url=$_SERVER['REQUEST_URI'];


$logout='http://' . $_SERVER['SERVER_NAME'] .'/'.'projects/app/logout.php';
$home='http://' . $_SERVER['SERVER_NAME'] .'/'.'projects/app/index.php';
session_start();

if(isset($_SESSION['email']) && ! $_SESSION['email']=="" && str_contains($url,$_SESSION['type'])){


}
else{
    header( 'Location: '.$home);
die();
}


?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>OviApp</title>


    

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>


<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4">
    
    <div class="w3-container w3-center w3-animate-top " style="font-size:20px; ">
    <a style="font-size:20px; " href="<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>"><br><br>Confirm Submit
    <br>
    <i class='fas fa-upload' style='font-size:48px;color:red'></i><br><br></a>
    </div>
    
  </div>
</div>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Ovijat Group</h3>
                <strong>OviApp</strong>
                
            </div>

            <ul class="list-unstyled components">


            <li class="active">
                    <a href="dashboard.php">
                        <i class="fas fa-image"></i>
                        Dashboard
                    </a>
                </li>



                <li >
                    <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Stock
                    </a>


                  

                    <ul class="collapse list-unstyled" id="submenu">
                        <li>
                            <a href="#">View All</a>
                        </li>
                        <li>
                            <a href="#">View In</a>
                        </li>
                        <li>
                            <a href="#">View Out</a>
                        </li>

                        <li>
                            <a href="#">Database</a>
                        </li>

                        <li>
                            <a href="#">Modify</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="stockin.php">
                        <i class="fas fa-question"></i>
                        Stock In
                    </a>
                </li>

                <li >
                    <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Item/Category
                    </a>

                    <ul class="collapse list-unstyled" id="submenu3">
                        <li>
                            <a href="itemname.php">Item Name</a>
                        </li>
                       

                        <li>
                            <a href="categoryname.php">Category Name</a>
                        </li>


                        <li>
                            <a href="entityname.php">Entity Name</a>
                        </li>
                       

                        
                    </ul>
                </li>


                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        Stock Out
                    </a>
                </li>


                <li >
                    <a href="#submenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Work Order
                    </a>


                  

                    <ul class="collapse list-unstyled" id="submenu4">
                        <li>
                            <a href="#">Add Work Order</a>
                        </li>
                        <li>
                            <a href="#">View Work Order</a>
                        </li>
                        
                    </ul>
                </li>



                <li >
                    <a href="#submenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Floor Order
                    </a>
                    <ul class="collapse list-unstyled" id="submenu5">
                        <li>
                            <a href="#">Add Floor Order</a>
                        </li>
                        <li>
                            <a href="#">View Floor Order</a>
                        </li>
                        <li>
                            <a href="#">Receive Floor Order</a>
                        </li>

                       

                        
                    </ul>
                </li>

                <li >
                    <a href="#submenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Production Set
                    </a>
                    <ul class="collapse list-unstyled" id="submenu6">
                        <li>
                            <a href="#">Add Production Name</a>
                        </li>
                        <li>
                            <a href="#">View Production Name</a>
                        </li>
                        <li>
                            <a href="#">Modify Production Name</a>
                        </li>

                        <li>
                            <a href="#">Add Production Set</a>
                        </li>
                        <li>
                            <a href="#">View Production Set</a>
                        </li>
                        <li>
                            <a href="#">Modify Production Set</a>
                        </li>

                       

                        
                    </ul>
                </li>


                <li >
                    <a href="#submenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Requisition
                    </a>
                    <ul class="collapse list-unstyled" id="submenu7">
                        <li>
                            <a href="#">Add Requisition</a>
                        </li>
                        <li>
                            <a href="#">View Requisition</a>
                        </li>
                        <li>
                            <a href="#">Modify Requisition</a>
                        </li>
                       

                        
                    </ul>
                </li>
                <li >
                    <a href="#submenu8" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Purchase Order
                    </a>
                    <ul class="collapse list-unstyled" id="submenu8">
                        <li>
                            <a href="#">Add Purchase Order</a>
                        </li>
                        <li>
                            <a href="#">View Purchase Order</a>
                        </li>
                        <li>
                            <a href="#">Modify Purchase Order</a>
                        </li>
                        <li>
                            <a href="#">Submit Purchase Order</a>
                        </li>
                       

                        
                    </ul>
                </li>
               
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        QC Approval
                    </a>
                </li>


                <li >
                    <a href="#submenu9" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Distribution
                    </a>
                    <ul class="collapse list-unstyled" id="submenu9">
                        <li>
                            <a href="#">Product In</a>
                        </li>
                        <li>
                            <a href="#">Product Out</a>
                        </li>

                        <li>
                            <a href="#">View Product In</a>
                        </li>
                        <li>
                            <a href="#">View Product Out</a>
                        </li>

                        <li>
                            <a href="#">View Product Stock</a>
                        </li>


                        <li>
                            <a href="#">View Product Database</a>
                        </li>

                        <li>
                            <a href="#">Modify Product Database</a>
                        </li>

                        <li>
                            <a href="#">Add Product Name</a>
                        </li>

                        <li>
                            <a href="#">View Product Name</a>
                        </li>
                        <li>
                            <a href="#">Modify Product Name</a>
                        </li>

                        <li>
                            <a href="#">Add Product Category</a>
                        </li>

                        <li>
                            <a href="#">View Product Category</a>
                        </li>
                        <li>
                            <a href="#">Modify Product Category</a>
                        </li>

                        <li>
                            <a href="#">Add Person</a>
                        </li>

                        <li>
                            <a href="#">View Person</a>
                        </li>
                        <li>
                            <a href="#">Modify Person</a>
                        </li>


                      
                       

                        
                    </ul>
                </li>


             


                <li >
                    <a href="#submenu10" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        HR
                    </a>
                    <ul class="collapse list-unstyled" id="submenu10">
                        <li>
                            <a href="#">Add Employe</a>
                        </li>
                        <li>
                            <a href="#">View All Employee</a>
                        </li>
                        <li>
                            <a href="#">Modify Employee</a>
                        </li>
                        <li>
                            <a href="#">Search Employee</a>
                        </li>
                        <li>
                            <a href="#">Generate Employee ID</a>
                        </li>

                        <li>
                            <a href="#">Add Notice</a>
                        </li>
                        <li>
                            <a href="#">View Notice</a>
                        </li>
                        <li>
                            <a href="#">Modify Notice</a>
                        </li>

                        <li>
                            <a href="#">Add Job Post</a>
                        </li>
                        <li>
                            <a href="#">View Job Post</a>
                        </li>
                        <li>
                            <a href="#">Modify Job Post</a>
                        </li>
                        <li>
                            <a href="#">Apply Job</a>
                        </li>
                        <li>
                            <a href="#">View Job Application</a>
                        </li>
                       

                        
                    </ul>
                </li>

                
                <li >
                    <a href="#submenu11" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Accounts
                    </a>
                    <ul class="collapse list-unstyled" id="submenu11">
                        <li>
                            <a href="#">Add Expenses</a>
                        </li>
                        <li>
                            <a href="#">View Expenses</a>
                        </li>
                        <li>
                            <a href="#">Add Income</a>
                        </li>
                        <li>
                            <a href="#">View Income</a>
                        </li>
                        <li>
                            <a href="#">View Summary</a>
                        </li>

                        <li>
                            <a href="#">View Database</a>
                        </li>

                        <li>
                            <a href="#">Add Payment Method</a>
                        </li>

                        <li>
                            <a href="#">Add Person</a>
                        </li>
                       
                       

                        
                    </ul>
                </li>


                
                <li >
                    <a href="#submenu12" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Settings
                    </a>
                    <ul class="collapse list-unstyled" id="submenu12">
                        <li>
                            <a href="changepass.php">Change password</a>
                        </li>
                        <li>
                            <a href="users.php">Users</a>
                        </li>
                        
                        <li>
                            <a href="user-type.php">User Type</a>
                        </li>
                       

                        
                    </ul>
                </li>




            </ul>

           <p id="devcredit">Developer:<br><strong>KowshiqueRoy</strong><br>IT Engineer<br>Ovijat Group<br><a href="tel:8801632950179">+8801632950179</a><br><a href="mailto:kowshiqueroy@gmail.com">kowshiqueroy@gmail.com</a></p>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav id="navbar">
                <div class="container-fluid">

                    
                   

                    <div class="navmenu">

                        <ul id="navul"></ul>
                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-bars"></i>
                            
                        </button>
                    
                        
                            <li id="navli"><a href="<?php echo $logout?>"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
                            <li id="navli"><a href=""><i class="fas fa-user"></i><?php echo $_SESSION['type']?>  </a></li>
                            <li id="navli"><a href="#contact"><i class="fas fa-envelope"></i><?php echo $_SESSION['email']?>  </a></li>
                          
                            <li id="navli"><a href="#about"> <i class="fas fa-sync fa-spin"></i>  Online   </a></li>
                          </ul>
                       
                    </div>
                </div>
            </nav>

            
        
        
        
        
     