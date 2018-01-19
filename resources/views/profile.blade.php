<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css">

    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.css"/> -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <link rel="stylesheet" type="text/css" href="/css/profile.css">

    <title>{{ $user->name }}</title>
    <style media="screen">
    .nav-text{
        color:white!important;
    }
    </style>
</head>
<body style="background-image:url('/images/background.jpg')">

    <!-- navbar starts-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light navbar-style">
        <a class="navbar-brand" href="index.html"><img src="/images/logo.png" style="width:150px;height:50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <ul style="right:0px; position:absolute; color:#004085" class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link nav-text" style="" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link nav-text" href="gallery.html">GALLERY</a>
            </li> -->
        </ul>

    </div>
</nav>

<!--navbar ends-->

<div class="container">
    <div class="row">
        <div class="col-12 profile-container-1">
            <div class="container card-1-container">
                <div class="row">
                    <div class="col-12">
                        <div class="card" style=" box-shadow: 0 13px 18px rgba(94, 94, 94, 0.35);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12" style="padding:20px; background:linear-gradient(to left, #0f0c29, #302b63, #24243e);height: 30vh">
                                        <div class="image-box" style="background-image: url(/images/profile-logo.svg);background-repeat:no-repeat;background-size:contain;position: absolute;margin-top:15vh;left:0;right:0;border-color:white;border-style:solid;border-width:1.5px;box-shadow: 0 2px 3px rgba(0,0,0,.2);background-color:white;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 profile-info-1" style="margin-top:10vh">
                                        <span>{{ $user->name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:3vh">
                    <div class="col-12">
                        <div class="card">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12" style="text-align: center;font-family: 'Roboto Condensed', sans-serif;font-size:5vh; ">
                                        <span>INFO</span>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:8vh;text-align:center;">
                                    <div class="col-12 col-md-6" style="font-family: 'Open Sans Condensed', sans-serif; font-size:3vh;border-left: solid; border-color:#2626262; "  >
                                        <span><b>Email:</b> </span>
                                        <span>{{ $user->email }}</span>
                                    </div>
                                    <div class="col-12 col-md-6" style="font-family: 'Open Sans Condensed', sans-serif; font-size:3vh; border-left: solid; border-color:#262626; "  >
                                        <span><b>Age:</b> </span>
                                        <!-- <span>{{ $user->age }}</span> -->
                                        <span>20</span>
                                    </div>
                                    <!-- <div class="col-12 col-md-6" style="font-family: 'Open Sans Condensed', sans-serif; font-size:3vh; border-left: solid; border-color:#262626; "  >
                                        <span><b>Facebook Link</b> </span>
                                        <span><a href="{{$user->facebook_link}}">{{$user->facebook_link}}</a></span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row" style="margin-top:3vh">
                <div class="col-12 ">
                <div class="card">
                <div class="container">
                <div class="row">
                <div class="col-6" style="text-align: center; font-size:10vh;">
                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
            </div>
            <div class="col-6" style="text-align: center; font-size:10vh;">
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
        </div>
    </div>
</div>
</div>
</div>
</div> -->
<div class="row" style="margin-top:3vh">
    <div class="col-12 ">
        <div class="card">
            <div class="container">
                <div class="row">
                    <div class="col-12" style="text-align:center; font-family:'Roboto Condensed', sans-serif;font-size:5vh; ">
                        <span>GOING TO</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="padding-bottom:20px">
                        <ul class="list-group">
                            @foreach($user->visitingEvents as $event)
                            <li class="list-group-item">
                                <a href="{{ route('events.show',['event'=>$event->id]) }}" style="display: block; padding:5px; font-family:'Open Sans Condensed', sans-serif; font-size:30px" class="col-12">
                                    <span>{{ $event->name }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</div>
</div>
</div>


<!-- Optional JavaScript -->
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="https://use.fontawesome.com/aa897c8e12.js"></script>

<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.min.js"></script> -->
<script type="text/javascript" src="/js/script.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>
