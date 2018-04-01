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
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!-- <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script> -->

    <title>Evento</title>
  </head>
  <body style="background-color:#dee2e6">
    <!-- navbar starts-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light navbar-style">
          <a class="navbar-brand" href="index.html"><img src="/images/logo.png" style="width:150px;height:50px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <ul style="right:0px; position:absolute; color:#004085" class="navbar-nav">
                @if(Auth::check())
              <li class="nav-item">
                <a class="nav-link nav-text" style="color:white" href="{{ route('dashboard') }}">Dashboard</a>
              </li>
              @endif
              <!-- <li class="nav-item">
                <a class="nav-link nav-text" href="gallery.html">GALLERY</a>
              </li> -->
              @if(!Auth::check())
              <li class="nav-item sign-up-border">
                <a class="nav-link nav-text" style="color:white" href="{{ route('register') }}">LOGIN</a>
              </li>
              @endif
            </ul>

          </div>
        </nav>

        <!--navbar ends-->
        <div class="jumbotron jumbotron-fluid" style="padding-top:30vh; background: linear-gradient(to left, #0f0c29, #302b63, #24243e);color:white; text-align:center; font-family: 'Roboto Condensed', sans-serif;">
            <div class="container">
                <h1 class="display-4">{{ $event->name }}</h1>
                @if($event->organiser->id != auth()->user()->id)
                @if($event->visitors()->where("user_id",auth()->user()->id)->count() == 0)
                    <a href="{{ route('event_visit',['event_id'=>$event->id]) }}" class="btn btn-primary">Go to event</a>
                @else
                    <a href="{{ route('event_unvisit',['event_id'=>$event->id]) }}" class="btn btn-danger">Unsubscribe</a>
                @endif
                @endif
                @if($event->organiser->id == auth()->user()->id)
                    <a href="{{ route('presenters.create',['event_id'=>$event->id]) }}" class="btn btn-primary">Edit Presenters</a>
                @endif
            </div>
        </div>
        <div class="container" style="background-color:white;position:absolute; margin-top:-60px;margin-left:108px;     box-shadow: -2px 2px 2px #868e96">
            <div class="row">
                <div class="col-12">
                    <div class="container" style="text-align:center; padding-top:30px; padding-bottom:30px">
                        <div class="row">
                            <div class="col-4" style="border-style: solid;border-width:1px;border-right: none;border-color:grey">
                                <div class="container.fluid">
                                    <div class="row">
                                        <div class="col-12" style="background: linear-gradient(to right, #ff9966, #ff5e62);padding:20px; font-family: 'Roboto Condensed', sans-serif; font-size:50px;color:white">
                                            <span>ORGANISER</span>
                                        </div>
                                        <div class="col-12" style="padding:20px;font-family: 'Open Sans Condensed', sans-serif;font-size:30px;">
                                            {{ $event->organiser->name }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" style="border-style: solid; border-width:1px; border-right: none;border-color:grey">
                                <div class="container.fluid">
                                    <div class="row">
                                        <div class="col-12" style="background: linear-gradient(to right, #ff9966, #ff5e62);padding:20px; font-family: 'Roboto Condensed', sans-serif; font-size:50px;color:white">
                                            <span>DATE</span>
                                        </div>
                                        <div class="col-12" style="padding:20px;font-family: 'Open Sans Condensed', sans-serif;font-size:30px; ">
                                            {{ $event->date }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" style="border-style: solid; border-width:1px;border-color:grey">
                                <div class="container.fluid">
                                    <div class="row">
                                        <div class="col-12" style="background: linear-gradient(to right, #ff9966, #ff5e62);padding:20px; font-family: 'Roboto Condensed', sans-serif; font-size:50px; color:white">
                                            <span>VENUE</span>
                                        </div>
                                        <div class="col-12" style="padding:20px;font-family: 'Open Sans Condensed', sans-serif;font-size:30px">
                                            {{ $event->location }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="box-shadow: -2px 2px 2px #868e96; margin-top:38vh;background-color:white;">
            <div class="row">
                <div class="col-12" style="text-align:center;font-family: 'Roboto Condensed', sans-serif;font-size:60px;  ">
                    ABOUT
                </div>
                <div class="col-12" style="text-align:center; padding-top:20px; padding-bottom:20px">
                    <!-- "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." -->
                    {{ $event->details }}
                </div>
            </div>
        </div>
        <div class="container" style="box-shadow: -2px 2px 2px #868e96; margin-top:4vh;background-color:white;">
            <div class="row">
                <div class="col-12" style="text-align:center;font-family: 'Roboto Condensed', sans-serif;font-size:60px;">
                    PRESENTERS
                </div>
                <div class="col-12" style="padding-bottom:20px">
                    <ul class="list-group">
                        @foreach($event->presenters as $presenter)
                        <li class="list-group-item">
                            <a href="{{ route('profile',['user_id'=>$presenter->id]) }}" style="display: block; padding:5px; font-family:'Open Sans Condensed', sans-serif; font-size:30px" class="col-12">
                                <span>{{ $presenter->name }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
        <div class="container" style="box-shadow: -2px 2px 2px #868e96; margin-top:4vh;background-color:white;">
            <div class="row">
                <div class="col-12" style="text-align:center;font-family: 'Roboto Condensed', sans-serif;font-size:60px;">
                    ATTENDEE
                </div>
                <div class="col-12" style="padding-bottom:20px">
                    <ul class="list-group">
                        @foreach($event->visitors as $visitor)
                        <li class="list-group-item">
                            <a href="{{ route('profile',['user_id'=>$visitor->id]) }}" style="display: block; padding:5px; font-family:'Open Sans Condensed', sans-serif; font-size:30px" class="col-12">
                                <span>{{ $visitor->name }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>

  </body>

  <!-- Optional JavaScript -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.js"></script> -->
    <script type="text/javascript" src="/js/script.js"></script>
    <!-- <script src="ckLine-master/jquery.ckLine.min.js"></script> -->
    <script src="/js/bootstrap.js"></script>
  </body>
</html>
