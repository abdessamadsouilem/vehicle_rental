<?php require APPROOT . '/views/inc/header.php'; ?>
<?php foreach($data['updates'] as $update)  ?>
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
<form action="<?php echo URLROOT; ?>/vehicles/update_vehicle1" method="POST" class="form-container" enctype="multipart/form-data">
    <h1>Update vehicle</h1>
    <label for="id"><b>id :</b></label>
    <input type="text" name="id" value="<?php echo $update->id ?>"  required>
    <label for="name"><b>Name :</b></label>
    <input type="text" name="name" value="<?php echo $update->name ?>"   required>
    <label for="model"><b>Model :</b></label>
    <input type="text" name="model"  value="<?php echo $update->model ?>" required>
    <label for="Price"><b>Price :</b></label>
    <input type="text" name="Price" value="<?php echo $update->Price ?>"  required>
    <label for="img">Select image:</label>
    <input type="file" id="image1" value="<?php echo $update->image ?>" name="image" />
    <label for="description"><b>Description :</b></label>
    <input type="text" name="description" value="<?php echo $update->description ?>"  required>
    <label for="Disponible"><b>Quantity :</b></label>
    <input type="text" name="Disponible" value="<?php echo $update->Disponible ?>"  required>
    <label for="catégory"><b>Catégory :</b></label>
    <input type="text" name="catégory" value="<?php echo $update->catégory ?>"  list="vehicle" required>
<datalist id="vehicle">
  <option>Car</option>
  <option>Trucks</option>
  <option>Motorcycle</option>
</datalist>

    <button type="submit" value="add_vehicle" class="btn"><i class="fas fa-edit"></i> Update </button>

    </form>
    </div>