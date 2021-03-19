<?php
$con=mysqli_connect("localhost","root","","pharmacy", 3307) or die("Cannot connect to server");
if(isset($_POST["submit"]))
{
$user = $_POST["user"];
$pass = $_POST["pass"];
$pass1 = $_POST["pass1"];
$res = mysqli_query($con,"select * from retailer_register WHERE email = '$user'  ")
          or die("CANNOT ACCESS DATABASE".mysqli_error());
$row = mysqli_fetch_array($res);
$r = mysqli_query($con,"select * from custregister WHERE Email = '$user'")
          or die("CANNOT ACCESS DATABASE".mysqli_error());
$ro = mysqli_fetch_array($r);
if($pass == $pass1)
{
  if ($row["email"] == $user)
    {
            mysqli_query($con,"UPDATE retailer_register SET cpassword='$pass' , password = '$pass' WHERE email = '$user'")
            or die("CANNOT ACCESS DATEBASE".mysqli_error());

            header('Location:fail1.html');

}
if($ro["Email"] == $user)
{
 mysqli_query($con,"UPDATE custregister SET CPassword='$pass' , Password = '$pass' WHERE email = '$user'")
  or die("CANNOT ACCESS DATEBASE".mysqli_error());
    header('Location:/webmini/fail1.html');

}
}
else
{
  header('Location:fail.html');
}
}

?>
