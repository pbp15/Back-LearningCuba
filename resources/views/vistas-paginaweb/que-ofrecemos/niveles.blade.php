<!DOCTYPE html>
<html lang="en">

<head>
	<title>I.E.P "Einstein"-Tarma </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stilos.css">
</head>

<body>
	<div id="app">

        @include('paginaweb.header')
    

        <section class="ftco-section">
            <div class="container-fluid px-4">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4"><span>Niveles</span> Educativos</h2>
                        <p>Los estudiantes descubren su característica de niño (a) y se establece una ruta hacia resultados de 
                            los próximos niveles con su desarrollo potencial biológico, afectivo, cognitivo y social de toda persona.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 course ftco-animate">
                        <div class="img" style="background-image: url(images/portada3.jpg);"></div>
                        <div class="text pt-4">
                       
                            <h3 class="text-center"><a href="#">Inicial</a></h3>
                            <p>Los estudiantes descubren su característica de niño (a) y se establece una ruta hacia resultados de los próximos niveles con su desarrollo potencial biológico, afectivo,
                                 cognitivo y social de toda persona.</p>
                            <p class="text-center" ><a href="{{route('inicial')}}" class="btn btn-primary">Ver más</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 course ftco-animate">
                        <div class="img" style="background-image: url(images/portada1.jpg);"></div>
                        <div class="text pt-4">
                       
                            <h3 class="text-center"><a href="#">Primaria</a></h3>
                            <p>En los primeros grados se desarrolla en progresión de la transición de los estudiantes de un nivel a otro de manera articulada, desarrollando sus
                                 competencias y capacidades de acuerdo a los enfoques del proceso de enseñanza aprendizaje.</p>
                            <p class="text-center" ><a href="{{route('primaria')}}" class="btn btn-primary">Ver más</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 course ftco-animate">
                        <div class="img" style="background-image: url(images/sec1.jpg);"></div>
                        <div class="text pt-4">
                       
                            <h3 class="text-center"><a href="#">Secundaria</a></h3>
                            <p>Se afianza los aprendizajes y se forma para la vida,
                                 reafirmando su personalidad para asumir los retos de la vida.</p>
                            <p class="text-center" ><a href="{{route('secundaria')}}" class="btn btn-primary">Ver más</a></p>
                        </div>
                    </div>   
                    
                    <div class="col-md-3 course ftco-animate">
                        <div class="img" style="background-image: url(images/sec2.jpg);"></div>
                        <div class="text pt-4">
                            
                            <h3 class="text-center"><a href="#">Pre-Universitario</a></h3>
                            <p>Se  brindan todas las capacidades y conocimientos para que pueda postular a un centro superior y rendir optimamente sus aptitudes</p>				
                            <p class="text-center"><a href="#" class="btn btn-primary">Ver más</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        @include('paginaweb.footer')

    </div>


    </div>
    <script src="js1/app.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
    {{-- <script src="js/google-map.js"></script> --}}
    <script src="js/main.js"></script>


</body>

</html>