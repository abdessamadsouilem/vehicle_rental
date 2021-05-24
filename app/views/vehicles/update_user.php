<?php require APPROOT . '/views/inc/header.php'; ?>
<?php foreach($data['user1'] as $user1)  ?>
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
<form action="<?php echo URLROOT; ?>/vehicles/update_user1" method="POST" class="form-container" enctype="multipart/form-data">
    <h1>Update User</h1>
    <label for="id"><b>name :</b></label>
    <input type="text" name="name" value="<?php echo $user1->name ?>"  readonly>
    <label for="name"><b>email :</b></label>
    <input type="text" name="email" value="<?php echo $user1->email ?>"   readonly>
    <label for="is_An_admin"><b>Role :</b></label>
    <br>
    <select name="is_An_admin" id="is_An_admin">
    <option selected="selected" value="<?php echo $user1->is_An_admin ?>"><?php echo $user1->is_An_admin ?></option>
    <?php foreach($data['users'] as $users) : ?>
  <option value="<?php echo $users->is_An_admin ?>"><?php echo $users->is_An_admin ?></option>
  <?php endforeach; ?>
    </select><br><br>
    <button type="submit" value="update_user1" class="btn"><i class="fas fa-edit"></i> Update </button>

    </form>
    </div>