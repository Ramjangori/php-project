<nav class="navbar navbar-expand-lg  bg-primary fixed-top">
  <div class="container-fluid">
    <!-- Logo with Home Link -->
    <a class="navbar-brand" href="./">
      <img src="./Public/logo1.png" width="100" height="70" alt="Logo" class="d-inline-block align-text-top">
    </a>
    
    <!-- Mobile Toggle Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Explicit Home Link -->
        <li class="nav-item">
          <a class="nav-link " href="./">Home</a>
        </li>
        
        <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if(isset($_SESSION['user']['username']) && !empty($_SESSION['user']['username'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="./Server/request.php?logout=true">Logout</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="?ask=true">Ask Questions</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="?MyQuestion=true">My Questions</a>
            </li>
        <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="?login=true">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?SignUp=true">Sign-up</a>
            </li>
        <?php } ?>
        
        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Question</a>
        </li>
      </ul>
      
      <!-- Search Form -->
      <form class="d-flex my-2 my-lg-0" action="" role="search">
        <input class="form-control me-2" name="Search_Q" type="search" placeholder="Search Question" aria-label="Search">
        <button class="btn btn-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Spacer -->
<div class="navbar-spacer" style="height: 80px;"></div>