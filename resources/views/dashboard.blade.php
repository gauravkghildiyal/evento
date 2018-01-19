<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.css" > -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.fullpage.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!-- <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script> -->

    <title>Evento</title>
  </head>
  <body>

    <!-- navbar starts-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light navbar-style">
          <a class="navbar-brand" href="index.html"><img src="/images/logo.png" style="width:150px;height:50px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <ul style="right:0px; position:absolute; color:#004085" class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link nav-text" style="color:white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link nav-text" href="gallery.html">GALLERY</a>
              </li> -->
              <li class="nav-item sign-up-border" style="font-size: 40px; color:white">
                  <a href="{{ route('profile',['id'=>auth()->user()->id]) }}" style="color:white"><i class="fa fa-user" aria-hidden="true"></i></a>
              </li>
            </ul>

          </div>
        </nav>

        <!--navbar ends-->

        <div class="jumbotron jumbotron-fluid" style="background: linear-gradient(to left, #0f0c29, #302b63, #24243e);color:white">
          <div class="container" style="text-align:center">
            <h1 class="display-4">DASHBOARD </h1>
          </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('events.create') }}">
                        <div style="margin-left:450px;margin-right:425px;border-style: solid;border-color:white; padding:20px;background: linear-gradient(to right, #ff9966, #ff5e62); font-family: 'Roboto Condensed', sans-serif;text-decoration: none;font-size:20px; color:white;text-align:center;">
                            <span>CREATE NEW EVENT</span>
                        </div>
                    </a>

                </div>
            </div>
        </div>

        <div class="container" style="margin-top:10vh">
                    <div class="row">
                        @foreach($events as $event)
                        <a class="col-12 col-md-4 event-cards" href="{{ route('events.show',['event'=>$event->id]) }}">
                            <div class="card">
                                <div class="container" style="text-align:center">
                                    <div class="row">
                                        <div class="col-12" style="padding-top:40px; padding-bottom:40px; font-family: 'Roboto Condensed', sans-serif;color:white;background: linear-gradient(to left, #4776E6, #8E54E9); font-size:50px">
                                            <span>{{ $event->name }}</span>
                                        </div>
                                        <div class="col-12" style="padding-top:30px; padding-bottom:30px; font-family:'Open Sans Condensed', sans-serif; font-size:30px">
                                            <span>12.10.2018</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
  </body>


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
