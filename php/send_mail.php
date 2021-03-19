<?php
if(isset($_GET["submit"]))
{
$to_email = "raoharshvardhan1@gmail.com";
$subject = "Verification";
$body = "http://localhost/webmini/login.html";
$headers = "From: BE FINITE FOREVER";

if (mail($to_email, $subject, $body, $headers))
{
  session_start();
  if (isset($_GET["submit"]))
  {
            error_reporting(0);
          $con=mysqli_connect('localhost','root','','pharmacy', 3307)or die("cannot connect to server");
          $cname = $_GET['cname'];
          $gst = $_GET['gst'];
          $fname = $_GET['F-Name'];
          $lname = $_GET['L-Name'];
          $gender = $_GET['Gender'];
          $addr = $_GET['Address'];
          $email = $_GET['EMail'];
          $phone = $_GET['Phone'];
          $pass = $_GET['Password'];
          $cpass = $_GET['ConfirmPassword'];
          $_SESSION["user"] = $email;
          $_SESSION["pass"] =$pass;
          if ($pass == $cpassword)
          {
              $re = "INSERT  into retailer_register (cname,gst,fname,lname,gender,address,email,phone,password,cpassword)
                            values ('$cname','$gst','$fname','$lname','$gender','$addr','$email','$phone','$pass','$cpass')";
                            mysqli_query($con,$re);
                header('Location:/webmini/login.html');
          }
          else
          {
              echo '<script>alert("Password did not match")</script>';
          }
}
    header('Location:http://localhost/webmini/success.php');

} else {
    header('Location:http://localhost/webmini/fail.html');
}
}

?>
