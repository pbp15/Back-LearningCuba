<!DOCTYPE html>
<html lang="en">

    @include('paginaweb.head')

<body>

<div id="app">
<!-- main banner -->
<div class="main-top" id="home">

    {{-- barra social --}}
    @include('paginaweb.barrasocial')

    <!-- header -->
    @include('paginaweb.header')

 <!-- //main header -->   

    <!-- banner -->
    @include('paginaweb.banner')

<!-- //main banner -->
<!-- middle -->
<section class="midd-w3 py-5" id="faq">
    <div class="container py-xl-5 py-lg-3">
        <div class="row">
            <div class="col-lg-7 about-right-faq">
                <h3 class="text-da">En LearningCuba</h3>
                <h6> Te ofrecemos</h6>
           
                <ul class="w3l-right-book mt-4">
                             
                   
                    <li>Orientación Vocacional</li>    
                    <li>Evaluaciones Constantes</li>             
                    <li>Excelente Plana Docente</li>   
                    <li>Clases 100% virtuales</li>
                    <li>Programa de Nivelación Académica</li>
                    <li>Preparación Pre-Universitaria & Escolar</li>
                    <li>Metodología Scrum basado en el aprendizaje remoto</li>
           
                </ul>
                <a href="about.html" class="btn button-style button-style-2 mt-sm-5 mt-4">Read More</a>
            </div>
            <div class="col-lg-5 left-wthree-img text-right">
                <img src="images/b1.png" alt="" class="img-fluid mt-5" />
            </div>
        </div>
    </div>
</section>
<!-- //middle -->
<!-- what we do section -->
<div class="what bg-li py-5" id="what">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold mb-5">Nuestros Ciclos Virtuales</h3>

        <div class="row about-bottom-w3l text-center mt-4">
     
            <div class="col-lg-4 about-grid ciclos">
                <div class="about-grid-main">
                    <img src="images/img5.jpg" alt="" class="img-fluid">
                    <h4 class="my-4">Ciclo Intensivo Verano</h4>                   
                    <a href="about.html" class="button-w3ls btn mt-sm-1 mt-1">Más info</a>
                </div>
            </div>
            <div class="col-lg-4 about-grid my-lg-0 my-5 ciclos">
                <div class="about-grid-main" >
                    <img src="images/img5.jpg" alt="" class="img-fluid">
                    <h4 class="my-4">Ciclo Semestral</h4>
                    <a href="about.html" class="button-w3ls btn mt-sm-1 mt-1">Más info</a>
                </div>
            </div>
            <div class="col-lg-4 about-grid ciclos ">
                <div class="about-grid-main">
                    <img src="images/img5.jpg" alt="" class="img-fluid">
                    <h4 class="my-4">Ciclo El Cole</h4>
                    <a href="about.html" class="button-w3ls btn mt-sm-1 mt-1">Más info</a>
                </div>
            </div>

            <div class="col-lg-4 about-grid mt-4 ciclos">
                <div class="about-grid-main">
                    <img src="images/img5.jpg" alt="" class="img-fluid">
                    <h4 class="my-4">Ciclo Repaso</h4>
                    <a href="about.html" class="button-w3ls btn mt-sm-1 mt-1">Más info</a>
                </div>
            </div>

            <div class="col-lg-4 about-grid mt-4 ciclos">
                <div class="about-grid-main">
                    <img src="images/img5.jpg" alt="" class="img-fluid">
                    <h4 class="my-4">Ciclo Primera Selección</h4>
                    <a href="about.html" class="button-w3ls btn mt-sm-1 mt-1">Más info</a>
                </div>
            </div>
      
            <div class="col-lg-4 about-grid mt-4 ciclos">
                <div class="about-grid-main">
                    <img src="images/img5.jpg" alt="" class="img-fluid">
                    <h4 class="my-4">Ciclo de Nivelación Académica</h4>
                    <a href="about.html" class="button-w3ls btn mt-sm-1 mt-1">Más info</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- //what we do section -->



<!-- services -->
<section class="banner-bottom-w3layouts bg-li py-5" id="services">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold">Servicios TIC's Académicos </h3>
        <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4">En nuestra academia virtual te brindamos lo mejor en Tecnologia para ofrecerte una mejor calidad educativa</p>
        <div class="row pt-lg-4">
            <div class="col-lg-4 about-in text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="bg-clr-w3l">
                            <span class="fa fa-line-chart"></span>
                        </div>
                        <h5 class="card-title mt-4 mb-3">Aula Virtual</h5>
                        <p class="card-text">Plataforma de enseñanza virtual mediante la cual los administrativos,
                            profesores y alumnos disponen de diversas herramientas y recursos educativos de las clases</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 about-in text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="bg-clr-w3l">
                            <span class="fa fa-lightbulb-o"></span>
                        </div>
                        <h5 class="card-title mt-4 mb-3">Plataforma de VideoConferencia</h5>
                        <p class="card-text">Sistema interactivo que permite a varios usuarios mantener una conversación virtual por medio de la
                             transmisión en tiempo real de video, sonido y texto a través de Internet.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 about-in text-center my-lg-0 my-3">
                <div class="card active">
                    <div class="card-body">
                        <div class="bg-clr-w3l">
                            <span class="fa fa-usd"></span>
                        </div>
                        <h5 class="card-title mt-4 mb-3">Soporte TI</h5>
                        <p class="card-text"> Se ofrece asistencia de la infraestructura tecnológica y orientación de los estudiantes y personal</p>
                    </div>
                </div>
            </div>
       
        </div>
    </div>
</section>
<!-- //services -->


<!-- partners -->
<section class="partners py-5" id="partners">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center font-weight-bold"> ¿Por qué elegirnos?</h3>
        <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4">Sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        <div class="row grid-part text-center pt-4">
            <div class="col-md-2 col-4">
                <div class="parts-w3ls">
                    <a href="#"><span class="fa fa-stumbleupon" aria-hidden="true"></span></a>
                    <h4>Feedback Personalizados</h4>
                </div>
            </div>
            <div class="col-md-2 col-4">
                <div class="parts-w3ls">
                    <a href="#"><span class="fa fa-opencart"></span></a>
                    <h4>Seminarios</h4>
                </div>
            </div>
            <div class="col-md-2 col-4">
                <div class="parts-w3ls">
                    <a href="#"><span class="fa fa-id-card-o"></span></a>
                    <h4>Asesorias Personalizadas</h4>
                </div>
            </div>
            <div class="col-md-2 col-4 mt-md-0 mt-4">
                <div class="parts-w3ls">
                    <a href="#"><span class="fa fa-file-text" aria-hidden="true"></span></a>
                    <h4>Materiales Virtuales</h4>
                </div>
            </div>
            <div class="col-md-2 col-4 mt-md-0 mt-4">
                <div class="parts-w3ls">
                    <a href="#"><span class="fa fa-object-group"></span></a>
                    <h4>Simulacros</h4>
                </div>
            </div>
            <div class="col-md-2 col-4 mt-md-0 mt-4">
                <div class="parts-w3ls">
                    <a href="#"><span class="fa fa-ravelry"></span></a>
                    <h4>Tutorias</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //partners -->

<!-- copyright bottom -->
@include('paginaweb.footer')
<!-- //copyright bottom -->
</div>

</div>
@include('paginaweb.script')


</body>

</html>