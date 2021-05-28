<?php require APPROOT . '/views/inc/header.php'; ?>
<?php $upload= URLROOT . "/public/upload/"; ?>
<style>
.carousel-inner {

    height: 666px;
}
.carousel-caption {
    top: 226px;
}
@media only screen and (max-width: 7870px) {
  .w-100 {
    width: 100%!important;
    height: 700px;
}
.d-none {
    display: block !important;
}
}

</style>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo URLROOT; ?>/public/img/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Rent a Vehicle</h1>
        <br>
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, facilis.</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo URLROOT; ?>/public/img/4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Quality Services</h1>
        <br>
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, facilis.</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo URLROOT; ?>/public/img/5.jpg " class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Best Cars Rental in Morocco</h1>
        <br>
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, facilis.</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
setInterval(swapText, 3000);

</script>


<?php require APPROOT . '/views/inc/footer.php'; ?>
