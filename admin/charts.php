<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Vehicle Title');
        data.addColumn('number', 'cars');
        data.addRows([
          ['Avanza', 3],
          ['Carrera GT', 2],
          ['CyberTruck', 1],
          ['Rebebellion 787', 1],
          ['Jaguar', 2],
         
        ]);

        // Set chart options
        var options = {'title':' Highly booked Cars in the Recent days',
                       'width':1000,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>

    <?php
    include('linechart.php');
    ?>
  </body>
</html>