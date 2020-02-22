<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);
    

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Car Brand rented');
        
        data.addRows([
          ['Mike',  'Tesla'],
          ['Jim',   'Ford'  ],
          ['Alice', 'Ford' ],
          ['Bob',   'BMW',  ]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true,  width: '50%', height: '50%'});
      }
    </script>
  </head>
  <body>
  <h2> Mostly used customers</h2>

    <div id="table_div"></div>
  </body>
</html>