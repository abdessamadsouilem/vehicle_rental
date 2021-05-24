<?php require APPROOT . '/views/inc/header.php'; ?>


<style>
#create_vehicle{
    margin-top:6rem;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
#chartjs_bar{
    width:500px !important;
    height: 500px !important;
}
#chartjs_bar1{
    width:500px !important;
    height: 500px !important;
}
.chart1{
    width:50% !important;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
.chart2{
    width:50% !important;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
.all{
    width:100% !important;
    display:flex;
    justify-content:center;
    align-items:center;
}
</style>

<div id="create_vehicle">
<h1>Our Statistics</h1>
<br>
<h3>here you find how much vehicle we have in stock and how much car go for reservation</h3>
<br>
<br>
<div class="all">
<div class="chart1">
<h2 class="page-header" >vehicle disponible </h2>
 <div><h4>Our Stock</h4></div>
 <br>
 <canvas  id="chartjs_bar"></canvas> 
 <br>
 </div>
 <div class="chart2">
<h2 class="page-header" >vehicle réserver </h2>
 <div><h4>Our réservation</h4></div>
 <br>
 <canvas  id="chartjs_barRes"></canvas> 
 <br>
 </div>
 
 </div>
</div>
<?php foreach($data['Res'] as $Res) : ?>
<?php $result= $Res->model; 
    $total=$Res->Disponible;
$car = [
    'result' => $result,
    'total' => $total
];
$nameCar[]= $car['result'];
$disCar[]= $car['total'];

?>
<?php endforeach;?>

<?php foreach($data['Res1'] as $Res1) : ?>
<?php  $result1= $Res1->véhicule_résérver_model; 
$total1=$Res1->number_of_véhicule;
$car1 = [
    'result1' => $result1,
    'total1' => $total1
];
if($car1['total1']!=null){
    $name1[]= $car1['result1'];
$dis1[]= $car1['total1'];
}else{
    $name1=0;
    $dis1=0;
}


?>
<?php endforeach;?>

 <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">

      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels:<?php echo json_encode($nameCar); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($disCar); ?>,
                        }]
                    },
                    options: {
                        legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 20,
                        }
            
                    },
                }
                });
                
        var ctx1 = document.getElementById("chartjs_barRes").getContext('2d');
                
                var myChart = new Chart(ctx1, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($name1); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($dis1); ?>,
                        }]
                    },
                    options: {
                        legend: {
                        display: false,
                        position: 'bottom',
 
                        
                    },scales: {
                    xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                
                            }
                        }],
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,
                                max: 20
                            }
                        }]
                }
 
 
                }
                });
    </script>




