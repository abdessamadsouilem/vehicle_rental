<?php require APPROOT . '/views/inc/header.php'; ?>
<?php $upload= URLROOT . "/public/upload/"; ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php ?>
<style>
#create_vehicle{
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
    margin-bottom:20px
}
.card img{
   width:20rem;
   height:11rem;
}
.container-fluid{
   display: flex;
    justify-content: center;
}
</style>


<div id="create_vehicle">
<?php flash('register_success'); ?>
<?php flash1('register_not'); ?>
<h1>Our Vehicles</h1>
<br>
<h3>CHEAP RATES VEHICLE RENTAL IN MARRAKECH</h3>
<br>
</div>

<div id="show_vehicle">
<div class="container-fluid">
<div class="service">
  <?php foreach($data['vehicles'] as $vehicle) : ?>
  
<div class="card" style="width: 25rem; height: 27rem;">
  <img class="card-img-top" src="<?php echo $upload.$vehicle->image ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Name : <?php echo $vehicle->name ?></h5>
    <h5 class="card-title">Model : <?php echo $vehicle->model ?></h5>
    <p class="card-text"><?php echo $vehicle->description ?></p>
    <h6 class="card-text">Price : <?php echo $vehicle->Price ?> dh</h6>
    <a href="<?php echo URLROOT; ?> /Rents/Details?id=<?php echo $vehicle->id ?>" class="btn btn-success">Details</a>
    <a href="<?php echo URLROOT; ?> /Rents/RentVehicle?id=<?php echo $vehicle->id ?>" class="btn btn-primary">Rent Now</a>
  </div>
</div>
  <?php endforeach; ?>
</div>
</div>

</div>



<script>
 
</script>