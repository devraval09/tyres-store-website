<?php
include "connect.php";
session_Start();
if(!isset($_SESSION['id']))
{
   header("location:login.php");
}
               include("connect.php");
if(isset($_GET['atc_id']))
{
   $atc_id = $_GET['atc_id'];
   $qd="delete from add_to_cart where atc_id = '$atc_id'";
   mysqli_query($cn,$qd);
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>tyres shop</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_posituong contact_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo31.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <?php include("vmenu.php");?>
                      </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>My Cart View</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
               <table style="color:white" class="table table-bordered">
                <thead>
                    <tr>
                        <th>title</th>
                        <th>price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Option</th>
                        
                    </tr>
                </thead>
                <tbody>
                     <?php
                     $total = 1;
                     $gtotal = 0;
                     $user_id = $_SESSION['id'];

                     $q="select a.*,p.* from product p, add_to_cart a where a.product_id=p.product_id and a.user_id=$user_id";
                     $rs=mysqli_query($cn,$q);
                     while($row=mysqli_fetch_array($rs))
                     {
                        $total =  $row['qty'] * $row['price'];
                        $gtotal= $gtotal + $total;
                        ?>
                        <tr>
                        
                        <td><?php print $row['title'];?></td>
                        <td><?php print $row['price'];?></tb>
                        <td><?php print $row['qty'];?></tb>
                        <td><?php print  $total?></tb>
                        <td><a href="mycart.php?atc_id=<?php print $row['atc_id'];?>" class="btn btn-danger"> Delete</a> </td>

                        </tr>
                        <?php } ?>
                        <tr>
                           <td colspan="3"></td>
                           <td><?php print $gtotal;?></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td colspan="5"><a href="order.php" class="btn btn-success" align="center">Order</a> </td>
                        </tr>
                    </tbody>
                </tbody>
               </table>   
               
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <?php include("footer.php");?>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

