<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="Eurointel">
  <meta name="keywords" content="eurointel, prodaja, telekomunikacije, telesales, callcentar, zagreb, posao, trešnjevka, d2d, zapošljavamo">
  <meta name="author" content="Vedran Brandeis">
  <title>Eurointel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">

  <!-- MAP -->
  <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
  <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
  <script src="http://js.api.here.com/v3/3.0/mapsjs-ui.js" type="text/javascript" charset="utf-8"></script>
  <link rel="stylesheet" type="text/css" href="http://js.api.here.com/v3/3.0/mapsjs-ui.css" />
  <link rel="stylesheet" type="text/css" href="css/map.css" />
  <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
</head>

<body>
  <!-- GO TOP BUTTON -->
  <button onclick="topFunction()" id="myBtn" title="Na vrh"><i class="fas fa-angle-up fa-2x"></i></button>
  <!--Navbar-->
  <nav class="navbar navbar-expand-md navbar-dark scrolling-navbar fixed-top">
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand mr-5" href="index.html">Eurointel</a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" data-slide-to="0" data-target="#carousel-example-1" href="#pocetna" onclick="topFunction()">Početna</a>
          </li>
          <li class="nav-item">
            <a class=" button nav-link" data-slide-to="1" data-target="#carousel-example-1" href="#tko_smo" onclick="topFunction()">Tko
              smo?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gdje_smo" onClick="window.location.reload()">Gdje smo?</a>
          </li>
          <li class="
              nav-item">
            <a class="nav-link" data-slide-to="2" data-target="#carousel-example-1" href="#zaposljavamo" onclick="topFunction()">Zaposli
              se</a>
          </li>
        </ul>
        <!-- Links -->
      </div>
      <!-- Collapsible content -->
    </div>
  </nav>
  <!--/.Navbar-->

  <!--Carousel Wrapper-->
  <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1" data-slide-to="1"></li>
      <li data-target="#carousel-example-1" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active" id="pocetna">
        <!--Mask-->
        <div class="view">
          <div class="full-bg-img flex-center mask rgba-indigo-light white-text">
            <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
              <li>
                <h1 class="font-weight-bold text-uppercase">Eurointel</h1>
              </li>
              <li>
                <p class="font-weight-normal text-uppercase py-4">Dobro došli na stranice tvrtke Eurointel</p>
              </li>
              <li class="list-inline-item">
                <button data-slide-to="1" data-target="#carousel-example-1" class="btn btn-unique btn-lg btn-rounded mr-0">Tko
                  smo?</button>
              </li>
            </ul>
          </div>
        </div>
        <!--/.Mask-->
      </div>
      <!--/.First slide-->

      <!--Second slide -->
      <div class="carousel-item" id="tko_smo">
        <!--Mask-->
        <div class="view">
          <div class="full-bg-img flex-center mask rgba-purple-light white-text">
            <ul class="animated fadeInUp col-xl-8 col-lg-8 col-md-8 col-sm-12 text-center list-unstyled">
              <li>
                <h1 class="font-weight-bold text-uppercase">Tko smo?</h1>
              </li>
              <li>
                <p class="font-weight-normal pb-2">Najbrža smo rastuća tvrtka na području direktne prodaje
                  telekomunikacijskih usluga</p><br>
                <p class="font-weight-normal pb-5"> Tvrtka<strong> Eurointel</strong> bavi se prezentacijom i prodajom
                  usluga telekomunikacijskih operatera. <br>Kao mlada i dinamična tvrtka koja je najveći partner Vipnet
                  d.o.o., cilj nam je usmjeriti pažnju na razvoj i kontinuiranu brigu za ljudske potencijale.</p>
                <h3 class="font-weight-bold text-uppercase">Tražiš posao?</h3>
              </li>
              <li>
                <button data-slide-to="2" data-target="#carousel-example-1" class="btn btn-primary btn-lg btn-rounded mr-0 mt-1">Zaposli
                  se</button>
              </li>
            </ul>
          </div>
        </div>
        <!--/.Mask-->
      </div>
      <!--/.Second slide -->

      <!--Third slide-->
      <div class="carousel-item" id="zaposljavamo">
        <!--Mask-->
        <div class="view">
          <div class="full-bg-img flex-center mask rgba-blue-light white-text">
            <ul class="animated fadeInUp col list-unstyled">
              <li>
                <h1 class="font-weight-bold text-uppercase d-sm-none d-md-block zaposljavamo-naslov">Zapošljavamo</h1>
              </li>

              <!-- Grid row -->
              <div class="row justify-content-center">

                <!-- Grid column -->
                <div class="bg-silver col-md-8 col-lg-9 col-sm-8 col-xs-4">

                  <!--Title-->
                  <h4 class="font-weight-bold zaposljavamo-podnaslov">Agent u pozivnom centru (m/ž)</h4>
                  <!--Text-->
                  <div class="row">
                    <div class="col text-center">
                      <h5 class="justify-content-center opis">Opis posla</h5>
                      <ul class="text-left">
                        <li>informiranje potencijalnih korisnika o najpovoljnijim telekomunikacijskim uslugama</li>
                        <li class="opis-sm">briga o korisnicima</li>
                        <li>dogovaranje sastanaka s korisnicima</li>
                      </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                      <h5 class="white-text uvijeti">Uvijeti</h5>
                      <ul class="text-left">
                        <li>tražimo isključivo djelatnike s iskustvom u prodaji (telesales, D2D)</li>
                        <li>razvijene komunikacijske i pregovaračke vještine</li>
                        <li>motiviranost za rad i interes prema telekomunikacijskoj tehnologiji</li>
                        <li class="uvijeti-sm">ostvarivanje zadanih ciljeva</li>
                        <li class="uvijeti-sm">timski igrač</li>
                      </ul>
                    </div>
                    <div class="col-xl-4 col-lg-10 col-md-12 col-sm-12 text-center nudimo">
                      <h5 class="white-text detalji nudimo">Što nudimo?</h5>
                      <ul class="text-left">
                        <li class="nudimo-sm">rad u dinamičnom i visoko motiviranom timu</li>
                        <li>ugovor o radu s mogućnošću zaposlenja na neodređeno</li>
                        <li class="nudimo-sm">stjecanje i usavršavanje komunikacijskih i prodajnih vještina</li>
                        <li class="nudimo-sm">osobni razvitak i stalno usavršavanje</li>
                        <li class="nudimo-sm">osigurana edukacija i mentorstvo</li>
                        <li>fiksna plaća 5000 kn + bonusi</li>
                      </ul>
                    </div>
                  </div>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-outline-white btn-md waves-effect" data-toggle="modal"
                    data-target="#contactForm">
                    Prijavi se
                  </button>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </ul>
          </div>
        </div>
        <!--/.Mask-->
      </div>
      <!--/.Third slide-->
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->


 <?php

