<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
        <title> Posting </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 86px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
                animation-name: color;
                animation-duration: 4s;
                animation-iteration-count: infinite;
            }
            @keyframes color {
               0%   {color: rgb(251, 13, 13);}
               25%  {color: rgb(76, 250, 47);}
               50%  {color: blue;}
               100% {color: magenta;}
            }
            body{
            	display:flex;
            	flex-direction:column;
            	min-height: 100vh; /* USAR EL 100% DEL VIEWPORT EN ALTURA*/
            }
            main{
            	width:100%;
            	flex: 1 ;  /* RELLENAR EL CONTENIDO CON FLEX:1 */
            }
            /*-------------------------*/
            /* FOOTER
            /*-------------------------*/
            footer{
            	width:100%;
            	height:70px;
            }
            .footer-nav {
              background-color: #3f3f6a;
              display: flex;
              flex-wrap: wrap;
              flex-direction: row;
              justify-content: space-between;}

              .footer-nav ul {
                display: flex;
                flex-wrap: wrap;
                flex-direction: row;
              }

              .footer-nav li {
                padding: 10px 10px;
                list-style-type: none;
              }
              .footer-nav li a, .footer-nav li {
                color: #fff;
                text-decoration: none;
                padding-left: 10px;
                padding-right: 5px;
              }

        </style>
    </head>
    <body>
      <main>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                        <a href="FAQs">FAQs</a>
                        <a href="Contact">Contact</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Posting
                </div>

                </div>
            </div>
        </div>
      </main>
        @include('partials/footer')
    </body>
</html>
