<?php require APPROOT . '/views/inc/header.php'; ?>
<?php $upload= URLROOT . "/public/upload/"; ?>
<?php foreach($data['updates'] as $update)  ?>
<?php foreach($data['commentNum'] as $commentNum)  ?>
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
    font-size:18px;
    margin-left:15px;
}
h4{
    font-size:15px;
    margin-left:15px;
}
p{
    font-size:12px;
    margin-left:15px; 
}
hr{
    width:80%;
    border-top: 1px solid black;
}
input{
    width: 80%;
    margin-left:15px;
  padding:10px;
  border:0;
  box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
  outline:none;
}
.comments{
    width: 80%;
    padding:10px;
    margin-left:20px;
    border:0;
  box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
  margin-bottom:10px;
}
button {
    background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;
}
</style>



<div class="container" id="create_vehicle">
<?php flash1('register_not'); ?>
<h1>Welcome to <?php echo $update->model ?> space</h1>
<br>
<div class="card">
    
    <div class="card-content">
        <img src="<?php echo $upload.$update->image ?>" style="width: 100%">
    </div>
    <h3><strong>Car Price For one day</strong> : <?php echo $update->Price?> dh</h3>
    <div class="card-content fg-gray p-2">
        <span><small>Likes: </small><?php echo $update->likes?></span>
        <span><small>Comments: </small><?php echo $commentNum->num?></span>
    </div>
    <div class="card-footer">
    <form action="<?php echo URLROOT; ?>/Rents/like/<?php echo $_GET['id'] ?>" method="post">
<button type="submit"><i class="fas fa-thumbs-up"></i></button>
</form>   
</div>
<form action="<?php echo URLROOT; ?>/Rents/comment/<?php echo $_GET['id'] ?>" method="post">
<br>
<h4>Comments : </h4>
<input type="text" name="comments" placeholder="add your comment here about your experience with our car">
<button type="submit">   <i class="fas fa-paper-plane"></i></button>
</form>
<br>
<?php foreach($data['comment'] as $comment) : ?>
<div class="comments">
<h5><?php echo $comment->comments ?></h5>
</div>
<?php  endforeach ?>
</div>
</div>