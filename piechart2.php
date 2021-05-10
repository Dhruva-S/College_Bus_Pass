 <?php  
 $connect = mysqli_connect("localhost", "root", "", "bus_booking");  
 $query = "SELECT branch, count(*) as number FROM student GROUP BY branch";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
	  
           <title>analysis | portal</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['service_type', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["branch"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Branch Wise Analysis',  
                      is3D:true,  
                      
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  

	
		   
      </head> 

      <body>  

           <br /><br />  <center>
           <div style="width:900px;">  
                <h3 align="center">ANALYSIS BASED ON BRANCH </h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
		   </center>
      </body>  
 </html>  