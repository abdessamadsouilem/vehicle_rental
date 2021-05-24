<?php require APPROOT . '/views/inc/header.php'; ?>

<style>
    #image{
    width: 100%;
    height: 550px;
    /* background-image:linear-gradient(
      rgba(0, 0, 0, 0.5),
      rgba(0, 0, 0, 0.5)
    ), url(../img/60a1b659bc7a2.jpg); */
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
<button type="button" class="btn btn-light">ONLINE BOOKING</button>
</div>

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
//Initializing
// var i = 0;
// var images = []; //array
// var time = 3000; // time in millie seconds

// //images

// images[0] = "url(../img/60a1b659bc7a2.jpg)";
// images[1] = "linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url(../img/60a1d4b325870.jpg)";
// images[2] = "linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url(../img/60a12dd2362f3.jpg)";
// //function

// function changeImage() {
//     var el = document.getElementById('image');
//     el.style.backgroundImage = images[i];
//     if (i < images.length - 1) {
//         i++;
//     } else {
//         i = 0;
//     }
    
// }
// function changeBackgroundSmoothly() {
//     $('#image').fadeOut(1000, changeImage); //this is new, will fade out smoothly
// }
// setInterval(changeBackgroundSmoothly,3000);
var images = ["../img/60a1b659bc7a2.jpg", "../img/60a1d4b325870.jpg", "../img/60a12dd2362f3.jpg"];
$(function () {
        var i = 0;
        $("image").css("background-image", "url(images[i])");
        setInterval(function () {
            i++;
            if (i == images.length) {
                i = 0;
            }
            $("#image").fadeOut("slow", function () {
                $(this).css("background-image", "url(images[i])");
                $(this).fadeIn("slow");
            });
        }, 5000);
    });


</script>


<?php require APPROOT . '/views/inc/footer.php'; ?>
