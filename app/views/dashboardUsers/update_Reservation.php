<?php require APPROOT . '/views/inc/header.php'; ?>
<?php foreach($data['update'] as $update)  ?>
<?php foreach($data['update1'] as $update1)  ?>
<?php $upload= URLROOT . "/public/upload/"; ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<style>
.form{
    min-height: 90vh;
    display: flex;
    justify-content: center;
}
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
</style>
<div class="form">
<form action="<?php echo URLROOT; ?>/dashboardUsers/update_Reservation1" method="POST" class="form-container" enctype="multipart/form-data">
    <h1>Update vehicle</h1>
    <label for="id"><b>id :</b></label>
    <input type="text" name="id" value="<?php echo $update->id ?>"  readonly>
    <label for="véhicule_résérver"><b>Vehicle name :</b></label> <br>
    <select name="véhicule_résérver" id="véhicule_résérver">
    <option selected="selected" value="<?php echo $update->véhicule_résérver ?>"><?php echo $update->véhicule_résérver ?></option>
 <?php foreach($data['vehicles'] as $vehicle) : ?>
  <option value="<?php echo $vehicle->name ?>"><?php echo $vehicle->name ?></option>
  <?php endforeach; ?>
    </select><br><br>
    <label for="model"><b>Vehicle model :</b></label> <br>
    <select name="model" id="véhicule_résérver">
    <option selected="selected" value="<?php echo $update->véhicule_résérver_model ?>"><?php echo $update->véhicule_résérver_model ?></option>
 <?php foreach($data['vehicles'] as $vehicle) : ?>
  <option value="<?php echo $vehicle->model ?>"><?php echo $vehicle->model ?></option>
  <?php endforeach; ?>
    </select><br><br>
    
    <label for="user_résérvé_par"><b>User name  :</b></label>
    <input type="text" name="user_résérvé_par"  value="<?php echo $update->user_résérvé_par ?>" readonly>
    <label for="date_réserve"><b>Pick-up Date  :</b></label>
    <input type="date" name="date_réserve" value="<?php echo $update->date_réserve ?>" min="<?php
         echo date('Y-m-d');
     ?>"  required>
    <label for="date_fin">Drop-off Date :</label>
    <input type="date"  value="<?php echo $update->date_fin ?>" name="date_fin" min="<?php
         echo date('Y-m-d');
     ?>" />
    <label for="Price"><b>Price :</b></label>
    <input type="number" name="Price" value="<?php echo $update1->Price ?>"  readonly>
    
    <label for="number_of_véhicule"><b>Quantity :</b></label>
    <input type="number" name="number_of_véhicule" min="1" value="<?php echo $update->number_of_véhicule ?>"   required>
   

    <button type="submit" value="add_vehicle" class="btn"><i class="fas fa-edit"></i> Update </button>

    </form>
    </div>