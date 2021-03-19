
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Success</title>
    <link rel="stylesheet" href="scss/sweetalert2.min.css">
    <script src="js/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="scss/Homeus.css?v=<?php echo time() ?>">
   <script type="text/javascript">
   function fail(){
     Swal.fire({
 text: 'Mail Sent',
 background:'#1e1e1e',
 imageUrl: 'img/dfsd.gif',
 imageWidth: 300,
 imageHeight: 218,
 imageAlt: 'Custom image',
}).then(function(){
   window.location ="http://localhost/webmini/retailer_register.html";
 });
    }
    </script>
  </head>

    <body>
      <header>
        <img class="logo" src="img/bff.png" alt="logo" width="200" height="100">
        <script type="text/javascript">
          document.getElementById("demo").innerHTML = window.fail();

        </script>
      </header>
  </body>
</html>
