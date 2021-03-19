<?php
  session_start();
    $con=mysqli_connect('localhost','root','','pharmacy', 3307)
    or die("cannot connect to server");
$data=array();
    $res = mysqli_query($con,"select * from custregister")
              or die("CANNOT ACCESS DATABASE".mysqli_error());
              if (mysqli_num_rows($res) > 0) {
                 while($row = mysqli_fetch_array($res)) {
                    $data = $row;
                    echo '<br/>';
                    print_r($data);
                    echo '<br/>';
                 }
              } else {
                 echo "0 results";
              }

              mysqli_close($con);

 ?>
