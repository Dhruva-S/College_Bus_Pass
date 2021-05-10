<?php  
 $connect = mysqli_connect("localhost", "root", "", "bus_booking");  
$sql = "SELECT * FROM student INNER JOIN booking_details ON student.usn = booking_details.usn";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>student | details</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
          <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
           <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
         <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
         <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
          <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
		  <script src="https://use.fontawesome.com/9b35969c63.js"></script>
	  <style>

	body{
		margin:0;
	}
.header{
	
	padding:20px;
	background-color:#ffff1a;
}
.nittelogo{
	
	height:60px;
	width:400px;
}
.navbars {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbars a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbars a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbars a {
    float: none;
    display: block;
  }
}
	



	

	#customer_data {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customer_data td, #employee_data th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customer_data tr:nth-child(even){background-color:#99ff66;}

#customer_data tr:hover {background-color: yellow;}

#customer_data th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}  
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
	  </style>



	  </head>  
      <body>  
    

<div class="header">
	<img src="photos/nittelogo.png" alt="logo" class="nittelogo"/>
	</div>
	
<div class="navbars">
    <a class="active" href="####"><i class="fa fa-fw fa-user"></i> Admin</a> 
    <a href="adminportal.php"><i class="fa fa-fw fa-arrow-left"></i> Back</a> 
 
</div>
           <div class="container" >  
                <h3 align="center">STUDENT DETAILS</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="customer_data" >  
                          <thead>  
                               <tr>  
							   <td style="width:200px;">Name</td>
							   <td style="width:100px;">Busid</td>
							   <td style="width:100px;">Seat_no</td>
                                <td style="width:100px;">Usn</td>
									<td style="width:150px;">Booking_date</td> 
                                    <td style="width:100px;">Email_id</td> 	
                                 <td style="width:200px;">Starting_location</td> 										
                                    <td style="width:100px;">Mobile_No</td>
                               									
                                    
                                    
									
									
									
							
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
							   <td>'.$row["name"].'</td> 
							  <td>'.$row["bus_id"].'</td>  
                              <td>'.$row["seat_no"].'</td> 
                                <td>'.$row["usn"].'</td>							  
							   
                                    <td>'.$row["booking_date"].'</td>  
									 <td>'.$row["email_id"].'</td>
									 <td>'.$row["starting_location"].'</td>
                                    <td>'.$row["mobile_no"].'</td>  
                                   
									
									    
									
									
</tr>  
                               ';  
                          }  
                          ?>  
                      
					 </table>  
                </div>  
           </div>  <br>

      </body>  
      
 </html>  
 <script>  
$(document).ready( function() {
    $('#customer_data').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
		{
            extend: 'excelHtml5',
            autoFilter: true,
            sheetName: 'Exported data'
        },

		{
            extend: 'pdfHtml5',
            orientation: 'potrait',
            pageSize: 'A4',
		    download :'open'
        },
		'csv','print'
		
		]
    } );
} );


 </script>  
