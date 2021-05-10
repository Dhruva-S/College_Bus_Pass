
<?php 
session_start();


$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
//name of the database created is demo
$select_db=mysqli_select_db($conn,'bus_booking') or die(mysqli_error($conn));
$email=$_SESSION['email_id'];
$sql1="SELECT seat_no FROM booking_details WHERE email_id='$email' ";

$result1=mysqli_query($conn,$sql1) or die(mysqli_error($conn));

    if($result1==true)
      {
        $rows=mysqli_fetch_assoc($result1);
         $rowcount1=mysqli_num_rows($result1);

        if($rowcount1!=1)
        {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('You have not registered for the bus Pass!!');
                window.location.href='studentportal.php';
                </script>");
        }
        else {
      $seatno=$rows['seat_no'];
      }
    }



//seatno=seatno strength from query 


$i=1;


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bus Seat</title>

  <!------------------- BOOTSTRAP ---------------------------------------->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!--------------------------- CSS------------------------------------>
  <style type="text/css">
    input[type="checkbox"]{
  width: 30px; /*Desired width*/
  height: 30px; /*Desired height*/
  color: red;
}
    .x{
      border:1px solid;
      padding:10px;
     margin: 10px 70px 50px 200px  ;
      float: left;
    }
    
  </style>

</head>


<!-------------------------------BODY----------------------------------->
<body>
 
 <div class="container">
  
 
<div class="x bg-danger">
  

   <!-- <form>-->

      
    &#160 &#160 &#160 &#160  
    &#160 &#160 &#160 &#160 
     &#160 &#160 &#160 &#160 
        &#160 &#160 &#160 &#160  
    &#160 &#160 &#160 &#160 
     &#160 &#160 &#160 &#160
      &#160 &#160 &#160 &#160  
    

   
    

    <label class="checkbox-inline">
      <input type="checkbox" value="" disabled ><h3><b>Driver</b></h3>
    </label>
&#160 &#160 &#160 &#160  
   

   <!------------------------------------------------------------->
    <label class="checkbox-inline" >
      <input type="checkbox" value="" <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    
     

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
    
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>

    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
     &#160 &#160 &#160 &#160
    



    <!-- -------------------------------------------- -->


    <!-------------------------------------------------------->
    <label class="checkbox-inline" >
      <input type="checkbox" value="" <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    
     

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
    
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>

    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
     &#160 &#160 &#160 &#160
    



    <!-- -------------------------------------------- -->


    <!------------------------------------------------------------->
    <label class="checkbox-inline" >
      <input type="checkbox" value="" <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    
     

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
    
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>

    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
     &#160 &#160 &#160 &#160
    



    <!-- -------------------------------------------- -->


   <!------------------------------------------------------------->
    <label class="checkbox-inline" >
      <input type="checkbox" value="" <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    
     

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
    
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>

    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
     &#160 &#160 &#160 &#160
    



    <!-- -------------------------------------------- -->


    <!-------------------------------------------------------->
    <label class="checkbox-inline" >
      <input type="checkbox" value="" <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    
     

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
    
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>

    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
     &#160 &#160 &#160 &#160
    



    <!-- -------------------------------------------- -->


    <!------------------------------------------------------------->
    <label class="checkbox-inline" >
      <input type="checkbox" value="" <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    
     

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
    
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>

    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
     &#160 &#160 &#160 &#160


     <!--------------------------------------------------------------------->


   <!------------------------------------------------------------->
    <label class="checkbox-inline" >
      <input type="checkbox" value="" <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    
     

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
    
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>

    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
     &#160 &#160 &#160 &#160
    



    <!-- -------------------------------------------- -->


    <!-------------------------------------------------------->
    <label class="checkbox-inline" >
      <input type="checkbox" value="" <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    
     

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
    
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>

    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
     &#160 &#160 &#160 &#160
    



    <!-- -------------------------------------------- -->


    <!------------------------------------------------------------->
    <label class="checkbox-inline" >
      <input type="checkbox" value="" <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    
     

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
    
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>

    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
     &#160 &#160 &#160 &#160
    



    <!-- -------------------------------------------- -->


   <!------------------------------------------------------------->
    <label class="checkbox-inline" >
      <input type="checkbox" value="" <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    
     

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
    
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>

    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
     &#160 &#160 &#160 &#160
    



    <!-- -------------------------------------------- -->


    <!-------------------------------------------------------->
    <label class="checkbox-inline" >
      <input type="checkbox" value="" <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    
     

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
    
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>

    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
     &#160 &#160 &#160 &#160
    



    <!-- -------------------------------------------- -->


    <!------------------------------------------------------------->
    <label class="checkbox-inline" >
      <input type="checkbox" value="" <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    
     

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?> >
    </label>
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    &#160 &#160 &#160 &#160
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
    
    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>

    

    <label class="checkbox-inline">
      <input type="checkbox" value=""  <?php if($i!=$seatno) echo"disabled"; $i=$i+1;?>>
    </label>
     &#160 &#160 &#160 &#160
    
<div align="center">
  <label class="checkbox-inline">
  <h5><input type="checkbox" disabled>Other seats</h5>
  
</label>
 &#160
<label class="checkbox-inline">
  <h5><input type="checkbox" >Your seat</h5>
</label>
</div>
</div>


    <!-- -------------------------------------------- -->
    


    <!-- -------------------------------------------- -->




<!--</form>-->
</div>



</div>



</body>

</html>