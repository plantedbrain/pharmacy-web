<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="scss/signup.css">
    <link rel="stylesheet" href="style.css">
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
      <img class="logo" src="img/bff.png" alt="logo" style = "width:200px; height:100px">
      <nav>
        <ul class="nav_links">

          <li><a href="login.html" action="Login"><button type="button" name="login" class="btn">Login</button></a></li>
        </ul>
      </nav>
    </header>

    <div class="image1">
      <img src="img/signup.jpeg" alt="Signup_image">
    </div>
    <div class="heading">
      <p>Connecting you with the best.</p>
    </div>


    <div class="container">
      <div class="company">
        <h3>For Retailers</h3>
        <br><br><p>We are market leading pharmaceutical platform aiming to provide you <br>with the best services.</p>
        <br><br><a href="retailer_register.html" action="Sign Up"><button type="button" name="Sign Up" class="btn">Start Selling</button></a>
      </div>
      <div class="customer">
        <h3>For Customers</h3>
        <br><br><p>Join over millions of customers, sign up today <br>and start ordering. <br>We care.</p>
        <br><br><a href="register.html" action="Sign Up"><button type="button" name="Sign Up" class="btn">Sign Up & Order</button></a>
      </div>
    </div>
  </body>
</html>
