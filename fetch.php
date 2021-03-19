<?php

   $con=mysqli_connect('localhost','root','','pharmacy', 3307)or die("cannot connect to server");


   echo 'Connected successfully<br>';
   $sql = 'SELECT Fname FROM custregister';

   $result = mysqli_query($con, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: " . $row["Fname"]. "<br>";
            }
         } else {
            echo "0 results";
         }
         mysqli_close($con);
?>
