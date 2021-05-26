<?php require APPROOT . '/views/inc/header.php'; ?>

<style>
.container-fluid {
  
     padding-right: 0px;
    padding-left: 0px;
  
}
a.li {
  color: inherit;
  text-decoration: inherit;
}
h1{
  text-align:center;
}
.cards{
  display:flex;
  justify-content:center;
  align-items:center;
}
.card{
  margin-left:12px;
}
    #image{
    width: 100%;
    height: 550px;
    background-image:url(<?php echo URLROOT; ?>/public/img/60a1b659bc7a2.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100% 550px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
#image h1{
    color: white;
}

.wow{
    width: 268px;
    height: 191px;
}
</style>

<div class="container-fluid">
<div id="image">
<h1 id="change">Rent a Vehicle</h1>
<br>
<br>
<h1>The satisfaction of our customers </h1>
<br>
<h1>is our main goal.</h1>
<br>
<a href="<?php echo URLROOT; ?> /Menus/showVehicle" type="button" class="btn btn-light">ONLINE BOOKING</a>
</div>
<br>
<br>
<h1>Our Catégories</h1>
<br>
<div class="cards">
<a class="li" href="#">
<div class="card" style="width: 18rem;">
  <img class="wow" src="<?php echo URLROOT; ?>/public/img/1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">All Véhicles.</p>
  </div>
</div>
</a>
<a class="li" href="#">
<div class="card" style="width: 18rem;">
  <img src="<?php echo URLROOT; ?>/public/img/depositphotos_171122936-stock-photo-new-cars.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">All Cars.</p>
  </div>
</div>
</a>
<a class="li" href="#">
<div class="card" style="width: 18rem;">
  <img src="<?php echo URLROOT; ?>/public/img/ONEMOTO_L1002967-min.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">All Moto.</p>
  </div>
</div>
</a>
<a class="li" href="#">
<div class="card" style="width: 18rem;">
  <img src="<?php echo URLROOT; ?>/public/img/1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">All Trucks.</p>
  </div>
</div>
</a>

</div>
<br>
<br>
<div id="all">

</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
var x = document.getElementById("change");
function swapText() { 
if (x.textContent == "Rent a Vehicle") { 
    x.textContent = "Quality Services";  
}else if(x.textContent == "Quality Services"){
    x.textContent = "Best Cars Rental in Morocco"; 
} else { 
    x.textContent = "Rent a Vehicle"; 
}}

const targetDiv = document.getElementById("third");
const btn = document.getElementById("toggle");
btn.onclick = function () {
  if (targetDiv.style.display !== "none") {
    targetDiv.style.display = "block";
  } else {
    targetDiv.style.display = "none";
  }
};
</script>


<?php require APPROOT . '/views/inc/footer.php'; ?>
