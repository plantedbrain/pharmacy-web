<?php

session_start();
{
  if(isset($_POST["submit"]))
      $con=mysqli_connect("localhost","root","","pharmacy", 3307) or die("Cannot connect to server");
      $user = $_POST["user"];
      $pass = $_POST["pass"];

      $res = mysqli_query($con,"select * from retailer_register WHERE email = '$user'  and password = '$pass' ")
                or die("CANNOT ACCESS DATABASE".mysqli_error());
      $row = mysqli_fetch_array($res);

      if (($row["email"] == $user && $row["password"] == $pass ))
      {
        $_SESSION["user"] = $user;
        $_SESSION["pass"] = $pass;
        header('Location:retailer_detail.php');
      }
      else
      {
          header("Location:fail.html");
      }

      $re = mysqli_query($con,"select * from custregister WHERE email = '$user'  and password = '$pass' ")
                or die("CANNOT ACCESS DATABASE".mysqli_error());
      $ro = mysqli_fetch_array($re);
      if($ro)
      {
      if (($ro["Email"] == $user && $ro["Password"] == $pass ))
      {
        $_SESSION["cuser"] = $user;
        $_SESSION["cpass"] = $pass;
        header('Location:index1.html');
      }
      else
      {
          header("Location:/webmini/fail.html");
      }
    }
}
?>
