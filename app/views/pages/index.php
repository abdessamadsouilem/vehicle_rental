<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="public/css/style.css">


<div class="container-fluid">
<div class="image">
<h1 id="change">Rent a Vehicle</h1>
<br>
<br>
<h1>The satisfaction of our customers </h1>
<br>
<h1>is our main goal.</h1>
<br>
<button type="button" class="btn btn-light">ONLINE BOOKING</button>
</div>

</div>
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
