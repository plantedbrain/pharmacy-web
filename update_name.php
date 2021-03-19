<?php

   $con=mysqli_connect('localhost','root','','pharmacy', 3307)or die("cannot connect to server");


   echo 'Connected successfully<br>';
   $sql = ' DELETE FROM custregister WHERE Fname="XYZ"';

   if (mysqli_query($con, $sql)) {
      echo "Record deleted successfully";
   } else {
      echo "Error updating record: " . mysqli_error($con);
   }
   mysqli_close($con);
?>
