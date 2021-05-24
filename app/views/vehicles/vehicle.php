<?php require APPROOT . '/views/inc/header.php'; ?>
<?php $upload= URLROOT . "/public/upload/"; ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<style>
#create_vehicle{
    margin-top:6rem;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  border: 3px solid #f1f1f1;
  z-index: 9;
  margin-left: 50%;
    margin-top: 50%;
    transform: translate(-50%, 10px);
}

/* Add styles to the form container */
.form-container {
  max-width: 700px;
  padding: 5px;
  background-color: white;
 
}

/* Full-width input fields */
.form-container input{
  width: 100%;
  padding: 5px;
  margin: 1px 0 5px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input:focus{
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 5px 5px;
  border: none;
  cursor: pointer;
  width: 50%;
  margin-top: 10px;
  margin-left: 165px;
  margin-bottom:10px;
  opacity: 0.8;
}
#vehicle{
    width:100%
}
/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
  margin-top: 2px !important;
}
.image1{
  width: 250px;
  height: 168px;
}
.table-responsive-stack tr {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}

#ht{
  flex-basis:5% !important;
}
#ht1{
  flex-basis:12.5% !important;
}
#ht2{
  flex-basis:25.5% !important;
}
.table-responsive-stack td,
.table-responsive-stack th {
   display:block;
   
    
}

.table-responsive-stack .table-responsive-stack-thead {
   font-weight: bold;
}

@media screen and (max-width: 768px) {
   .table-responsive-stack tr {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
      border-bottom: 3px solid #ccc;
      display:block;
      
   }
   /*  IE9 FIX   */
   .table-responsive-stack td {
      float: left\9;
      width:100%;
   }
}
</style>
<div id="create_vehicle">
<?php flash('register_success'); ?>
<?php flash1('register_not'); ?>
<h1>This is the our stock of vehicle</h1>
<br>
<h3>here you can do what you want , add new vehicle, update vehicle, or delete vehicle</h3>
<br>
<button onclick="openForm()" type="button" class="btn btn-success"><i class="fas fa-plus"></i> Add new vehicle</button>
<br>

</div>

<div id="show_vehicle">
<div class="container">
  <table id="tableOne" class="table table-bordered table-striped table-responsive-stack">
  <thead class="thead-dark">
    <tr>
      <th id="ht" >id  </th>
      <th id="ht1" >name  </th>
      <th id="ht1" >model  </th>
      <th id="ht"  >Price  </th>
      <th id="ht2" >image  </th>
      <th id="ht2" >description  </th>
      <th id="ht" >update  </th>
      <th id="ht" >delete  </th>
    </tr>
  </thead>
  <?php foreach($data['vehicles'] as $vehicle) : ?>
  <tbody>
    <tr>
      <td id="ht"><?php echo $vehicle->id ?></td>
      <td id="ht1"><?php echo $vehicle->name ?></td>
      <td id="ht1"><?php echo $vehicle->model ?></td>
      <td id="ht" ><?php echo $vehicle->Price ?>&nbsp;&nbsp;   &nbsp;</td>
      <td id="ht2"><img class="image1" src="<?php echo $upload.$vehicle->image ?>" ></td>
      <td id="ht2"><?php echo $vehicle->description ?></td>
      <td id="ht" ><a  href="<?php echo URLROOT; ?>/vehicles/update_vehicle?id=<?php echo $vehicle->id ?>" type="button" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
      <td id="ht" ><a href="<?php echo URLROOT; ?>/vehicles/delete_vehicle?id=<?php echo $vehicle->id ?>" onclick="" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
    </tr>

  </tbody>
  <?php endforeach; ?>
</table>
</div>

</div>
<div class="form-popup" id="myForm">
  <form action="<?php echo URLROOT; ?>/vehicles/add_vehicle" method="POST" class="form-container" enctype="multipart/form-data">
    <h1>Add new vehicle</h1>

    <label for="name"><b>Name :</b></label>
    <input type="text" name="name"   required>
    <label for="model"><b>Model :</b></label>
    <input type="text" name="model"  required>
    <label for="Price"><b>Price :</b></label>
    <input type="text" name="Price"  required>
    <label for="img">Select image:</label>
    <input type="file" id="image" name="image" required/>
    <label for="description"><b>Description :</b></label>
    <input type="text" name="description"  required>
    <label for="Disponible"><b>Quantity :</b></label>
    <input type="text" name="Disponible"  required>
    <label for="catégory"><b>Catégory :</b></label>
    <input type="text" name="catégory"  list="vehicle" required>
<datalist id="vehicle">
  <option>Car</option>
  <option>Trucks</option>
  <option>Motorcycle</option>
</datalist>

    <button type="submit" value="add_vehicle" class="btn"><i class="fas fa-plus"></i> Add</button>
    <button type="submit" class="btn cancel" onclick="closeForm()"><i class="fas fa-times"></i> Close</button>
  </form>
  
</div>

  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("create_vehicle").style.display = "none";
  document.getElementById("show_vehicle").style.display = "none";
}


function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("create_vehicle").style.display = "flex";
  document.getElementById("show_vehicle").style.display = "block";
}
$(document).ready(function() {

   

$('.table-responsive-stack').each(function (i) {
   var id = $(this).attr('id');
   //alert(id);
   $(this).find("th").each(function(i) {
      $('#'+id + ' td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">'+             $(this).text() + ':</span> ');
      $('.table-responsive-stack-thead').hide();
      
   });
   

   
});
   
$( '.table-responsive-stack' ).each(function() {
  var thCount = $(this).find("th").length; 
   var rowGrow = 100 / thCount + '%';
   //console.log(rowGrow);
   $(this).find("th, td").css('flex-basis', rowGrow);   
});
   
   
   
   
function flexTable(){
   if ($(window).width() < 768) {
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").show();
      $(this).find('thead').hide();
   });
      
    
   // window is less than 768px   
   } else {
      
      
   $(".table-responsive-stack").each(function (i) {
      $(this).find(".table-responsive-stack-thead").hide();
      $(this).find('thead').show();
   });
      
      

   }
// flextable   
}      
 
flexTable();
   
window.onresize = function(event) {
    flexTable();
};
   
   
   
   

  
// document ready  
});

</script>