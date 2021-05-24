<?php
$name =$_SESSION['name'];
?>

<style>
.create_vehicle{
    margin-top:6rem;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

.service{
    width: 90%;
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    align-items:center;
}
.card{
    margin-left:30px;
    margin-top:30px;
}
</style>
<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="create_vehicle">
<h1>Welcome Back <?php echo $name ?></h1>
<br>
<h3>Our Services :</h3>
</div>
<div class="service">
<div class="card" style="width: 18rem;">
  <img src="http://designingarchitecture.weebly.com/uploads/1/2/1/3/121371637/tips-to-design-the-interior-of-your-auto-showroom-to-boost-sales_orig.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Manage Vehicle</h5>
    <p class="card-text">here you can do what you want , add new vehicle, update vehicle, or delete vehicle.</p>
    <a href="<?php echo URLROOT; ?>/vehicles/vehicle" class="btn btn-primary">Manage Vehicle</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="http://netaq.ae/blog/wp-content/uploads/2017/11/UX-User-01.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Manage Users</h5>
    <p class="card-text">You want delete user or make someone admin here you can do it.</p>
    <a href="<?php echo URLROOT; ?>/vehicles/users" class="btn btn-primary">Manage Users</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://images.pexels.com/photos/97079/pexels-photo-97079.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Manage Reservation</h5>
    <p class="card-text">if the reservation end you can delete it to keep your system clean .</p>
    <a href="<?php echo URLROOT; ?>/vehicles/ReservationAdmin" class="btn btn-primary">Manage Reservation</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://images.pexels.com/photos/577210/pexels-photo-577210.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Our Statistics</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="<?php echo URLROOT; ?>/vehicles/Reservation" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>


