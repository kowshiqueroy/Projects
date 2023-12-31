<!DOCTYPE html>
<html>

<head>
<!-- TABLES CSS CODE -->
<?php include"comman/code_css_form.php"; ?>
<!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $theme_link; ?>plugins/iCheck/square/blue.css">

  <style type="text/css">
    .select2-container--default .select2-selection--single{
      border-radius: 0px;
    }
    /*LEFT SIDE: ITEMS TABLE*/
    .table-striped > tbody > tr:nth-of-type(2n+1) {
      background-color: #ede3e3;
    }
    .table-striped > tbody > tr {
      background-color: #ddc8c8;
    }

    /*SET TOTAL FONT*/
    .tot_qty, .tot_amt, .tot_disc, .tot_grand {
      font-size: 19px;
      color: #023763 ;
    }
    /*CURSOR POINTER CLASS*/
    .pointer{
      cursor:pointer;
    }
    .navbar-nav > .user-menu > .dropdown-width-lg{
      width: 350px;
    }
    .header-custom{
      background-image: -webkit-gradient(linear, left top, right top, from(#20b9ae), to(#006fd6)); color: white;
    }
    .border-custom-bottom{
      border-bottom: 1px solid;
      padding-top: 10px;
      padding-bottom: 5px;
    }
    .custom-font-size{
      font-size: 22px;
    }
    .search_item{
      text-transform: uppercase;
      font-size: 10px;
      color: #000000;
      text-align: center;
      text-overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
    }
    .item_image{
      min-width: 70px;
      min-height:  70px;
      max-width: 70px;
      max-height:  70px;
    }
    .item_box{
      border-top:none;
    }
    .min_width{
      min-width: 70px;
    }
  </style>
</head>

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
  <script type="text/javascript">
    if(theme_skin!='skin-blue'){
      $("body").addClass(theme_skin);
      $("body").removeClass('skin-blue');
    }
    if(sidebar_collapse=='true'){
      $("body").addClass('sidebar-collapse');
    }
  </script> 
  <?php $CI =& get_instance(); ?>
<div class="wrapper">
  
  
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo $base_url; ?>dashboard" class="navbar-brand" title="Go to Dashboard!"><b class="hidden-xs"><?php  echo $SITE_TITLE;?></b><b class="hidden-lg">POS</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <?php if($CI->permissions('sales_view')) { ?>
            <li class=""><a href="<?php echo $base_url; ?>sales" title="View Sales List!"><i class="fa fa-list text-yellow" ></i> <span><?= $this->lang->line('sales_list'); ?></span></a></li>
            <?php } ?>
            <?php if($CI->permissions('sales_add')) { ?>
            <li class=""><a href="<?php echo $base_url; ?>pos" title="Create New POS Invoice"><i class="fa fa-calculator text-yellow " ></i> <span><?= $this->lang->line('new_invoice'); ?></span></a></li>
            <?php } ?>
            <?php if($CI->permissions('items_view')) { ?>
            <li class=""><a href="<?php echo $base_url; ?>items/" title="View Items List"><i class="fa  fa-cubes text-yellow " ></i> <span><?= $this->lang->line('items_list'); ?></span></a></li>
            <?php } ?>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Click To View Hold Invoices">
             
              <span class=""><?= $this->lang->line('hold_list'); ?></span>
              <span class="label label-danger hold_invoice_list_count"><?=$tot_count?></span>
            </a>

            <ul class="dropdown-menu dropdown-width-lg">
              
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-12 text-center " style="max-height:300px;overflow-y: scroll;">
                    <table class="table table-bordered" width="100%">
                      <thead>
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Ref.ID</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody id="hold_invoice_list" >
                       <?=$result?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.row -->
              <!--</li>-->
            </ul>
          </li>

            <!-- Messages: style can be found in dropdown.less-->
            <li class="hidden-xs" id="fullscreen"><a title="Fullscreen On/Off"><i class="fa fa-tv text-white" ></i> </a></li>
            <li class="text-center" id="">
            <a title="Dashboard" href="<?php echo $base_url; ?>dashboard"><i class="fa fa-dashboard text-yellow" ></i><b class="hidden-xs"><?= $this->lang->line('dashboard'); ?></b></a>
          </li>

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo get_profile_picture(); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php print ucfirst($this->session->userdata('inv_username')); ?></span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo get_profile_picture(); ?>" class="img-circle" alt="User Image">

                <p>
                 <?php print ucfirst($this->session->userdata('inv_username')); ?>
                  <small>Year <?=date("Y");?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo $base_url; ?>users/edit/<?= $this->session->userdata('inv_userid'); ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo $base_url; ?>logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>

  <?php $css = ($this->session->userdata('language')=='Arabic' || $this->session->userdata('language')=='Urdu') ? 'margin-right: 0 !important;': '';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="<?=$css;?>">
    <!-- Content Header (Page header) -->
   <!--  <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section> -->

    <!-- **********************MODALS***************** -->
    <?php include"modals/modal_customer.php"; ?>
    <?php include"modals/modal_pos_sales_item.php"; ?>
    <!-- **********************MODALS END***************** -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-7">
         
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            <form class="form-horizontal" id="pos-form" >
            <div class="box-header with-border" style="padding-bottom: 0px;">
              <div class="row" >
                <div class="col-md-12" >
                <div class="col-md-4">
                  <h3 class="box-title text-primary"><i class="fa fa-shopping-cart text-aqua"></i> Sales Invoice</h3>
                </div>
                  
                <?php if(isset($sales_id)): ?>
                  <?php if($CI->permissions('sales_add')) { ?>
                  <div class="col-md-4 pull-right">
                    <a href='<?= $base_url;?>pos' class="btn btn-primary pull-right">New Invoice</a>
                  </div>
                  <?php } ?>
                <?php endif; ?>
                
              </div>
              </div>
               
            
            
            
          </div>
            <!-- /.box-header -->
            
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
              <input type="hidden" value='0' id="hidden_rowcount" name="hidden_rowcount">
              <input type="hidden" value='' id="hidden_invoice_id" name="hidden_invoice_id">
              <input type="hidden" id="base_url" value="<?php echo $base_url;; ?>">

              <input type="hidden" value='' id="temp_customer_id" name="temp_customer_id">
              
              <!-- **********************MODALS***************** -->
             <?php include"modals_pos_payment/modal_payments_multi.php"; ?>
              <!-- **********************MODALS END***************** -->
              <!-- **********************MODALS***************** -->
              <div class="modal fade" id="discount-modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Set Discount</h4>
                    </div>
                    <div class="modal-body">
                      <?php 
                      $discount_input = $this->db->select("sales_discount")->get('db_sitesettings')->row()->sales_discount;
                    $discount_input = ($discount_input==0) ? '' : $discount_input;
                      ?>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="box-body">
                              <div class="form-group">
                                <label for="discount_input">Discount</label>
                                <input type="text" class="form-control" id="discount_input" name="discount_input" placeholder="" value="<?=$discount_input?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="box-body">
                              <div class="form-group">
                                <label for="discount_type">Discount Type</label>
                                <select class="form-control" id='discount_type' name="discount_type">
                                  <option value='in_percentage'>Per%</option>
                                  <option value='in_fixed'>Fixed</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                     
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary discount_update">Update</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
              <!-- **********************MODALS END***************** -->
              <div class="box-body">   
              <?php if(isset($sales_id)){ ?>             
                <div class="row">
                <div class="col-md-6">
                  <div class="input-group date">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <input type="text" class="form-control pull-right datepicker"  id="sales_date" name="sales_date" readonly value="">
                  </div>
                  <span id="sales_date_msg" style="display:none" class="text-danger"></span>
                </div>                
              </div><!-- row end -->
              <br>
            <?php } ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon" title="Customer"><i class="fa fa-user"></i></span>
                     <select class="form-control select2" id="customer_id" name="customer_id"  style="width: 100%;" >
                    </select>
                    <span class="input-group-addon pointer" data-toggle="modal" data-target="#customer-modal" title="New Customer?"><i class="fa fa-user-plus text-primary fa-lg"></i></span>
                  </div>
                    <span class="customer_points text-success" style="display: none;"></span>
                  
                  
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon" title="Select Items"><i class="fa fa-barcode"></i></span>
                     <input type="text" class="form-control" placeholder="Item name/Barcode/Itemcode [Ctrl+Shift+S]" id="item_search">
                  </div>
                </div>                
              </div><!-- row end -->
              <br>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="col-sm-12" style="overflow-y:auto;border:1px solid #337ab7;" >
                      <table class="table table-condensed table-bordered table-striped table-responsive items_table" style="">
                        <thead class="bg-primary">
                          <th width="30%"><?= $this->lang->line('item_name'); ?></th>
                          <th width="10%"><?= $this->lang->line('stock'); ?></th>
                          <th width="25%"><?= $this->lang->line('quantity'); ?></th>
                          <th width="15%"><?= $this->lang->line('price'); ?></th>
                          <th width="10%"><?= $this->lang->line('discount'); ?></th>
                          <th width="10%" class='<?=tax_disable_class()?>'><?= $this->lang->line('tax'); ?></th>
                          <th width="15%"><?= $this->lang->line('subtotal'); ?></th>
                          <th width="5%"><i class="fa fa-close"></i></th>
                        </thead>
                        <tbody id="pos-form-tbody" style="font-size: 16px;font-weight: bold;overflow: scroll;">
                          <!-- body code -->
                        </tbody>        
                        <tfoot>
                          <!-- footer code -->
                        </tfoot>              
                      </table>
                    </div>
                  </div>
                </div>
              </div>



              <!-- SMS Sender while saving -->
                      <?php 
                         //Change Return
                          $send_sms_checkbox='disabled';
                          if($CI->is_sms_enabled()){
                            if(!isset($sales_id)){
                              $send_sms_checkbox='checked';  
                            }else{
                              $send_sms_checkbox='';
                            }
                          }
                          $other_charges = '';//(isset($sales_id)) ? $other_charges : "";
                    ?>
              <div class="row">
                    <div class="col-xs-12 ">
                      <div class="col-md-6">
                           <div class="checkbox icheck">
                              <input type="checkbox" <?=$send_sms_checkbox;?> class="form-control" id="send_sms" name="send_sms" > <label for="sales_discount" class=" control-label"><label for='send_sms'><?= $this->lang->line('send_sms_to_customer'); ?></label>
                                <i class="hover-q " data-container="body" data-toggle="popover" data-placement="top" data-content="If checkbox is Disabled! You need to enable it from SMS -> SMS API <br><b>Note:<i>Walk-in Customer will not receive SMS!</i></b>" data-html="true" data-trigger="hover" data-original-title="" title="Do you wants to send SMS ?">
                                  <i class="fa fa-info-circle text-maroon text-black hover-q"></i>
                                </i>
                              </label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="other_charges" class="col-sm-7 control-label"><?= $this->lang->line('other_charges'); ?><label class="text-danger">*</label></label>

                          <div class="col-sm-5">
                            <input type="text" class="form-control text-right" id="other_charges" name="other_charges" placeholder="0.00"  value="<?=$other_charges?>">
                  <span id="other_charges_msg" style="display:none" class="text-danger"></span>
                          </div>
                          </div>
                        </div>
                    </div> 
                </div>
           
              </div>
              <!-- /.box-body -->

              <div class="box-footer bg-gray">
                <div class="row">
                  <div class="col-md-3 text-right">
                          <label> <?= $this->lang->line('quantity'); ?>:</label><br>
                          <span class="text-bold tot_qty"></span>
                  </div>
                  <div class="col-md-3 text-right">
                          <label><?= $this->lang->line('total_amount'); ?>:</label><br>
                          <?= $CI->currency('<span style="font-size: 19px;" class="tot_amt text-bold"></span>');?>
                  </div>
                  <div class="col-md-3 text-right">
                          <label><?= $this->lang->line('total_discount'); ?>:<a class="fa fa-pencil-square-o cursor-pointer" data-toggle="modal" data-target="#discount-modal"></a></label><br>
                          <?= $CI->currency('<span style="font-size: 19px;" class="tot_disc text-bold"></span>');?>
                  </div>
                  <div class="col-md-3 text-right">
                          <label><?= $this->lang->line('grand_total'); ?>:</label><br>
                          <?= $CI->currency('<span style="font-size: 19px;" class="tot_grand text-bold"></span>');?>
                  </div>
                </div>
               
                <div class="row">
                
                  <?php if(isset($sales_id)){ $btn_id='update';$btn_name="Cash"; ?>
                    <input type="hidden" name="sales_id" id="sales_id" value="<?php echo $sales_id;?>"/>
                  <?php } else{ $btn_id='save';$btn_name="Cash";} ?>

                  <div class="col-md-12 text-right">

                    <div class="col-sm-3">
                      <button type="button" id="hold_invoice" name="" class="btn bg-maroon btn-block btn-flat btn-lg" title="Hold Invoice [Ctrl+Shift+H]">
                      <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
                       Hold
                    </button>
                    </div>
                    <div class="col-sm-3">
                      <button type="button" id="" name="" class="btn btn-primary btn-block btn-flat btn-lg show_payments_modal" title="Multiple Payments [Ctrl+Shift+M]">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                             Multiple
                          </button>
                    </div>
                    <div class="col-sm-3">
                      <button type="button" id="<?php echo "show_cash_modal";?>" name="" class="btn btn-success btn-block btn-flat btn-lg shift_c" title="By Cash & Save [Ctrl+Shift+C]">
                            <i class="fa fa-money" aria-hidden="true"></i>
                             <?php echo $btn_name;?>
                          </button>
                    </div>

                    <div class="col-sm-3">
                      <button type="button" id="pay_all" name="" class="btn bg-purple btn-block btn-flat btn-lg shift_a" title="By Cash & Save [Ctrl+Shift+A]">
                            <i class="fa fa-money" aria-hidden="true"></i>
                             Pay All
                          </button>
                    </div>
                    

                          
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-5">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- form start -->
            
              <div class="box-body">
                
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group input-group-md">
                      <select class="form-control select2" id="category_id" name="category_id"  style="width: 100%;"  >
                      <?php
                      $query1="select * from db_category where status=1";
                      $q1=$this->db->query($query1);
                      echo '<option value="">All Categories</option>';
                      if($q1->num_rows($q1)>0)
                       {   
                           foreach($q1->result() as $res1)
                         {
                           echo "<option value='".$res1->id."'>".$res1->category_name."</option>";
                         }
                       }
                       else
                       {
                          ?>
                          <option value="">No Records Found</option>
                          <?php
                       }
                      ?>
                    </select>
                          <span class="input-group-btn">
                            <button type="button" class="btn text-blue btn-flat reset_categories" title="Reset Brand" data-toggle="tooltip" data-placement="top">
                              <i class="fa fa-undo"></i>
                            </button>
                          </span>
                    </div>
                </div>  
                <div class="col-md-6">
                  <div class="input-group input-group-md">
                      <select class="form-control select2" id="brand_id" name="brand_id"  style="width: 100%;"  >
                      <?php
                      $query1="select * from db_brands where status=1";
                      $q1=$this->db->query($query1);
                      echo '<option value="">All Brands</option>';
                      if($q1->num_rows($q1)>0)
                       {   
                           foreach($q1->result() as $res1)
                         {
                           echo "<option value='".$res1->id."'>".$res1->brand_name."</option>";
                         }
                       }
                       else
                       {
                          ?>
                          <option value="">No Records Found</option>
                          <?php
                       }
                      ?>
                    </select>
                          <span class="input-group-btn">
                            <button type="button" class="btn text-blue btn-flat reset_brands" title="Reset Brand" data-toggle="tooltip" data-placement="top">
                              <i class="fa fa-undo"></i>
                            </button>
                          </span>
                    </div>
                </div>               
              </div><!-- row end -->


              <br>
              <div class="row">

                <div class="col-md-12">
                  <div class="input-group input-group-md">
                   
                      <input type="text" class="form-control" data-toggle="tooltip" title="Enter Item Name" placeholder="Item Name" id="item_name" name="item_name">

                          <span class="input-group-btn">
                            <button type="button" class="btn text-blue btn-flat reset_item_name" title="Reset Item Name" data-toggle="tooltip" data-placement="top">
                              <i class="fa fa-undo"></i>
                            </button>
                          </span>
                    </div>
                </div>               

              </div><!-- row end -->

             
              <div class="row">
                <div class="col-md-12">
                  <!-- <div class="form-group"> -->
                   <!--  <div class="col-sm-12"> -->
                      <!-- <style type="text/css">
                        
                      </style> -->
                            <section class="content" >
                              <div class="row search_div" style="overflow-y: scroll;min-height: 100px;height: 500px;">
                              </div>
                            </section>
                            <div class="ajax-load text-center" style="display:none;">
                                <button type="button" class="btn btn-default btn-lrg ajax" title="Ajax Request">
                                <i class="fa fa-spin fa-refresh"></i>&nbsp; Loading More Data
                              </button>
                              </div>
                         
                    <!-- </div> -->
                  <!-- </div> -->
                </div>
              </div>
           
              </div>
              <!-- /.box-body -->

              
           
          </div>
          <!-- /.box -->
          
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include"footer.php";?>
</div>
<!-- ./wrapper -->

<!-- SOUND CODE -->
<?php include"comman/code_js_sound.php"; ?>
<!-- GENERAL CODE -->
<?php include"comman/code_js_form.php"; ?>

<!-- iCheck -->
<script src="<?php echo $theme_link; ?>plugins/iCheck/icheck.min.js"></script>

<script src="<?php echo $theme_link; ?>js/fullscreen.js"></script>
<script src="<?php echo $theme_link; ?>js/modals.js"></script>
<script src="<?php echo $theme_link; ?>js/pos.js"></script>
<script src="<?php echo $theme_link; ?>js/ajaxselect/customer_select_ajax.js"></script>  


<!-- DROP DOWN -->
<script src="<?php echo $theme_link; ?>dist/js/bootstrap3-typeahead.min.js"></script>  
<!-- DROP DOWN END-->


<script>

  //Customer Selection Box Search
         function getCustomerSelectionId() {
           return '#customer_id';
         }

         $(document).ready(function () {

            var customer_id = "<?= (!empty($customer_id)) ? $customer_id : '';  ?>";
            
            autoLoadFirstCustomer(customer_id);

         });
         //Customer Selection Box Search - END

  $("#other_charges").keyup(function(event) {
    final_total();
  });
  //RIGHT SIT DIV:-> FILTER ITEM INTO THE ITEMS LIST
  function search_it(){
  
  var input = $("#search_it").val().trim();
  var item_count=$(".search_div .search_item").length;
  var error_count=item_count;
  for(i=0; i<item_count; i++){
    
    if($("#item_"+i).html().toUpperCase().indexOf(input.toUpperCase())>-1){
    
      $("#item_"+i).show();
      $("#item_parent_"+i).show();
    }
    else{
    
     $("#item_"+i).hide();
     $("#item_parent_"+i).hide();
     error_count--;
    }
    if(error_count==0){
      $(".error_div").show();
    }
    else{
      $(".error_div").hide();
    }
    
  }
  }


//REMOTELY FETCH THE ALL ITEMS OR CATEGORY WISE ITEMS.
function get_details(){
  /*$(".box").append('<div class="overlay"><i class="fa fa-refresh fa-spin"></i></div>');
  $.post("<?php echo $base_url; ?>pos/get_details",{id:$("#category_id").val()},function(result){
    $(".search_div").html('');
    $(".search_div").html(result);
    $(".overlay").remove();
  });*/
}

//LEFT SIDE: ON CLICK ITEM ADD TO INVOICE LIST
function addrow(id='',item_obj=''){

    //CHECK SAME ITEM ALREADY EXIST IN ITEMS TABLE 
    
    var item_id = (item_obj=='') ? $('#div_'+id).attr('data-item-id') : item_obj.item_id; 
    var item_check=check_same_item(item_id);
    if(!item_check){return false;}
    var rowcount        =$("#hidden_rowcount").val();//0,1,2...
    
    
    var item_name = (item_obj=='') ? $('#div_'+id).attr('data-item-name') : item_obj.item_name; 

    var stock   =(item_obj=='') ? $('#div_'+id).attr('data-item-available-qty') : item_obj.stock;
        stock     =(parseFloat(stock)).toFixed(2);

    var tax_type   =(item_obj=='') ? $('#div_'+id).attr('data-item-tax-type') : item_obj.tax_type;  
    var tax_id   =(item_obj=='') ? $('#div_'+id).attr('data-item-tax-id') : item_obj.tax_id;  
    var tax_value   =(item_obj=='') ? $('#div_'+id).attr('data-item-tax-value') : item_obj.tax;

    var tax_name   =(item_obj=='') ? $('#div_'+id).attr('data-item-tax-name'):item_obj.tax_name;  
    var tax_amt   =(item_obj=='') ? $('#div_'+id).attr('data-item-tax-amt') : item_obj.item_tax_amt; 
    var purchase_price   =(item_obj=='') ? $('#div_'+id).attr('data-purchase_price') : item_obj.purchase_price; 
    //var gst_per         =$('#div_'+id).attr('data-item-tax-per');
    //var gst_amt         =$('#div_'+id).attr('data-item-gst-amt');
    var discount_type   =(item_obj=='') ? $('#div_'+id).attr('data-discount_type') :item_obj.discount_type; 
    var discount   =(item_obj=='') ? $('#div_'+id).attr('data-discount') : item_obj.discount; 

    var item_cost     =(item_obj=='') ? $('#div_'+id).attr('data-item-cost') : item_obj.purchase_price;  
    var sales_price     =(item_obj=='') ? $('#div_'+id).attr('data-item-sales-price') : item_obj.sales_price ; 
    var sales_price_temp=sales_price;
        sales_price     =(parseFloat(sales_price)).toFixed(2);

    if(stock>0){
      if(stock>1){
        qty = 1;
      }
      else{
        qty = stock;
      }
    }
    else{
      zero_stock();return;
    }
    var quantity        ='<div class="input-group input-group-sm"><span class="input-group-btn"><button onclick="decrement_qty('+item_id+','+rowcount+')" type="button" class="btn btn-default btn-flat"><i class="fa fa-minus text-danger"></i></button></span>';
        quantity       +='<input type="text" value="'+qty+'" class="form-control no-padding text-center min_width" onchange="item_qty_input('+item_id+','+rowcount+')" id="item_qty_'+item_id+'" name="item_qty_'+item_id+'">';
        quantity       +='<span class="input-group-btn"><button onclick="increment_qty('+item_id+','+rowcount+')" type="button" class="btn btn-default btn-flat"><i class="fa fa-plus text-success"></i></button></span></div>';
    var sub_total       =(parseFloat(1)*parseFloat(sales_price)).toFixed(2);//Initial
    var remove_btn      ='<a class="fa fa-fw fa-trash-o text-red" style="cursor: pointer;font-size: 20px;" onclick="removerow('+rowcount+')" title="Delete Item?"></a>';

    var str=' <tr id="row_'+rowcount+'" data-row="0" data-item-id='+item_id+'>';/*item id*/
        str+='<td id="td_'+rowcount+'_0"><a data-toggle="tooltip" title="Click to Change Tax" class="pointer" id="td_data_'+rowcount+'_0" onclick="show_sales_item_modal('+rowcount+')">'+ item_name     +'</a> <i onclick="show_sales_item_modal('+rowcount+')" class="fa fa-edit pointer"></i></td>';/* td_0_0 item name*/ 
        str+='<td id="td_'+rowcount+'_1">'+ stock +'</td>';/* td_0_1 item available qty*/
        str+='<td id="td_'+rowcount+'_2">'+ quantity      +'</td>';/* td_0_2 item available qty*/


            info='<input id="sales_price_'+rowcount+'" onblur="set_to_original('+rowcount+','+item_cost+')" onkeyup="update_price('+rowcount+','+item_cost+')" name="sales_price_'+rowcount+'" type="text" class="form-control no-padding min_width" value="'+sales_price+'">';
        str+='<td id="td_'+rowcount+'_3" class="text-right">'+ info   +'</td>';/* td_0_3 item sales price*/

        /*Discount*/
         info='<input data-toggle="tooltip" title="Click to Change" onclick="show_sales_item_modal('+rowcount+')" id="item_discount_'+rowcount+'" readonly name="item_discount_'+rowcount+'" type="text" class="form-control no-padding min_width pointer" value="0">';
         
        str+='<td id="td_'+rowcount+'_6" class="text-right">'+ info   +'</td>';

        /*Tax amt*/
        str+='<td id="td_'+rowcount+'_11" class="<?=tax_disable_class()?>"><input data-toggle="tooltip" title="Click to Change" id="td_data_'+rowcount+'_11" onclick="show_sales_item_modal('+rowcount+')" name="td_data_'+rowcount+'_11" type="text" class="form-control no-padding pointer min_width" readonly value="'+tax_amt+'"></td>';

        str+='<td id="td_'+rowcount+'_4" class="text-right"><input data-toggle="tooltip" title="Total" id="td_data_'+rowcount+'_4" name="td_data_'+rowcount+'_4" type="text" class="form-control no-padding pointer" readonly value="'+sub_total+'"></td>';/* td_0_4 item sub_total */
        str+='<td id="td_'+rowcount+'_5">'+ remove_btn    +'</td>';/* td_0_5 item gst_amt */

        str+='<input type="hidden" name="tr_item_id_'+rowcount+'" id="tr_item_id_'+rowcount+'" value="'+item_id+'">';
       // str+='<input type="hidden" id="tr_item_per_'+rowcount+'" name="tr_item_per_'+rowcount+'" value="'+gst_per+'">';
        str+='<input type="hidden" id="tr_sales_price_temp_'+rowcount+'" name="tr_sales_price_temp_'+rowcount+'" value="'+sales_price_temp+'">';
        str+='<input type="hidden" id="tr_tax_type_'+rowcount+'" name="tr_tax_type_'+rowcount+'" value="'+tax_type+'">';
        str+='<input type="hidden" id="tr_tax_id_'+rowcount+'" name="tr_tax_id_'+rowcount+'" value="'+tax_id+'">';
        str+='<input type="hidden" id="tr_tax_value_'+rowcount+'" name="tr_tax_value_'+rowcount+'" value="'+tax_value+'">';
        str+='<input type="hidden" id="description_'+rowcount+'" name="description_'+rowcount+'" value="">';
        str+='<input id="item_discount_type_'+rowcount+'" name="item_discount_type_'+rowcount+'" type="hidden" value="'+discount_type+'">';
         str+='<input id="item_discount_input_'+rowcount+'" name="item_discount_input_'+rowcount+'" type="hidden" value="'+discount+'">';
         str+='<input type="hidden" id="purchase_price_'+rowcount+'" name="purchase_price_'+rowcount+'" value="'+purchase_price+'">';

        str+='</tr>';   

    //LEFT SIDE: ADD OR APPEND TO SALES INVOICE TERMINAL
    $('#pos-form-tbody').append(str);

    //LEFT SIDE: INCREMANT ROW COUNT
    $("#hidden_rowcount").val(parseFloat($("#hidden_rowcount").val())+1);
    failed.currentTime = 0;
    failed.play();
    //CALCULATE FINAL TOTAL AND OTHER OPERATIONS
    //final_total();

    make_subtotal(item_id,rowcount);

  }

function update_price(row_id,item_cost){

  //Input
  /*var sales_price=$("#sales_price_"+row_id).val().trim();
  if(sales_price!='' || sales_price==0) {sales_price = parseFloat(sales_price); }

  //Default set from item master
  var item_price=parseFloat($("#tr_sales_price_temp_"+row_id).val().trim());

  if(sales_price<item_cost){
    //toastr["warning"]("Minimum Sales Price is "+item_cost);
    $("#sales_price_"+row_id).parent().addClass('has-error');
  }else{
    $("#sales_price_"+row_id).parent().removeClass('has-error');
  }*/

  make_subtotal($("#tr_item_id_"+row_id).val(),row_id);
}

function set_to_original(row_id,item_cost) {
  return true;
  /*Input*/
  var sales_price=$("#sales_price_"+row_id).val().trim();
  if(sales_price!='' || sales_price==0) {sales_price = parseFloat(sales_price); }

  /*Default set from item master*/
  var item_price=parseFloat($("#tr_sales_price_temp_"+row_id).val().trim());

  if(sales_price<item_cost){
    toastr["success"]("Default Price Set "+item_price);
    $("#sales_price_"+row_id).parent().removeClass('has-error');
    $("#sales_price_"+row_id).val(item_price);
  }
  make_subtotal($("#tr_item_id_"+row_id).val(),row_id);
}


//INCREMENT ITEM
function increment_qty(item_id,rowcount){
  var item_qty=$("#item_qty_"+item_id).val();
  var stock=$("#td_"+rowcount+"_1").html();

  if(parseFloat(item_qty)<parseFloat(stock)){
    new_item_qty=parseFloat(item_qty)+1;

    if(parseFloat(new_item_qty)>parseFloat(stock)){
      new_item_qty = stock;
    }

    $("#item_qty_"+item_id).val(parseFloat(new_item_qty).toFixed(2));
  }
  make_subtotal(item_id,rowcount);
}
//DECREMENT ITEM
function decrement_qty(item_id,rowcount){
  var item_qty=parseFloat($("#item_qty_"+item_id).val());
      item_qty = isNaN(item_qty) ? 0 : item_qty;
  var stock= parseFloat($("#td_"+rowcount+"_1").html());
      stock = isNaN(stock) ? 0 : stock;

  if(item_qty<1){
     $("#item_qty_"+item_id).val((item_qty).toFixed(2));
     toastr["warning"]("Minimum Stock!");
     return;
  }
  if(item_qty<=1){
    $("#item_qty_"+item_id).val((1).toFixed(2));
    toastr["warning"]("Minimum Stock!");
    return;
  }
  
  $("#item_qty_"+item_id).val((parseFloat(item_qty)-1).toFixed(2));
  make_subtotal(item_id,rowcount);
}
//LEFT SIDE: IF ITEM QTY CHANGED MANUALLY
function item_qty_input(item_id,rowcount){
  var item_qty=$("#item_qty_"+item_id).val();
  var stock=$("#td_"+rowcount+"_1").html();
  if(stock==0){
    toastr["warning"]("item Not Available in stock!");
    //return;  
  }
  if(parseFloat(item_qty)>parseFloat(stock)){
    $("#item_qty_"+item_id).val(stock);
    toastr["warning"]("Oops! You have only "+stock+" items in Stock");
   // return;
  }
  if(item_qty==0){
    $("#item_qty_"+item_id).val(1);
    toastr["warning"]("You must have atlease one Quantity");
    //return; 
  }
  /*else{
    $("#item_qty_"+item_id).val(1);
    toastr["warning"]("You must have atlease one Quantity");
    return; 
  }*/
  make_subtotal(item_id,rowcount);
}

function zero_stock(){
  toastr["error"]("Out of Stock!");
  return;
}
//LEFT SIDE: REMOVE ROW 
function removerow(id){//id=Rowid  
    $("#row_"+id).remove();
    failed.currentTime = 0;
    failed.play();
    final_total();
}

//MAKE SUBTOTAL
function make_subtotal(item_id,rowcount){
  set_tax_value(rowcount);

   //Find the Tax type and Tax amount
   var tax_type = $("#tr_tax_type_"+rowcount).val();
   var tax_amount = $("#td_data_"+rowcount+"_11").val();

  var sales_price     =$("#sales_price_"+rowcount).val();
  //var gst_per         =$("#tr_item_per_"+rowcount).val();
  var item_qty        =$("#item_qty_"+item_id).val();

  var tot_sales_price =parseFloat(item_qty)*parseFloat(sales_price);
  //var gst_amt=(tot_sales_price * gst_per)/100;

  var subtotal        =parseFloat(tot_sales_price);
  /*Discounr*/
  var discount_amt    =$("#item_discount_"+rowcount).val();

  subtotal = (tax_type=='Inclusive') ? subtotal : parseFloat(subtotal) + parseFloat(tax_amount);

  subtotal -= parseFloat(discount_amt);
  
  $("#td_data_"+rowcount+"_4").val(parseFloat(subtotal).toFixed(2));
  final_total();
}
function calulate_discount(discount_input,discount_type,total){
  if(discount_type=='in_percentage'){
    return parseFloat((total*discount_input)/100);
  }
  else{//in_fixed
    return parseFloat(discount_input);
  }
}
//LEFT SIDE: FINAL TOTAL
function final_total(){
  var total=0;
  var item_qty=0;
  var rowcount=$("#hidden_rowcount").val();
  var discount_input=$("#discount_input").val();
  var discount_type=$("#discount_type").val();
  var other_charges=parseFloat($("#other_charges").val());
      other_charges = (isNaN(other_charges)) ? parseFloat(0) :other_charges;

  if($(".items_table tr").length>1){
    for(i=0;i<rowcount;i++){
      if(document.getElementById('tr_item_id_'+i)){
       // set_tax_value(i);
      //var tax_amt = parseFloat($("#td_data_"+i+"_11").val());
      item_id=$("#tr_item_id_"+i).val();
      
      total=parseFloat(total)+ + +parseFloat($("#td_data_"+i+"_4").val()).toFixed(2);
      //console.log("==>total="+total);
      //console.log("==>tax_amt="+tax_amt);
     // total+=tax_amt;
      //console.log("==>total="+total);
      item_qty=parseFloat(item_qty)+ + +parseFloat($("#item_qty_"+item_id).val()).toFixed(2);
      }
    }//for end
  }//items_table
  
  total+=other_charges;
  total =round_off(total);
  
  var discount_amt=0;
  if(total>0){
    var discount_amt=calulate_discount(discount_input,discount_type,total);//return value 
  }


  set_total(item_qty,total,discount_amt,total-discount_amt);
}
function set_total(tot_qty=0, tot_amt=0, tot_disc=0, tot_grand=0){
  $(".tot_qty   ").html(tot_qty);
  $(".tot_amt   ").html((round_off(tot_amt).toFixed(2)));
  $(".tot_disc  ").html((round_off(tot_disc).toFixed(2)));
  $(".tot_grand ").html((round_off(tot_grand)).toFixed(2));
}

//LEFT SIDE: FINAL TOTAL
function adjust_payments(){
  var total=0;
  var item_qty=0;
  var rowcount=$("#hidden_rowcount").val();
  var discount_input=$("#discount_input").val();
  var discount_type=$("#discount_type").val();
  var other_charges=parseFloat($("#other_charges").val());
      other_charges = (isNaN(other_charges)) ? parseFloat(0) :other_charges;

  if($(".items_table tr").length>1){
    for(i=0;i<rowcount;i++){
      if(document.getElementById('tr_item_id_'+i)){
      total=parseFloat(total)+ + +parseFloat($("#td_data_"+i+"_4").val()).toFixed(2);
      item_id=$("#tr_item_id_"+i).val();
      item_qty=parseFloat(item_qty)+ + +parseFloat($("#item_qty_"+item_id).val()).toFixed(2);
      }
    }//for end
  }//items_table
  total +=other_charges;
  total =round_off(total);
  //Find customers payment

  var payments_row =get_id_value("payment_row_count");
  console.log("payments_row="+payments_row);
  var paid_amount =parseFloat(0);
  for (var i = 1; i <=payments_row; i++) {
    if(document.getElementById("amount_"+i)){
      var amount = parseFloat(get_id_value("amount_"+i));
          amount = isNaN(amount) ? 0 : amount;
          console.log("amount_"+i+"="+amount);
      paid_amount += amount;
    }
  }
  
  //RIGHT SIDE DIV
  var discount_amt=calulate_discount(discount_input,discount_type,total);//return value


  var change_return = 0;
  var balance = total-discount_amt-paid_amount;
  if(balance < 0){
    //console.log("Negative");
    change_return = Math.abs(parseFloat(balance));
    balance = 0;
  }
  
  balance =round_off(balance);
  $(".sales_div_tot_qty  ").html(item_qty);
  $(".sales_div_tot_amt  ").html((round_off(total)).toFixed(2));
  $(".sales_div_tot_discount ").html((parseFloat(round_off(discount_amt))).toFixed(2)); 
  $(".sales_div_tot_payble ").html((parseFloat(round_off(total-discount_amt))).toFixed(2)); 
  $(".sales_div_tot_paid ").html((round_off(paid_amount)).toFixed(2));
  $(".sales_div_tot_balance ").html((parseFloat(round_off(balance))).toFixed(2)); 
  
  /**/
  $(".sales_div_change_return ").html((change_return).toFixed(2)); 
  
}

function check_same_item(item_id){

  if($(".items_table tr").length>1){
    var rowcount=$("#hidden_rowcount").val();
    for(i=0;i<=rowcount;i++){
            if($("#tr_item_id_"+i).val()==item_id){
              increment_qty(item_id,i);
              failed.currentTime = 0;
              failed.play();
              return false;
            }
      }//end for
  }
  return true;
}

$(document).ready(function(){
  //FIRST TIME: LOAD
  //get_details();
  //alert($("section").height());//600+
  //alert($(".items_table").height());//29.76
  //alert($(".content-wrapper").height());//629
  get_details();

  var first_div= parseFloat($(".content-wrapper").height());
  var second_div= parseFloat($("section").height());
  var items_table= parseFloat($(".items_table").height());
  $(".items_table").parent().css("height",(first_div-second_div)+items_table+250);/**/
  $(".search_div").parent().css("height",((second_div-items_table)>500) ? 500 : (second_div-items_table) );/**/


  //FIRST TIME: SET TOTAL ZERO
  set_total();

  //RIGHT DIV: FILTER INPUT BOX
  $("#search_it").on("keyup",function(){
    search_it();
  });

 //CATEGORY WISE ITEM FETCH FROM SERVER
  var show_only_searched=true;
  $("#category_id,#brand_id").on("change",function () {
      get_details(null,show_only_searched);
  });

  $("#item_name").on("keyup",function () {
      get_details(null,show_only_searched);
  });

  //DISCOUNT UPDATE
  $(".discount_update").on("click",function () {
      final_total();
      $('#discount-modal').modal('toggle');    
  });



  //RIGHT SIDE: CLEAR SEARCH BOX
 /* $(".show_all").on("click",function(){
    $("#search_it").val('').trigger("keyup");
    $("#category_id").val('').trigger("change");
  });*/

  //Reset Category & brand
  $(".reset_categories").on("click",function(){
      $("#category_id").val('').trigger("change");
  });
  $(".reset_brands").on("click",function(){
      $("#brand_id").val('').trigger("change");
  });
  $(".reset_item_name").on("click",function(){
      $("#item_name").val('');
      $("#brand_id").val('').trigger("change");
  });


  //UPDATE PROCESS START
 <?php if(isset($sales_id) && !empty($sales_id)){ ?>

    $(".box").append('<div class="overlay"><i class="fa fa-refresh fa-spin"></i></div>');
    $.get("<?php echo $base_url ?>pos/fetch_sales/<?php echo $sales_id ?>",{},function(result){
     // console.log(result);
      result=result.split("<<<###>>>");
      $('#pos-form-tbody').append(result[0]);
      $('#discount_input').val(result[1]);
      $('#discount_type').val(result[2]);
      //$('#customer_id').val(result[3]).select2();
      $('#temp_customer_id').val(result[3]);
      $('#other_charges').val(result[4]);
      $('#sales_date').val(result[5]);
      $("#hidden_rowcount").val(parseFloat($(".items_table tr").length)-1);
      
      $(".overlay").remove();
      //$("#customer_id").trigger("change");
      if(result[5]==1){
        $( "#binvoice" ).prop( "checked", true );
        $('#binvoice').parent('div').addClass('checked');
      }

      final_total();
      adjust_payments();

    });
      //DISABLE THE HOLD BUTTON
      $("#hold_invoice,#show_cash_modal").attr('disabled',true).removeAttr('id');

 <?php } ?>
  //UPDATE PROCESS END

 // hold_invoice_list();
});//ready() end


function get_item_details(item_id){

  $(".box").append('<div class="overlay"><i class="fa fa-refresh fa-spin"></i></div>');
  $.post("<?php echo $base_url; ?>pos/get_item_details",{item_id:item_id},function(result){
    //console.log(result);
    var item = jQuery.parseJSON(result);

    var obj = {};
    obj['item_id']        = item['id'];
    obj['item_name']      = item['item_name'];
    obj['stock']          = item['stock'];
    obj['sales_price']    = item['sales_price'];
    obj['purchase_price'] = item['purchase_price'];
    obj['tax_id']         = item['tax_id'];
    obj['tax_type']       = item['tax_type'];
    obj['tax']            = item['tax'];
    obj['tax_name']       = item['tax_name'];
    obj['item_tax_amt']   = item['item_tax_amt'];
    obj['discount_type']  = item['discount_type'];
    obj['discount']       = item['discount'];
    addrow(null,obj);
    $(".overlay").remove();
  });

}

$('#item_search').keypress(function (e) {
 var key = e.which;
 // the enter key code
 if(key == 13){
    $("#item_search").autocomplete('search');
  }
});  

$("#item_search").bind("paste", function(e){
    $("#item_search").autocomplete('search');
} );

$("#item_search").autocomplete({

    source: function(data, cb){
        $.ajax({
          autoFocus:true,
            url: $("#base_url").val()+'items/get_json_items_details',
            method: 'GET',
            dataType: 'json',

            showHintOnFocus: true,
            autoSelect: true, 
            selectInitial :true,
      
            data: {
                name: data.term,
                /*warehouse_id:$("#warehouse_id").val().trim(),*/
            },
            success: function(res){
              //console.log(res);
                var result;
                result = [
                    {
                        //label: 'No Records Found '+data.term,
                        label: 'No Records Found ',
                        value: ''
                    }
                ];

                if (res.length) {
                  
                    result = $.map(res, function(el){
                        return {
                            label: el.item_code +'--[Qty:'+el.stock+'] --'+ el.label,
                            value: '',
                            id: el.id,
                            item_name: el.value,
                            stock: el.stock,
                           // mobile: el.mobile,
                            //customer_dob: el.customer_dob,
                            //address: el.address,

                        };

                    });
                }
                cb(result);
            }
        });
    },

        response:function(e,ui){
          if(ui.content.length==1){
            $(this).data('ui-autocomplete')._trigger('select', 'autocompleteselect', ui);
            $(this).autocomplete("close");
          }
          //console.log(ui.content[0].id);
        },
        //loader start
        search: function (e, ui) {
          
        },
        select: function (e, ui) { 
         // console.log('inside select');
            //$("#mobile").val(ui.item.mobile)
            //$("#item_search").val(ui.item.value);
            //$("#customer_dob").val(ui.item.customer_dob)
            //$("#address").val(ui.item.address)

            //console.log("stock="+$(this).val()); //Input box value

            if(typeof ui.content!='undefined'){
              //console.log("Autoselected first");
              if(isNaN(ui.content[0].id)){
                return;
              }
              var stock=ui.content[0].stock;
              var item_id=ui.content[0].id;

            }
            else{
              //console.log("manual Selected");
              var stock=ui.item.stock;
              var item_id=ui.item.id;
            }
            
            if(parseFloat(stock)==0){
              toastr["error"]("Out of Stock!");
              $("#item_search").val('');
              return;
            }
            //addrow(item_id);
            get_item_details(item_id);
            $("#item_search").val('');
            
            
        },   
        //loader end
});


//DATEPICKER INITIALIZATION
$('#order_date,#delivery_date,#cheque_date').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy',
      todayHighlight: true
    });
    $('#customer_dob,#birthday_person_dob').datepicker({
      calendarWeeks: true,
      todayHighlight: true,
      autoclose: true,
      format: 'dd-mm-yyyy',
      startView: 2
    });
    
    //Datemask dd-mm-yyyy
    //$("#customer_dob,#birthday_person_dob").inputmask("dd-mm-yyyy", {"placeholder": "dd-mm-yyyy"});

    //Timepicker
    /*$('.timepicker').timepicker({
      showInputs: false,
    });*/

    //Sale Items Modal Operations Start
    function show_sales_item_modal(row_id){
      $('#sales_item').modal('toggle');
      //$("#popup_tax_id").select2();

      //Find the item details
      var item_name = $("#td_data_"+row_id+"_0").html();
      var tax_type = $("#tr_tax_type_"+row_id).val();
      var tax_id = $("#tr_tax_id_"+row_id).val();
      var description = $("#description_"+row_id).val();

      /*Discount*/
      var item_discount_input = $("#item_discount_input_"+row_id).val();
      var item_discount_type = $("#item_discount_type_"+row_id).val();

      //Set to Popup
      $("#item_discount_input").val(item_discount_input);
      $("#item_discount_type").val(item_discount_type).select2();

      $("#popup_item_name").html(item_name);
      $("#popup_tax_type").val(tax_type).select2();
      $("#popup_tax_id").val(tax_id).select2();
      $("#popup_row_id").val(row_id);
      $("#popup_description").val(description);
    }

    function set_info(){
      var row_id = $("#popup_row_id").val();
      var tax_type = $("#popup_tax_type").val();
      var tax_id = $("#popup_tax_id").val();
      var description = $("#popup_description").val();
      var tax_name = ($('option:selected', "#popup_tax_id").attr('data-tax-value'));
      var tax = parseFloat($('option:selected', "#popup_tax_id").attr('data-tax'));

      /*Discounr*/
      var item_discount_input = $("#item_discount_input").val();
      var item_discount_type = $("#item_discount_type").val();

      //Set it into row 
      $("#item_discount_input_"+row_id).val(item_discount_input);
      $("#item_discount_type_"+row_id).val(item_discount_type);

      $("#tr_tax_type_"+row_id).val(tax_type);
      $("#tr_tax_id_"+row_id).val(tax_id);
      $("#description_"+row_id).val(description);
      $("#tr_tax_value_"+row_id).val(tax);//%
      //$("#td_data_"+row_id+"_12").html(tax_type+" "+tax_name);
      
      var item_id=$("#tr_item_id_"+row_id).val();
      make_subtotal(item_id,row_id);
      //calculate_tax(row_id);
      $('#sales_item').modal('toggle');
    }
    function set_tax_value(row_id){
      //get the sales price of the item
      var tax_type = $("#tr_tax_type_"+row_id).val();
      var tax = $("#tr_tax_value_"+row_id).val(); //%
      var item_id=$("#tr_item_id_"+row_id).val();
      var qty=($("#item_qty_"+item_id).val());
          qty = (isNaN(qty)) ? 0 :qty;

      var sales_price = parseFloat($("#sales_price_"+row_id).val());
          sales_price = (isNaN(sales_price)) ? 0 :sales_price;
          sales_price = sales_price * qty;

      /*Discount*/
      var item_discount_type = $("#item_discount_type_"+row_id).val();
      var item_discount_input = parseFloat($("#item_discount_input_"+row_id).val());
          item_discount_input = (isNaN(item_discount_input)) ? 0 :item_discount_input;
      
      //Calculate discount      
      var discount_amt=(item_discount_type=='Percentage') ? ((sales_price) * item_discount_input)/100 : (item_discount_input*qty);
     
      sales_price-=parseFloat(discount_amt);

      var tax_amount = (tax_type=='Inclusive') ? calculate_inclusive(sales_price,tax) : calculate_exclusive(sales_price,tax);
      
      $("#item_discount_"+row_id).val(discount_amt);
      $("#td_data_"+row_id+"_11").val(tax_amount);
    }
    //Sale Items Modal Operations End


