<?php require APPROOT . '/views/inc/header.php'; ?>
<style>
    .all{
        width: 100%;
        height: auto;
        display: flex;
        font-size:15px;
        justify-content:center;
        align-items: center;
    }
    
    .icon {
      width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    }
    .icon img{
        width: 700px;
        height: 400px;
    }
    @media screen and (max-width: 858px) {
        .all{
            flex-direction:column;
        }
        .col-md-5{
          margin-left: 0px !important;
        }
        .icon img{
        margin-top:50px;
        width: 80%;
        height: 330px;
    }
        .icon {
            display: none;
        }
    }
</style>
  <div class="all">
    <div class="col-md-5 ml-5">
      <div class="card card-body  mt-3">
        <h2>Be Part Of Us</h2>
        <br>
        <form action="<?php echo URLROOT; ?>/users/register" method="post">
          <div class="form-group">
            <label for="name">Full Name: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg" value="<?php echo $data['name']; ?>">
            
          </div>
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $data['email']; ?>">
           
          </div>
          <div class="form-group">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg " value="<?php echo $data['password']; ?>">
           
          </div>
          <div class="form-group">
            <label for="phone">Your phone number: </label>
            <input type="tel" name="télé" class="form-control form-control-lg " value="<?php echo $data['télé']; ?>" >
            
          </div>
          <div class="form-group">
            <label for="city">City: </label>
            <input type="text" name="city" class="form-control form-control-lg " value="<?php echo $data['city']; ?>">
           
          </div>

          <div class="row">
            <div class="col">
              <input type="submit" value="Register" class="btn btn-success btn-block">
            </div>
            <div class="col">
              <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  
  <div class="icon">
     <img src="../img/60a12dd2362f3.jpg" alt="">
  </div>
</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>