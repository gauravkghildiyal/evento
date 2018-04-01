<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.css" > -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.fullpage.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script> -->

    <title>Evento</title>
  </head>
  <body id="background">
    <!-- navbar starts-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light navbar-style">
          <a class="navbar-brand" href="index.html"><img src="images/logo.png" style="width:150px;height:50px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <ul style="right:0px; position:absolute; color:#004085" class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link nav-text" style="color:white;text-shadow:0 0 4px black;" href="#background-2">EVENTS</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link nav-text" href="gallery.html">GALLERY</a>
              </li> -->
              <li class="nav-item sign-up-border">
                <a class="nav-link nav-text" style="color:white" href="{{ route('login') }}">LOGIN</a>
              </li>
              <li class="nav-item sign-up-border">
                <a class="nav-link nav-text" style="color:white" href="{{ route('register') }}">SIGN UP</a>
              </li>
            </ul>

          </div>
        </nav>

        <!--navbar ends-->

        <div id="fullpage">
            <div class="section" id="background1">
                <div class="container">
                    <div class="row">
                        <div class="col-12" style="text-align:center; font-family: 'Roboto Condensed', sans-serif;color:white; font-size:7.2rem; text-shadow: -3px 3px 1px #464a4e; ">
                            <div style="margin-right:300px;margin-left:300px;border-style:solid;border-image:linear-gradient(to right, #FF5F6D, #FFC371);border-image-slice: 1;border-width: 20px">
                                <div style="background">
                                    <span>EVENTO</span></br>
                                    <span>2018</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="section" id="background-2">
                <div class="container">
                    <div class="row">
                        @foreach($events as $event)
                        <div class="col-12 col-md-4 event-cards" >
                            <a class="card" href="{{ route('events.show',['event'=>$event->id]) }}">
                                <div class="container" style="text-align:center">
                                    <div class="row">
                                        <div class="col-12" style="padding-top:40px; padding-bottom:40px; font-family: 'Roboto Condensed', sans-serif;color:white;background: linear-gradient(to left, #4776E6, #8E54E9); font-size:50px">
                                            <span>{{ $event->name }}</span>
                                        </div>
                                        <div class="col-12" style="padding-top:30px; padding-bottom:30px; font-family:'Open Sans Condensed', sans-serif; font-size:30px">
                                            <span>{{ $event->date }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="section" id="background-3">
                <div class="container">
                    <div class="row">
                      <div class="col-6 col-md-3 get-in-touch-div">
                        <span>GET IN TOUCH</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 email-id">
                        <span>xyz@gmail.com</span>
                      </div>
                    </div>
                    <div class="row" style="font-family:'Roboto Condensed', sans-serif">
                      <div class="col-6">
                        <span>PHONE NUMBER 1</span>
                      </div>
                      <div class="col-6">
                        <span>PHONE NUMBER 1</span>
                      </div>
                      <div class="col-6 col-md-6">
                        <span>+91 8950123818</span>
                      </div>
                      <div class="col-6 col-md-6">
                        <span>+91 7023187028</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-3 get-in-touch-div">
                        <span>ADDRESS</span>
                      </div>
                      <div class="col-12">
                        <span>NIT Kurukshetra,</span>
                        <span>Kurukshetra(Haryana)</span>
                        <span>136119<span>
                      </div>
                    </div>
                </div>
            </div>
        </div>

   <!-- Optional JavaScript -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.js"></script> -->
    <script type="text/javascript" src="/js/scrolloverflow.min.js"></script>
    <script type="text/javascript" src="/js/jquery.fullpage.min.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <!-- <script src="ckLine-master/jquery.ckLine.min.js"></script> -->
    <script src="/js/bootstrap.js"></script>
  </body>
</html>
