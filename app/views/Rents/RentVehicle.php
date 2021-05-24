<?php require APPROOT . '/views/inc/header.php'; ?>
<?php foreach($data['updates'] as $update)  ?>
<?php foreach($data['user'] as $user)  ?>
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
<?php flash('register_success'); ?>
<form action="<?php echo URLROOT; ?>/Rents/CheckRent" method="POST" class="form-container" enctype="multipart/form-data">
    <h1>Rent this car "<?php echo $update->name ?>"</h1>
    <label for="véhicule_résérver"><b>Car Name :</b></label>
    <input type="text" name="véhicule_résérver" value="<?php echo $update->name ?>"   readonly>
    <label for="model"><b>Car Model :</b></label>
    <input type="text" name="model"  value="<?php echo $update->model ?>" readonly>
    <input type="text" name="Disponible" style="display:none;"  value="<?php echo $update->Disponible ?>" readonly>
    <input type="text" name="id" style="display:none;"  value="<?php echo $update->id ?>" readonly>
    <label for="Price"><b>Car Price (for one day) :</b></label>
    <input type="text" name="Price"  value="<?php echo $update->Price ?>" readonly>
    <label for="user_résérvé_par"><b>Your name :</b></label>
    <input type="text" name="user_résérvé_par"  value="<?php echo $user->name ?>" readonly>
    <label for="date_réserve"><b>Pick-up Date :</b></label>
    <input type="date" id="Day1" name="date_réserve" min="<?php
         echo date('Y-m-d');
     ?>" required>
     <label for="date_fin"><b>Drop-off Date :</b></label>
    <input type="date" name="date_fin" min="<?php
         echo date('Y-m-d');
     ?>" id="Day2" required>
     <label for="number_of_véhicule"><b>More than one :</b></label>
    <input type="number" name="number_of_véhicule" min="1" max="<?php echo $update->Disponible ?>" value="1"   required>
    <button type="submit" value="RentCar" class="btn">Rent</button>

    </form>
    </div>

    <script>

    
    </script>