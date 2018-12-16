<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stilius.css">

    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style media="screen">
      body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;

      }

      main {
      flex: 1 0 auto;
      }

      </style>

    <title></title>
  </head>

  <body>

    <nav class ="light-green lighten-1">
    <div class="nav-wrapper">
      <a href="index.html" class="brand-logo"><img src="images/mu.png"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">Pagrindinis</a></li>
        <li><a href="portfolio.html">Paslaugos</a></li>
        <li><a href="contacts.php">Kontaktai</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="index.html">Pagrindinis</a></li>
    <li><a href="portfolio.html">Paslaugos</a></li>
    <li><a href="contacts.php">Kontaktai</a></li>
  </ul>

    <main>

      <div class="row">
        <div class="form">
          <h3>Parašyk man:</h3>


  <form id="contact" action="app.php" method="post">
    <div class="row">
      <div class="input-field col s3">
        <input type="text" name="vardas" class="validate" required autofocus>
        <label for="first_name">Vardas</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="email" name="email" required>
        <label for="email">El. pašto adresas</label>
      </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
          <textarea name="message" class="materialize-textarea" required></textarea>
          <label for="textarea1">Įrašykite tekstą</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="submit" id="contact-submit">Siųsti
  <i class="material-icons right" >send</i>
</button>
  </form>
</div>
</div>

    </main>
    <footer class="page-footer light-green darken-1">
  <div class="container">
    <div class="row">
      <div class="col l6 m6 s12">
        <h4>Kontaktai:</h4>
        <address class="">
          <dl class="">
            <dl>El. paštas: <a href="mailto:m.zebuolyte@gmail.com" style="color: white">m.zebuolyte@gmail.com </a></dl>
            <dl>Telefonas: <a href="tel:+37062842811" style="color: white">+37062842811</a></dl>
            <p>Adresas: Anykščiai, Lietuva</p>
        </address>

      </div>
      <div class="col l6 m6 s12">
        <h5 class="white-text">Žemėlapis</h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36132.30921842872!2d25.0788691552895!3d55.52767790628378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e7e93037844cfb%3A0x5b6c24c0751e57e6!2zQW55a8WhxI1pYWk!5e0!3m2!1slt!2slt!4v1542649263472" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2018 Copyright

    </div>
  </div>
</footer>

    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
$('.sidenav').sidenav();
$('.parallax').parallax();
});
  </script>

  </body>
</html>
