
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('index.php'); ?>">
    	<img class="w-25"  src="assets/images/dak.jpg" alt="Logo Image">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
    	<!-- ms means it should shift to the right rnd. me means it should shift to the left end -->
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        

        <?php if(isset($_SESSION["authenticated"])) { ?>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION["auth_user"]["fname"]." ".$_SESSION["auth_user"]["lname"] ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navvbarDropdown">
            <li><a class="dropdown-item" href="myprofile.php">My Profile</a></li>
            <li>
              <form action="" method="POST">
                <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
          
        </li>
        <?php

          } else {
            ?>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login.php'); ?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('register.php'); ?>">Register</a>
          </li>


            <?php
          }

        ?>
      </ul>
 
    </div>
  </div>
</nav>