<?php
$connect= mysqli_connect("localhost", "root", "", "carrental");
$query="SELECT tblvehicles.VehiclesTitle,tblbooking.VehicleId FROM tblvehicles INNER JOIN tblbooking ON tblvehicles.id=tblbooking.VehicleId GROUP BY tblvehicles.VehiclesTitle";
$result=mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="shortcut icon" href="assets/images/logo.PNG">
        <title>
            SWARI | Charts
        </title>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">
        </script>
        <script type="text/javascript">
        google.charts.load('current',{'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart(){
            var data= google.visualization.arrayToDataTable([
                ['Cars','Brand'],
                <?php
                while ($row=mysqli_fetch_array($result)) {
                    echo "['".$row["VehiclesTitle"]."',".$row["number"]."],";
                }
                ?>
            ]);
        var options:{
            title:'Percentage of Most Rented Cars'
            }; 
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));   
        chart.draw(data,options);   
        }
    </head>
    <body>
        <br/><br/>
            <div style="width:900px;">
                <center>
                <h3>
                    PIE CHART OF MOST RENTED CARS.
                </h3>
                </center>
                <br/>
                <div id="piechart" style="width: 900px; height:500px;"></div>
            </div>
    </body>
</html>

