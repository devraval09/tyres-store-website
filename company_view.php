<?php
include "connect.php";
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
                     <?php include("amenu.php");?>
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
               <div class="d-flex justify-content-center m-3 text-white">

               <h1> Company View </h1>
     <a href="company_add.php" class="btn btn-primary" style="margin-left:20px">Add New Record</a>
            </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-10 offset-md-1">
               <table style="color:white" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>Logo</th>
                        <th>Option</th>
                    </tr>
                </thead>
                    <tbody>
                     <?php

                     if (isset($_GET['com_id'])) {
                        $com_id = $_GET['com_id'];
                        $dq = "delete from company where com_id=$com_id";
                        mysqli_query($cn,$dq);
                     }


                     $q="select * from company";
                     $rs=mysqli_query($cn,$q);
                     while($row=mysqli_fetch_array($rs))
                     {
                     ?>
                        <tr>
                        <td><?php print $row['comp_name'];?></td>
                        <td><img src="<?php print $row['logo'];?>" width="100px" alt=""></td>
                        <td>
                           <a href="company_edit.php?com_id=<?php print $row['com_id']?>">Edit</a> ||
                        
                          <a href="company_view.php?com_id=<?php print $row['com_id']?>">Delete</a>
                       </td>
                       </tr>
                        <?php } ?>  
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

