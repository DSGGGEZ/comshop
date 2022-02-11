<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="#" class="navbar-brand"><b>COMPUTER SHOP </b>by DSGGGEZ</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <?php
            if(isset($_SESSION['customer'])){
              echo "
                <li><a href='index.php'>HOME</a></li>
              ";
            }
          ?>
        </ul>
      </div>
      <ul class="nav navbar-nav">
          <li <?php echo $product == 'index' ? 'class="active"' : '' ?> ><a href="productlist.php">Products <span class="sr-only">(current)</span></a></li>
          <li <?php echo $fix == 'index' ? 'class="active"' : '' ?> ><a href="fixordercus.php">Fix <span class="sr-only">(current)</span></a></li>
        </ul>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <?php
            if(isset($_SESSION['customer'])){
              $photo = (!empty($customer['photo'])) ? 'images/'.$customer['photo'] : 'images/U01.jpg';
              echo "
                <li class='user user-menu'>
                  <a href='#'>
                    <img src='images/U01.jpg' class='user-image' alt='User Image'>
                    <span class='hidden-xs'>".$customer['firstname'].' '.$customer['lastname']."</span>
                  </a>
                </li>
                <li><a href='logout.php'><i class='fa fa-sign-out'></i> LOGOUT</a></li>
              ";
            }
            else{
              echo "
                <li><a href='#login' data-toggle='modal'><i class='fa fa-sign-in'></i> LOGIN</a></li>
              ";
            }
          ?>
      </div>
      
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
    
  </nav>
</header>
<?php include 'includes/login_modal.php'; ?>
