<?php
      //error_reporting (1);
      $con=mysqli_connect('localhost','root','','pharmacy', 3307)or die("cannot connect to server");

      $userFName = $_POST['F-Name'];
      $userLName = $_POST['L-Name'];
      $userGender = $_POST['Gender'];
      $userAddr = $_POST['Address'];
      $userEMail = $_POST['E-Mail'];
      $userPhone = $_POST['Phone/Land-line'];
      $userPass = $_POST['Password'];
      $userCPass = $_POST['ConfirmPassword'];


      $res = mysqli_query($con,"select * from custregister WHERE Email = '$userEMail'")
                or die("CANNOT ACCESS DATABASE".mysqli_error());
      $row = mysqli_fetch_array($res);

      if($userPass!=$userCPass){
        echo '<script>alert("Check passwords")</script>';
      }
      else if ($row["Email"])
      {
        echo("User already exists! Redirect to Login");
        exit();
      }

      else
      {
        $sql1 = "INSERT into custregister (Fname, LName, Gender, Address, Email, Phone, Password, CPassword) values ('$userFName', '$userLName', '$userGender', '$userAddr', '$userEMail', '$userPhone', '$userPass', '$userCPass')";
        $rs = mysqli_query($con, $sql1);
        if ($rs)
          header('location:/webmini/login.html');
      }
?>
