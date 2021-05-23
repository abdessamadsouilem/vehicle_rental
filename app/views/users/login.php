<?php require APPROOT . '/views/inc/header.php'; ?>

<style>
    .all{
        width: 100%;
        min-height:90vh;
        display: flex;
        font-size:15px;
        justify-content:center;
        align-items: center;
    }
    .icon {
    width: 100%;
    display: flex;
    justify-content: center;
    
    }
    .icon img{
        margin-top:50px;
        width: 80%;
        height: 330px;
    }
    @media screen and (max-width: 858px) {
        .all{
            flex-direction:column;
        }
        .icon {
            display: none;
        }
    }
</style>
<div class="all">
  
  <div class="col-md-6">
      <div class="card card-body bg-light mt-5">
        <?php flash('register_success'); ?>
        <?php flash1('register_not'); ?>
        <h2>Login</h2>
        <p>Please fill in your credentials to log in</p>
        <form action="<?php echo URLROOT; ?>/users/login" method="post">
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg" value="<?php  $data['email']; ?>">
            
          </div>
          <div class="form-group">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg " value="<?php  $data['password']; ?>">
            
          </div>
          <div class="row">
            <div class="col">
              <input type="submit" value="Login" class="btn btn-success btn-block">
            </div>
            <div class="col">
              <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">No account? Register</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  
  <div class="icon">
     <img src="../img/60a1d4b325870.jpg" alt="">
  </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>