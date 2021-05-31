<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Vehicle Rental</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/index">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/Menus/showVehicle">Offers</a>
      </li> 
    </ul>
    <ul class="navbar-nav ml-auto">
    <?php if(isset($_SESSION['loginAdmin']) ) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?> /dashboards/dashboardAdmin">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">logout</a>
            </li>
            <?php elseif(isset($_SESSION['User'])) : ?> 
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?> /dashboardUsers/dashboardUser">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">logout</a>
            </li>
            <?php else : ?>  
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
            </li>
            <?php endif; ?>
        </ul>
  </div>
</nav>