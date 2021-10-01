<?php 
include 'admin/Participants/bddparticipants.php';



$sql="SELECT COUNT(*) FROM participants WHERE date = '2021-08-18' ";
$stat2=$bdd2->prepare($sql);
$stat2->execute();
$part = $stat2->fetchAll(PDO::FETCH_ASSOC);
//var_dump($part);
$imp=implode($part[0]);
//echo $imp ;

$sql="SELECT * FROM participants";
$stat=$bdd2->prepare($sql);
$stat->execute();

$participants=$stat->fetchAll(PDO::FETCH_ASSOC);
//var_dump($participants);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>


    <title>Stat</title>
</head>
<body>
    <h1 class="text-center">Statistiques du concour</h1>

    <div class="aligne">
        <canvas id="graph"></canvas>
        <script> 
  
    const labels = [
 
];
const data = {
    labels: labels,
        datasets: [{
        label: 'Nombre de participants',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [
            {x:"18-08-2021" , y:10},
            {x:"19-08-2021" , y:20},
            {x:"20-08-2021" , y:30},
            {x:"21-08-2021" , y:40},
            {x:"22-08-2021" , y:50},
            {x:"23-08-2021" , y:60},
            {x:"24-08-2021" , y:70},
        ]
        }]
  };

const config = {
    type: 'line',
    data,
    options: {
        scales: {
            x:{
                type: 'time',
                time: {
                    displayFormats: {
                        quarter: 'MMM '
                    }
                }
            },
            y:{
                beginAtZero: true
            }

        }
    }
};

const graph= new Chart(
    document.getElementById("graph"),
    config,
 );


</script>
    </div>
  

   
</body>
</html>