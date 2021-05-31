<?php require APPROOT . '/views/inc/header.php'; ?>
<?php $upload= URLROOT . "/public/upload/"; ?>
<?php foreach($data['updates'] as $update)  ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<style>
#create_vehicle{
    width: 782px;
    margin-top:1rem;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
img{
   width:32rem;
   height:24rem;
}
h3{
    font-size:25px;
}
h4{
    font-size:20px;
}
p{
    font-size:18px; 
}
hr{
    width:80%;
    border-top: 1px solid black;
}
</style>



<div class="container" id="create_vehicle">
<?php flash1('register_not'); ?>
<h1>Welcome to <?php echo $update->model ?> space</h1>
<img src="<?php echo $upload.$update->image ?>" alt="" srcset="">
<h3><strong>Car name</strong> : <?php echo $update->name ?></h3>
<h3><strong>Car model</strong> : <?php echo $update->model ?></h3>
<h4><strong>Description on car</strong> : <br>

<p><?php echo $update->description ?></p>
</h4>
<h3><strong>Car Price For one day</strong> : <?php echo $update->Price?> dh</h3>
<hr>
<form action="<?php echo URLROOT; ?>/Rents/like/<?php echo $_GET['id'] ?>" method="post">
<button type="submit"><i class="fas fa-thumbs-up"> <?php echo $update->likes?></i></button>
<h4>Comments</h4>
</form>
<br>
</div>