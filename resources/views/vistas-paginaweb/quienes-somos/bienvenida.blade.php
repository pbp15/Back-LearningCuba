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

 <div class="banner_w3lspvt-2">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('pagereal')}}" class="font-weight-bold">Inicio</a></li>
        <li class="breadcrumb-item" aria-current="page">Quienes Somos</li>
        <li class="breadcrumb-item" aria-current="page">Bienvenida</li>
    </ol>
</div>

{{-- CUERPO  --}}
<div class="about-inner py-5">
    <div class="container pb-xl-5 pb-lg-3">
        <div class="row py-xl-4">
            <div class="col-lg-5 about-right-faq pr-5">
                <h6>En LearningCuba te damos</h6>
                <h3 class="mt-2 mb-3"> Bienvenida</h3>
                <p class="mb-3 text-justify"> Las experiencias de la etapa académica  van marcando el camino de nuestras vidas,
                     en donde se comparten alegrías, se adquieren nuevos conocimientos, se desarrollan habilidades y destrezas, 
                     se descubre el valor del servicio y entrega a los demás.
                    Por lo que día a día transcurre esta etapa importante y decisiva en la formación académica y de la personalidad 
                    de cada estudiante.Cuya educación en las manos de nuestro personal educativo, siendo estos los
                     principales guias y educadores de sus hijos.</p>
            

                <strong class="mt-2">Para el público y familia que recien nos conoce </strong>
                <p class="mt-2 mb-3 text-justify ">Esperamos que en nuestra página encuentren información que les ayude y oriente en la
                     importante decisión que están a punto de tomar, de la que dependerá la educación y formación de sus hijas.</p>
                
                     
                <strong class="mt-2" >Para quienes ya forman parte de la familia LearningCuba</strong>
                <p class="mt-2  text-justify">Estamos a su disposición  para brindarle toda la información necesaria, que les permitirá vincularse en el día a día con nuestra Academia</p>
     
            </div>
            <div class="col-lg-7 welcome-right text-center mt-lg-0 mt-5">
                <img src="images/about.png" alt="" class="img-fluid" />
            </div>
        </div>
    </div>
</div>

 {{-- FIN CUERPO  --}}

<!-- copyright bottom -->
@include('paginaweb.footer')
<!-- //copyright bottom -->
</div>
</div>

@include('paginaweb.script')


</body>

</html>