</script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script type="text/javascript">
 

  shortcut.add("Ctrl+Shift+m",function(e) {
        e.preventDefault();
        $(".show_payments_modal").trigger('click');
    },{
        'type':'keydown',
        'propagate':true,
        'target':document
      });

  shortcut.add("Ctrl+Shift+h",function(e) {
        e.preventDefault();
        $("#hold_invoice").trigger('click');
    },{
        'type':'keydown',
        'propagate':true,
        'target':document
      });
  shortcut.add("Ctrl+Shift+c",function(e) {
        e.preventDefault();
        $(".shift_c").trigger('click');
    },{
        'type':'keydown',
        'propagate':true,
        'target':document
      });
  shortcut.add("Ctrl+Shift+a",function(e) {
        e.preventDefault();
        $(".shift_a").trigger('click');
    },{
        'type':'keydown',
        'propagate':true,
        'target':document
      });

  shortcut.add("Ctrl+Shift+s",function(e) {
        e.preventDefault();
        $("#item_search").focus();
    },{
        'type':'keydown',
        'propagate':true,
        'target':document
      });

</script>
<script>

//Reset Tooltip
function reset_tooltip() {
  $('[data-toggle="tooltip"]').tooltip("destroy");
  $('[data-toggle="tooltip"]').tooltip(); // re-enabling 
}
$('.search_div').on('scroll', function() {
    if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
        load_next_details();      
    }
});

function load_next_details(){
  var last_id = $(".item_box:last").attr("data-item-id");
  get_details(last_id);
}



function get_details(last_id='',show_only_searched=false){
  $.ajax({
      url: '<?php echo $base_url; ?>pos/get_details',
      type: "post",
      data:{
        last_id       : (!show_only_searched) ? last_id : '',
        id            : $("#category_id").val(),
        item_name  : $("#item_name").val(),
        brand_id  : $("#brand_id").val(),
      },
      beforeSend: function(){
          $('.ajax-load').show();
      }
  }).done(function(data){
      $('.ajax-load').hide();
      
      if(data=='') {
        $(".error_div").show();
      }
      else{
        $(".error_div").hide();
      }


      if(show_only_searched){
        $(".search_div").html('');
      }
      $(".search_div").append(data);
      reset_tooltip();
  }).fail(function(jqXHR, ajaxOptions, thrownError){
      alert('server not responding...');
  });
}
</script> 
</body>
</html>
