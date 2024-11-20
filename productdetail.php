<?php
session_Start();
if(!isset($_SESSION['id']))
{
   header("location:login.php");
}
               include("connect.php");
               $product_id = $_GET['product_id'];
               $q = "select * from product where product_id='$product_id'";  
               $rs=mysqli_query($cn,$q);
              $row=mysqli_fetch_array($rs);
              
               
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
      <title>tire store</title>
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
   <body class="main-layout inner_posituong computer_page">
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
      <!-- laptop1 -->
      <div class="laptop1">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="laptop1_img">
                  <img src="<?php print $row['photo']?>" style="width:400px;height:400px"; class="card-img-top" alt="...">
            
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2><?php print $row['title'];?></h2>
                     <p class="card-text">&#8377; <?php print $row['price']?></p>
                  <p class="card-text"><?php print nl2br($row['detail'])?></p>
                 
                     <form action="addcart.php" method="post">
                        <input type="hidden" name="product_id" value="<?php print $product_id;?>" id="">
                        <input type="text" name="qty"  placeholder="Enter Quantity"><br>
                     <button type="submit" class="btn btn-success my-2">Add to cart</button>
                     </form>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end laptop1 -->
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

