<?php 

session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <h1 style="text-align:center;" class="text-info">ALL BOOKING DETAILS</h1>
    <hr>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://use.fontawesome.com/9b35969c63.js"></script>
    <title>admintable</title>

    <!------------------- BOOTSTRAP ---------------------------------------->
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


<body>
  <!--------------------DISPLAYING BOOKING DETAILS  -------------------------->
  
  <div class="container">
        <table class="table table-compressed table-striped table-hover  responsive">
        <tr class="text-info">
        <th >BUS ID</th>
        <th >SEAT NUMBER</th>
        <th >USN</th>
        <th >BOOKING DATE</th>
        <th >EMAIL ID</th>
        <th>STARTING LOCATION</th>
      </tr>
  
  <?php 

$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));

$select_db=mysqli_select_db($conn,'bus_booking') or die(mysqli_error($conn));

$sql2="SELECT * FROM booking_details  ";


$result2=mysqli_query($conn,$sql2) or die(mysqli_error($conn));

  if($result2==true)
  {
    while($rows=mysqli_fetch_assoc($result2))
      {
        
        $bus_id=$rows['bus_id'];
        $seatno=$rows['seat_no'];
        $usn=$rows['usn'];
        $booking_date=$rows['booking_date'];
        $email_id=$rows['email_id'];
        $starting_location=$rows['starting_location'];



        ?>

                <?php 
                echo '<tr>'; ?>
                
                
                <td ><?php echo $bus_id ; ?></td>
                <td ><?php echo $seatno ; ?></td>
                <td ><?php echo $usn ; ?></td>
                <td ><?php echo $booking_date ; ?></td>
                <td ><?php echo $email_id ; ?></td>
                <td ><?php echo $starting_location ; ?></td>
              </tr>
              <?php

      }
}
?>
</table>

</div>




</body>

</html>