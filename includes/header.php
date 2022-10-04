<header class="navbar navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="pictures/FSA_weiß.png" alt="" height="40">
        </a>
    
        <ul class="nav col-9 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 <?php if($title == "Feed Southern Africa"){echo "text-secondary";} else{echo "text-white";} ?>">Home</a></li>
          <li><a href="about.php" class="nav-link px-2 <?php if($title == "About us"){echo "text-secondary";} else{echo "text-white";} ?>">About us</a></li>
          <li><a href="program.php" class="nav-link px-2 <?php if($title == "Program"){echo "text-secondary";} else{echo "text-white";} ?>">Program</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Association</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Gallery</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>

        </ul>
        <div class="text-end">
          <a role="button" class="btn btn-outline-light mr-sm-2" href="login.php">Donate</a>
          <a role="button" class="btn btn-warning my-2 my-sm-0" href="signup.php">Join us</a>
        </div>
      </div>
    </div>
  </header>