<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Developer's Band</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> -->

        <!--Plugins css-->
        <link rel="stylesheet" href=" {{ asset('css/plugins.css') }} ">
        <!--Custom Styles-->    
        <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">

        <style>
            body, .form-control {
                background-color: #000000 !important;
                color: #FFFFFF !important;
            }

            h1, h2, h3, h4, h5 {
                color: #FFFFFF !important;
            }

            .team-box.no-hover .team-content {
                background-color: #000000 !important;   
                color: #FFFFFF !important;
                box-shadow: none !important;
                border: 1px solid #FFFFFF !important;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <app-component></app-component>
        </div>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
        <script src="{{ asset('js/app.js') }}"></script>        

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <!--Bootstrap Core-->
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!--to view items on reach-->
        <script src="{{ asset('js/jquery.appear.js') }}"></script>
        <!--Equal-Heights-->
        <script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
        <!--Owl Slider-->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!--number counters-->
        <script src="{{ asset('js/jquery-countTo.js') }}"></script>
        <!--Parallax Background-->
        <script src="{{ asset('js/parallaxie.js') }}"></script>
        <!--Cubefolio Gallery-->
        <script src="{{ asset('js/jquery.cubeportfolio.min.js') }}"></script>
        <!--FancyBox popup-->
        <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
        <!-- Video Background-->
        <script src="{{ asset('js/jquery.background-video.js') }}"></script>
        <!--TypeWriter-->
        <script src="{{ asset('js/typewriter.js') }}"></script>
        <!--Particles-->
        <script src="{{ asset('js/particles.min.js') }}"></script>
        <!--WOw animations-->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!--Revolution SLider-->
        <script src="{{ asset('js/revolution/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('js/revolution/jquery.themepunch.revolution.min.js') }}"></script>
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script src="{{ asset('js/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.video.min.js') }}"></script>
    </body>
</html>
