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
    <h5 class="card-title">Manage Reservation</h5>
    <p class="card-text">here you can do what you want , add new Reservation, update Reservation, or delete Reservation.</p>
    <a href="<?php echo URLROOT; ?>/dashboardUsers/Reservation" class="btn btn-primary">Manage Reservation</a>
  </div>
</div>
