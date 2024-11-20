<nav class="navigation navbar navbar-expand-md navbar-dark ">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarsExample04">
   <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
         <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="product.php">Product</a>
      </li>
      <?php
      if(!isset($_SESSION['id']))
      {
         ?>

      <li class="nav-item">
         <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="login.php">Login</a>
      </li>
      <?php } else { ?> 
         <li class="nav-item">
         <a class="nav-link" href="mycart.php">Mycart</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="logout.php">Logout</a>
      </li>
         <?php } ?>
   </ul>
</div>
</nav>
