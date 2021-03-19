<?php
$con=mysqli_connect("localhost","root","","pharmacy", 3307) or die("Cannot connect to server");

$user = $_POST["user"];
$pass = $_POST["pass"];
$pass1 = $_POST["pass1"];



$res = mysqli_query($con,"select * from retailer_register WHERE email = '$user'")
          or die("CANNOT ACCESS DATABASE".mysqli_error());
$row = mysqli_fetch_array($res);
$r = mysqli_query($con,"select * from custregister WHERE Email = '$user'")
          or die("CANNOT ACCESS DATABASE".mysqli_error());
$ro = mysqli_fetch_array($r);
if($pass==$pass1)
{


  if (($row["email"] == $user))
    {
            $a = mysqli_query($con,"UPDATE retailer_register SET cpassword='$pass' , password = '$pass' WHERE email = '$user'")
            or die("CANNOT ACCESS DATEBASE".mysqli_error());
            if(isset($a))
            {
            echo '<script>alert("updated");   </script>' ;
            header('Location:/webmini/login.html');
          }
      }
    if($ro["Email"] == $user)
    {
      $b = mysqli_query($con,"UPDATE retailer_register SET CPassword='$pass' , Password = '$pass' WHERE email = '$user'")
      or die("CANNOT ACCESS DATEBASE".mysqli_error());
      if($b)
      {
        echo '<script>alert("updated")</script>' ;
        header('Location:/webmini/login.html');
      }
    }
}
else
{
  echo "CHECK THE GIVEN INPUTS";
}

?>
