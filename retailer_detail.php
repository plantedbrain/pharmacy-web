<?php
  session_start();
    $con=mysqli_connect('localhost','root','','pharmacy', 3307)
    or die("cannot connect to server");
    $user = $_SESSION["user"];
    $pass = $_SESSION["pass"];
    $res = mysqli_query($con,"select * from retailer_register WHERE email = '$user'  and password = '$pass' ")
              or die("CANNOT ACCESS DATABASE".mysqli_error());
    $row = mysqli_fetch_array($res);


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Details</title>
    <link rel="stylesheet" href="scss/bootstrap-4.css">
    <script src="js/sweetalert2.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="scss/retailer_detail.css?v=<?php echo time()?>">
    <script type="text/javascript">
    function salert(){
            Swal.fire({
            title: 'Sweet!',
            background:"#1e1e1e",

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
            <li><a href="updateproduct.php"<button type="button" name="update" class="btn" >Update Product</button></a></li>
            <li><button type="button" name="Logout" class="btn" onclick="salert()">Logout</button></a></li>

          </ul>
        </nav>
      </header>

        <div class="details">
          <?php

            if ($row!=NULL)
            {

            echo "<p class='image' style='text-align:center;'> " .$row['cname']. '</p>';
            echo   "<div class='pcontent'>";
            echo "<h1 style='color:white;text-align:center;'>Retailer Details</h1>";
            echo    "<br><br>";
            echo     " <div class='info'>";
            echo '<p> COMPANY NAME  &emsp; &emsp; &nbsp; ' .$row['cname']. '</p>';
            echo '<p> G S T number &emsp; &emsp; &emsp;&emsp;&emsp;' . $row['gst'] . '</p>';
            echo '<p> Address &emsp; &emsp; &emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;' . $row['address'] . '</p>';
            echo '<p> Phone Number &emsp; &emsp; &emsp;&emsp;&nbsp;' . $row['phone'] . '</p>';
            echo '<p> EMAIL ID &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; ' . $row['email'] . '</p>';
            echo "     </div>
                  </div>"
              ;
          }

          ?>


        </div>
        <div class="b-skills">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="skill-item center-block">
                  <div class="chart-container">
                    <div class="chart " data-percent=<?php echo(rand(1,100));?> data-bar-color="#23afe3">
                      <span class="percent" data-after="%">92</span>
                    </div>
                  </div>
                  <p>CURRENT RANK</p>
                </div>
              </div>
              <p> &emsp;&emsp;&emsp;&emsp;&emsp; </p>
              <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="skill-item center-block">
                  <div class="chart-container">
                    <div class="chart " data-percent=<?php echo(rand(1,100));?> data-bar-color="#a7d212">
                      <span class="percent" data-after="%">78</span>
                    </div>
                  </div>
                  <p>RATING</p>
                </div>
              </div>
      <p> &emsp;&emsp;&emsp;&emsp;&emsp; </p>
              <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="skill-item center-block">
                  <div class="chart-container">
                    <div class="chart " data-percent=<?php echo(rand(1,100));?> data-bar-color="#ff4241">
                      <span class="percent" data-after="%">95</span>
                    </div>
                  </div>

                  <p>SALES</p>
                </div>
              </div>

            </div>
          </div>
        </div>


      <script src="js/jquery-2.2.4.min.js"></script>
      <script src="js/jquery.appear.min.js"></script>
      <script src="js/jquery.easypiechart.min.js"></script>
      <script>
        'use strict';

      var $window = $(window);

      function run()
      {
      var fName = arguments[0],
        aArgs = Array.prototype.slice.call(arguments, 1);
      try {
        fName.apply(window, aArgs);
      } catch(err) {

      }
      };
      /* chart*/
      function _chart ()
      {
      $('.b-skills').appear(function() {
        setTimeout(function() {
          $('.chart').easyPieChart({
            easing: 'easeOutElastic',
            delay: 3000,
            barColor: '#369670',
            trackColor: '#171717',
            scaleColor: false,
            lineWidth: 21,
            trackWidth: 21,
            size: 250,
            lineCap: 'round',
            onStep: function(from, to, percent) {
              this.el.children[0].innerHTML = Math.round(percent);
            }
          });
        }, 150);
      });
      };


      $(document).ready(function() {
      run(_chart);
      });

      </script>
      </body>

      </html>
