
<?php foreach($data['veh1'] as $veh1)  ?>
<style>
@import url('https://fonts.googleapis.com/css?family=Oswald');
*
{
  margin: 0;
  padding: 0;
  border: 0;
  box-sizing: border-box
}

body
{
  background-color: #dadde6;
  font-family: arial
}



.container {
    display: flex;
    width: 100%;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 100px auto;
}

h1
{
  text-transform: uppercase;
  font-weight: 900;
  border-left: 10px solid #fec500;
  padding-left: 10px;
  margin-bottom: 30px
}

.row {
    width: 58%;
    overflow: hidden;
}

.card {
   
    width: 100%;
    background-color: #fff;
    color: #989898;
    margin-bottom: 10px;
    font-family: 'Oswald', sans-serif;
    text-transform: uppercase;
    border-radius: 4px;
    position: relative;
    margin-left: 0% !important;
    margin-right: 0% !important;
}

.card + .card{margin-left: 2%}

.date
{
  display: table-cell;
  width: 51%;
  position: relative;
  text-align: center;
  border-right: 2px dashed #dadde6
}

.date:before,
.date:after
{
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  background-color: #DADDE6;
  position: absolute;
  top: -15px ;
  right: -15px;
  z-index: 1;
  border-radius: 50%
}

.date:after
{
  top: auto;
  bottom: -15px
}

.date time
{
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%)
}

.date time span{display: block}

.date time span
{
  color: #2b2b2b;
  font-weight: 600;
  font-size: 250%
}



.card-cont
{
  display: table-cell;
  width: 100%;
  font-size: 85%;
  padding: 10px 10px 30px 50px
}

.card-cont h3
{
  color: #3C3C3C;
  font-size: 130%
}



.card-cont > div
{
  display: table-row
}

.card-cont .even-date i,
.card-cont .even-info i,
.card-cont .even-date time,
.card-cont .even-info p
{
  display: table-cell
}

.card-cont .even-date i,
.card-cont .even-info i
{
  padding: 5% 5% 0 0
}

.card-cont .even-info p
{
  padding: 30px 50px 0 0
}

.card-cont .even-date time span
{
  display: block
}

.card-cont a
{
  display: block;
  text-decoration: none;
  width: 80px;
  height: 30px;
  background-color: #D8DDE0;
  color: #fff;
  text-align: center;
  line-height: 30px;
  border-radius: 2px;
  position: absolute;
  right: 10px;
  bottom: 10px
}

.row:last-child .card:first-child .card-cont a
{
  background-color: #037FDD
}

.row:last-child .card:last-child .card-cont a
{
  background-color: #F8504C
}

@media screen and (max-width: 860px)
{
  .card
  {
    display: block;
    float: none;
    width: 100%;
    margin-bottom: 10px
  }
  
  .card + .card{margin-left: 0}
  
  .card-cont .even-date,
  .card-cont .even-info
  {
    font-size: 75%
  }
}
</style>
<head>
    <title></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
</head>
<body>
    
<div id="dvContainer">
<br>
<br>
<br>
<section class="container">
<h1>You Reservation added successfully with number : <?php echo $veh1->id?></h1>
  <div class="row">
    <article class="card fl">
      <section class="date">
        <time datetime="">
          <span><?php echo date("Y-m-d") ?></span><span></span>
        </time>
      </section>
      <section class="card-cont">
        <small><?php echo $veh1->id?></small>
        <h3>Name of User : <?php echo $veh1->user_résérvé_par ?></h3>
        <div class="even-date">
         <i class="fa fa-calendar"></i>
         <time>
           <span>Car Name : <?php echo $veh1->véhicule_résérver ?></span>
           <span>Car Model : <?php echo $veh1->véhicule_résérver_model ?></span>
           <span><?php echo $veh1->date_réserve ?> to <?php echo $veh1->date_fin ?></span>
         </time>
        </div>
        <div class="even-info">
          <i class="fa fa-map-marker"></i>
          <p>
            Price : <?php echo $veh1->Price ?>
          </p>
        </div>
        <a onclick="window.print();" href="#">Get My ticket</a>
      </section>
    </article>
    <a href="<?php echo URLROOT; ?>/Menus/showVehicle" class="btn btn-primary">Go Back </a>
    </section>
   
    </div>
    
    
</body>