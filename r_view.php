<?php
session_start();
$con=mysqli_connect('localhost','root','','pharmacy')
or die("cannot connect to server");
$res = mysqli_query($con,"select * from retailer_register")
          or die("CANNOT ACCESS DATABASE".mysqli_error());
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Product </title>
    <script src="js/sweetalert2.min.js"> </script>
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/dark.css">
    <link rel="stylesheet" type="text/css" href="scss/retailer_view.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="style.css">
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
  window.location = "http://localhost/mini/login.html";
});
    }

    </script>
  </head>
  <body>
    <script type="text/javascript">
    function transition() {
      var tl = new TimelineMax();

      tl.to(CSSRulePlugin.getRule('body:before'), 0.2, {cssRule: {top: '50%' }, ease: Power2.easeOut}, 'close')
      .to(CSSRulePlugin.getRule('body:after'), 0.2, {cssRule: {bottom: '50%' }, ease: Power2.easeOut}, 'close')
      .to($('.loader'), 0.2, {opacity: 1})
      .to(CSSRulePlugin.getRule('body:before'), 0.2, {cssRule: {top: '0%' }, ease: Power2.easeOut}, '+=1.5', 'open')
      .to(CSSRulePlugin.getRule('body:after'), 0.2, {cssRule: {bottom: '0%' }, ease: Power2.easeOut}, '-=0.2', 'open')
      .to($('.loader'), 0.2, {opacity: 0}, '-=0.2');
    }


    </script>

      <div class="loader">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
      <div class="bar4"></div>
      <div class="bar5"></div>
      <div class="bar6"></div>
    </div>
    <div class="-content -index">
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.12.1/plugins/CSSRulePlugin.min.js'></script>

        <script >
        document.getElementById("demo").innerHTML = window.transition();


      </script>
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
          $r = mt_rand(27,30);
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
          header("Location:retailer_view.php");
      }

}

?>

  </body>
</html>
