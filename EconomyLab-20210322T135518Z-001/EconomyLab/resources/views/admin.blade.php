<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin panel</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset("css/main.css")}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amiko|Andika|Anton|Arimo|Asap|Basic|Cabin|Cabin+Condensed|Cantora+One|Didact+Gothic|Fira+Sans|Fira+Sans+Condensed|Fira+Sans+Extra+Condensed|Francois+One|Jaldi|Kanit|Libre+Franklin|Maven+Pro|Mitr|Montserrat|Montserrat+Alternates|Muli|News+Cycle|Noto+Sans|Nunito|Nunito+Sans|Oswald|Pattaya|Prompt|Quicksand|Raleway|Roboto+Condensed|Sansita|Source+Sans+Pro|Varela+Round&display=swap" rel="stylesheet"> 
  

    
</head>


<body style="background-color: #343A40;">
    <div class="headr" style="position: relative;">
        <a style="text-decoration: none;" id="first" href="{{url('/home/admin')}}"> Adding Page</a>
        <a style="text-decoration: none;" href="{{url('/home/table')}}"> Table Page</a>
    </div>

    @section('content')
    @show
    
    




    <script src="jquery-3.4.1.min.js"></script>
    <nav style="margin-top: 5%; margin-left: 10%;" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                                

                                <div style="
                                 
                                 width: 40%;
                                 margin-left: 2%;
                                 font-size: 36px; 
                                 font-family: 'Montserrat';
                                 

                                   " class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a id="logout" style="color: white;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            
                        @endguest
                    
                </div>
            </div>
        </nav>
        
</body>

</html>