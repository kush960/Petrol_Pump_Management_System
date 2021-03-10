<?php
   $con = mysqli_connect('127.0.0.1','root','');

   if(!$con)
   {
       echo 'Not connected to server';
   }

   if(!mysqli_select_db($con,'370project'))
   {
       echo 'Database not connected';
   }

   $Petrol = $_POST['petrolprice'];
   $Deisel = $_POST['deiselprice'];
   $capacity = 10000;
   $date = date('Y-m-d');
   
   $sql = "INSERT INTO stock (petrol,deisel,capacity,date) VALUES ('$Petrol','$Deisel','$capacity','$date')";

   if(!mysqli_query($con,$sql))
   {
       echo 'Not inserted';
   }
   else
   {
       echo 'Inserted';
   }
   header("refresh:2; url=stock.php");
?>