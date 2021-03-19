<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$con=mysqli_connect("localhost","root","","pharmacy", 3307) or die("Cannot connect to server");
session_start();

if (isset($_POST["submit"]))
{

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$d = $_POST["d"];

$f = $_POST["f"];
$g = $_POST["g"];
$h = $_POST["h"];
$i = $_POST["i"];

$k = $_POST["k"];
$l = $_POST["l"];
$m = $_POST["m"];
$n = $_POST["n"];


  $ab =mysqli_query($con,"Insert into product (A,B,C,D,F,G,H,I,K,L,M,N) values ('$a','$b','$c','$d','$f','$g','$h','$i','$k','$l','$m','$n') ")
   or die("CANNOT ACCESS DATEBASE".mysqli_error());
if($ab){
    header('Location:http://localhost/webmini/retailer_detail.php');
  }
else {
  header('Location:http://localhost/webmini/fail.html');
}



}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
    <link rel="stylesheet" href="scss/sweetalert2.min.css">
    <script src="js/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="scss/Homeus.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="scss/update.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
    function salert(){
      Swal.fire({
  title: 'Sweet!',
  text: 'Thank you for choosing us.',
  background:"#1e1e1e",
  imageUrl: 'img/gatsby.jpeg',
  imageWidth: 400,
  imageHeight: 218,
  imageAlt: 'Custom image',
  }).then(function(){
  window.location = "http://localhost/webmini/login.html";
  });
    }
    function go(){
      Swal.fire({
  title: 'Sweet!',
  text: 'UPDATED.',
  background:"#1e1e1e",
  imageUrl: 'img/gatsby.jpeg',
  imageWidth: 400,
  imageHeight: 218,
  imageAlt: 'Custom image',
  }).then(function(){
  window.location = "http://localhost/webmini/retailer_detail.php";
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
            <li><a href="retailer_detail.php"><button type="button" name="Logout" class="btn" >Back</button></a></li>
            <li><a><button type="button" name="Logout" class="btn" onclick="salert()">Logout</button></a></li>
          </ul>
        </nav>
      </header>
        <div class="table">
          <form class="a" method="POST">


            <table>
              <tr id="h">
                <td><center>PRODUCT NAME &emsp; &emsp; &emsp; </td>
                <td class="a">In Stock &emsp; &emsp; &emsp;</td>
                <td class="a">Out Of Stock &emsp; &emsp; &emsp;</td>

              </tr>

              <tr>
                <td id="item"><center><p>Becozym C Forte ( Vitamin B Complex + Biotin + Vitamin C )</p></td>
                 <td id="ritem"><input type="radio"  value="1" name="a"/></td>
                  <td id="ritem" ><input type="radio"  value="0" name="a"/></td>
              </tr>
              <tr>
                <td id="pitem"><center><p>Kofol Immunity Tablets - 60's</p></td>
                 <td id="ritem"><input type="radio"  value="1"name="b"/></td>
                  <td id="ritem"><input type="radio" value="0" name="b"/></td>
              </tr><tr>
                <td id="pitem"><center><p>Everherb Shilajit 500mg</p></td>
                 <td id="ritem"><input type="radio"  value="1"name="c"/></td>
                  <td id="ritem"><input type="radio" value="0" name="c"/></td>
              </tr><tr>
                <td id="pitem"><center><p>Accu-chek Instant S Glucometer Kit </p></td>
                 <td id="ritem"><input type="radio" value="1" name="d"/></td>
                  <td id="ritem"><input type="radio" value="0" name="d"/></td>
              </tr>

              <tr>
                <td id="pitem"><center><p>Coq 300mg Health Supplement Capsules</p></td>
                 <td id="ritem"><input type="radio"  value="1" name="f"/></td>
                  <td id="ritem"><input type="radio" value="0" name="f"/></td>
                </tr>
              <tr>
                <td id="pitem"><center><p>Holland & Barrett Abc Plus Multivitamins & Minerals Caplets 120's</p></td>
                <td id="ritem"><input type="radio"  value="1" name="g"/></td>
                <td id="ritem" ><input type="radio" value="0" name="g"/></td>
              </tr>
              <tr>
                <td id="pitem"><center><p>Lama Immunity Kit</p></td>
                <td id="ritem"><input type="radio"  value="1" name="h"/></td>
                <td id="ritem" ><input type="radio" value="0" name="h"/></td>
               </tr>
               <tr>
                  <td id="pitem"><center><p>Sporlac Tablet 20'S</p></td>
                  <td id="ritem"><input type="radio"  value="1" name="i"/></td>
                  <td id="ritem"><input type="radio" value="0" name="i"/></td>
                </tr>
                <tr>
                   <td id="pitem"><center><p>Eugipro 2Miu Suspension 5ml</p></td>
                   <td id="ritem"><input type="radio"  value="1" name="k"/></td>
                   <td id="ritem"><input type="radio" value="0" name="k"/></td>
                </tr>
                <tr>
                    <td id="pitem"><center><p>Biotrue Multi Purpose Solution 300 ml</p></td>
                    <td id="ritem"><input type="radio"  value="1" name="l"/></td>
                    <td id="ritem"><input type="radio" value="0" name="l"/></td>
                </tr>
                <tr>
                    <td id="pitem"><center><p>Cura Hand Sanitizer 100 ml</p></td>
                    <td id="ritem"><input type="radio"  value="1" name="m"/></td>
                    <td id="ritem"><input type="radio" value="0" name="m"/></td>
                </tr>
                <tr>
                    <td id="pitem"><center><p>Sahyog Wellness Multi Function Non-Contact Body & Object Infrared Thermometer</p></td>
                    <td id="ritem"><input type="radio"  value="1" name="n"/></td>
                    <td id="ritem" ><input type="radio" value="0" name="n"/></td>
                </tr>
                <tr>
                   <td></td>
                   <td style="width:10px;"><button class='btn' name="submit" onclick='go()' value="submit">Submit</button>
                </tr>
            </table>
              </form>
        </div>
  </body>
</html>
