<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
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
<h1>This is our users</h1>
<br>
<h3>You want delete user or make someone admin here you can do it </h3>
<br>
</div>

<div class="container">
  <table id="tableOne" class="table table-bordered table-striped table-responsive-stack">
  <thead class="thead-dark">
    <tr>
      <th >name </th>
      <th >email </th>
      <th >Role  </th>
      <th >update </th>
      <th >delete </th>
    </tr>
  </thead>
  <?php foreach($data['users'] as $users) : ?>
  <tbody>
    <tr>
      <td ><?php echo $users->name ?></td>
      <td><?php echo $users->email ?></td>
      <td><?php echo $users->is_An_admin ?></td>
      <td><a  href="<?php echo URLROOT; ?>/vehicles/update_user?id=<?php echo $users->id ?>" type="button" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
      <td  ><a href="<?php echo URLROOT; ?>/vehicles/delete_user?id=<?php echo $users->id ?>" onclick="" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
    </tr>

  </tbody>
  <?php endforeach; ?>
</table>
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