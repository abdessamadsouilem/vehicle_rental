<?php require APPROOT . '/views/inc/header.php'; ?>
<style>
#create_vehicle{
    margin-top:6rem;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
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
<h1>Our Reservation</h1>
<br>
<h3>if the reservation end you can delete it to keep your system clean</h3>
<br>
</div>

<div id="show_vehicle">
<div class="container">
  <table id="tableOne" class="table table-bordered table-striped table-responsive-stack">
  <thead class="thead-dark">
    <tr>
      <th  >id  </th>
      <th  >Vehicle name   </th>
      <th  >Vehicle model   </th>
      <th >User name  </th>
      <th >Pick-up Date   </th>
      <th >Drop-off Date   </th>
      <th >Price   </th>
      <th  >quantity  </th>
      <th  >Reservation end  </th>
      <th  >delete  </th>
    </tr>
  </thead>
  <?php foreach($data['Res'] as $Res) : ?>
  <tbody>
    <tr>
      <td ><?php echo $Res->id ?></td>
      <td ><?php echo $Res->véhicule_résérver ?></td>
      <td ><?php echo $Res->véhicule_résérver_model ?></td>
      <td ><?php echo $Res->user_résérvé_par ?></td>
      <td  ><?php echo $Res->date_réserve ?>&nbsp;&nbsp;   &nbsp;</td>
      <td ><?php echo $Res->date_fin ?></td>
      <td ><?php echo $Res->Price ?></td>
      <td ><?php echo $Res->number_of_véhicule ?></td>
      <td  ><a  href="<?php echo URLROOT; ?>/dashboardUsers/update_Reservation?id=<?php echo $Res->id ?>" type="button" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
      <td  ><a href="<?php echo URLROOT; ?>/dashboardUsers/delete_Reservation?id=<?php echo $Res->id ?>" onclick="" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
    </tr>

  </tbody>
  <?php endforeach; ?>
</table>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

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