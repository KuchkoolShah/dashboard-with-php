
<?php 

    session_start();
    include("include/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admins where admin_email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];
        
        $admin_email = $row_admin['admin_email'];
        
        $admin_image = $row_admin['admin_image'];
        
        $admin_country = $row_admin['admin_country'];
        
        $admin_about = $row_admin['admin_about'];
        
        $admin_img= $row_admin['admin_image'];
        
        $admin_contact = $row_admin['admin_contact'];
        
        $admin_job = $row_admin['admin_job'];
        
        $get_products = "select * from products";
        
        $run_products = mysqli_query($con,$get_products);
        
        $count_products = mysqli_num_rows($run_products);
        
        $get_customers = "select * from customers";
        
        $run_customers = mysqli_query($con,$get_customers);
        
        $count_customers = mysqli_num_rows($run_customers);
        
        $get_p_categories = "select * from product_categories";
        
        $run_p_categories = mysqli_query($con,$get_p_categories);
        
        $count_p_categories = mysqli_num_rows($run_p_categories);
        
        $get_pending_orders = "select * from pending_orders";
        
        $run_pending_orders = mysqli_query($con,$get_pending_orders);
        
        $count_pending_orders = mysqli_num_rows($run_pending_orders);

?>
<!DOCTYPE html>
<html>
<head> 
<?php 
include ('include/head.php');
?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php 
include ('include/header.php');
?>
  
  <!-- Left side column. contains the logo and sidebar -->
  <?php 
include ('include/sidebar.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

     <?php
                                                            if(isset($_GET['dashboard'])){
                                                                include ('include/dashboard.php');
                                                            }
                                                            if(isset($_GET['product-insert'])){
                                                                include ('admin-pages/product-insert.php');
                                                            }
                                                             if(isset($_GET['product-view'])){
                                                                include ('admin-pages/product-view.php');
                                                            }
                                                            if(isset($_GET['delete_product'])){
                                                                include ('admin-pages/delete_product.php');
                                                            }
                                                            if(isset($_GET['edit_product'])){
                                                                include ('admin-pages/edit_product.php');
                                                            }
                                                            if(isset($_GET['insert_cat'])){
                                                                include ('admin-pages/insert_cat.php');
                                                            }
                                                            if(isset($_GET['view_cats'])){
                                                                include ('admin-pages/view_cats.php');
                                                            }
                                                             if(isset($_GET['delete_cat'])){
                                                                include ('admin-pages/delete_cat.php');
                                                            }
                                                            if(isset($_GET['edit_cat'])){
                                                                include ('admin-pages/edit_cat.php');
                                                            }
                                                            if(isset($_GET['insert_p_cat'])){
                                                                include ('admin-pages/insert_p_cat.php');
                                                            }
                                                            if(isset($_GET['view_p_cats'])){
                                                                include ('admin-pages/view_p_cats.php');
                                                            }
                                                            if(isset($_GET['delete_p_cat'])){
                                                                include ('admin-pages/delete_p_cat.php');
                                                            }
                                                            if(isset($_GET['edit_p_cat'])){
                                                                include ('admin-pages/edit_p_cat.php');
                                                            }
                                                            if(isset($_GET['insert_slide'])){
                                                                include ('admin-pages/insert_slide.php');
                                                            }
                                                             if(isset($_GET['view_slides'])){
                                                                include ('admin-pages/view_slides.php');
                                                            }
                                                            if(isset($_GET['delete_slide'])){
                                                                include ('admin-pages/delete_slide.php');
                                                            }
                                                            if(isset($_GET['view_customers'])){
                                                                include ('admin-pages/view_customers.php');
                                                            }
                                                             if(isset($_GET['delete_customer'])){
                                                                include ('admin-pages/delete_customer.php');
                                                            }
                                                            if(isset($_GET['view_orders'])){
                                                                include ('admin-pages/view_orders.php');
                                                            }
                                                            if(isset($_GET['delete_order'])){
                                                                include ('admin-pages/delete_order.php');
                                                            }
                                                            if(isset($_GET['insert_user'])){
                                                                include ('admin-pages/insert_user.php');
                                                            }
                                                             if(isset($_GET['view_users'])){
                                                                include ('admin-pages/view_users.php');
                                                            }
                                                             if(isset($_GET['user_profile'])){
                                                                include ('admin-pages/user_profile.php');
                                                            }
                                                             if(isset($_GET['insert_box'])){
                                                                include ('admin-pages/insert_box.php');
                                                            }
                                                            if(isset($_GET['view_boxes'])){
                                                                include ('admin-pages/view_boxes.php');
                                                            }
                                                            if(isset($_GET['delete_box'])){
                                                                include ('admin-pages/delete_box.php');
                                                            }
                                                            if(isset($_GET['edit_box'])){
                                                                include ('admin-pages/edit_box.php');
                                                            }

                                                            
                                                           
                                                            
                                                          
                                                           



 ?>
  </div>
  <!-- /.content-wrapper -->
 <?php 
include ('include/footer.php');
?>


  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


</body>
</html>

<?php } ?>