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
          <li><a href='index.php'>Product</a></li>
          <?php
            if(isset($_SESSION['customer'])){ 
              echo "
                <li><a href='productlist.php'>Waranty</a></li>
                <li><a href='fixordercus.php'>Fixorder</a></li>
              ";
            }
          ?>
        </ul>
      </div>
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