<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 $query = "SELECT `region`,count(*) as `site` FROM `siteTracker` group by `region`"; 
 $result = mysqli_query($connect, $query);  
 
?>  

 



<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          
 				['region', 'site'],  
                  <?php  
         
                  while($row = mysqli_fetch_array($result))  
                  {  
                       echo "['".$row["region"]."', ".$row["site"]."],";  
                  }  
                  ?>  

	        ]);

        var options = {
          title: 'Greenfield sites distribution by region'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>

    <div id="piechart" style="width: 900px; height: 500px;"></div>
    
      </body>
</html>
