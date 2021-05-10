 <?php  
 $connect = mysqli_connect("localhost", "root", "", "bus_booking");  
 $query = "SELECT bus_id, count(*) as number FROM booking_details GROUP BY bus_id";  
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
                               echo "['".$row["bus_id"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of strength of students in each bus',  
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
                <h3 align="center">PIE CHART REPRESENTING PERCENTAGE OR STRENGTH OF STUDENTS IN EACH BUS</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
		   </center>
      </body>  
 </html>  