include("mailer.php");

?>


  <!--################# MODAL ##########################-->


  <div class="modal fade" id="contactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Prijava</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="col-md-12">
            <form method="post" action="index.php" enctype="multipart/form-data">

              <input type="text" name="user_name" placeholder="Ime i prezime" class="form-control form-control-sm <?php echo (!empty($data['user_name_error'])) ? 'is-invalid' : ''; ?>"
                value="<?php echo isset($_POST['user_name']) ? $_POST['user_name'] : '' ?>" required>
              <span class="invalid-feedback">
                <?php echo $data['user_name_error']; ?></span>

              <br>

              <input type="text" class="form-control form-control-sm" name="subject" placeholder="Predmet">

              <br>

              <input type="email" name="email" placeholder="Email" class="form-control form-control-sm <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>"
                value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
              <span class="invalid-feedback">
                <?php echo $data['email_error']; ?></span>

              <br>

              <textarea class="form-control" name="message" placeholder="Poruka"></textarea><br>

              <input type="file" name="userfile" class="form-control form-control-sm <?php echo (!empty($data['userfile_error'])) ? 'is-invalid' : ''; ?>"
                value="<?php echo isset($_POST['userfile']) ? $_POST['userfile'] : '' ?>" accept=".pdf,.doc,.docx"
                required> <span><small><p class="text-muted">(.pdf,.doc,.docx)</p></small></span>
              <span class="invalid-feedback"><?php echo $data['userfile_error']; ?></span>

          </div>


        </div>

        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-info" type="submit" name="posalji">Pošalji</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!--################# /MODAL #########################-->



  <section class="data">
    <div id="gdje_smo" class="container-fluid">
      <div class="row">

        <div id="map"></div>

      </div>
    </div>

    <!--Footer-->
    <footer class="page-footer text-center text-md-left">

      <!--Footer Links-->
      <section id="info-bar">
        <div class="container">
          <div class="row">
            <hr>
            <div class="col-lg-3 col-md-6 col-sm-12 my-5 text-center">
              <i class="fas fa-map-marker-alt"></i> <span>Selska cesta 90A, 7. kat</span>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 my-5 text-center">
              <i class="fa fa-phone" aria-hidden="true"></i> <span>01 6470 843</span>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 my-5 text-center">
              <i class="far fa-envelope"></i> <a href="mailto:info@eurointel.eu?Subject=Mail%20iz%20webstranice" target="_top">info@eurointel.eu</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 my-5 text-center">
              <a href="https://hr-hr.facebook.com/EuroIntel-telekomunikacije-270783440067912/" target="_blank">
                <i class="fab fa-facebook-square"></i><span> acebook</span></a>
            </div>

          </div>
        </div>
      </section>


      <!--Copyright-->
      <div class="footer-copyright text-center">
        <div class="container-fluid py-3">
          © 2018 Copyright: Eurointel
        </div>
      </div>
      <!--/.Copyright-->
    </footer>
    <!--/.Footer-->
  </section>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- MAP JS -->
  <script type="text/javascript" src="js/jsForMap.js"></script>
  <!-- CUSTOM JS -->
  <script type="text/javascript" src="js/custom.js"></script>


</body>

</html>