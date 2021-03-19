<?php
session_start();
$con=mysqli_connect('localhost','root','','pharmacy', 3307)
or die("cannot connect to server");
$res = mysqli_query($con,"select * from retailer_register")
          or die("CANNOT ACCESS DATABASE".mysqli_error());
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> View </title>
    <script src="js/sweetalert2.min.js"> </script>
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/dark.css">
    <link rel="stylesheet" type="text/css" href="scss/retailer_view.css?v=<?php echo time() ?>">
    <script type="text/javascript">
    function salert(){
      Swal.fire({
  title: 'Sweet!',
  text: 'Thank you for choosing us.',
  imageUrl: 'img/gatsby.jpeg',
  imageWidth: 400,
  imageHeight: 218,
  imageAlt: 'Custom image',
}).then(function(){
  window.location = "http://localhost/webmini/login.html";
});
    }

    </script>
  </head>
  <body>
    <header>
      <img class="logo" src="img/bff.png" alt="logo" width="200" height="100">
      <nav>
        <ul class="nav_links">
          <li><button type="button" name="Logout" class="btn" onclick="salert()">Logout</button></a></li>
        </ul>
      </nav>
    </header>


<?php


         while($row = mysqli_fetch_array( $res ))
        {
          $r = mt_rand(24,29);
          if($row["id"] == $r)
          {
          echo  "<div class='banner'>";
        echo "<p class='image'> " .$row['cname']. '</p>';
          echo   "<div class='pcontent'>";
          echo "<h1 style='color:white;'>Reatiers Details</h1>";
          echo    "<br><br>";
        echo     " <div class='info'>";
        echo '<p> COMPANY NAME  &emsp; &emsp; &nbsp; ' .$row['cname']. '</p>';
        echo '<p> G S T number &emsp; &emsp; &emsp;&emsp;&emsp;' . $row['gst'] . '</p>';
        echo '<p> Address &emsp; &emsp; &emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;' . $row['address'] . '</p>';
        echo '<p> Phone Number &emsp; &emsp; &emsp;&emsp;&nbsp;' . $row['phone'] . '</p>';
        echo '<p> EMAIL ID &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;' . $row['email'] . '</p>';
        echo "     </div>
              </div>
            </div>";
      }
      else {
        echo  "<div class='banner'>";
      echo "<p class='image'> </p>";
        echo   "<div class='pcontent'>";
        echo "<h1 style='color:white;'>Reatiers Details</h1>";
        echo    "<br><br>";
      echo     " <div class='info'>";
    echo "<p>NO RETAILER IS AVAILABLE</P>";
      echo "     </div>
            </div>
          </div>";
          header("Location:/webmini/view.php");
      }

}

?>

  </body>
</html>
