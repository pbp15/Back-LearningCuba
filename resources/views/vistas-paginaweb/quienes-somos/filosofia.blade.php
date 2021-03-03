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

  {{-- resumen de entradas-section --}}
  <div class="banner_w3lspvt-2">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('pagereal')}}" class="font-weight-bold">Inicio</a></li>
        <li class="breadcrumb-item" aria-current="page">Quienes Somos</li>
        <li class="breadcrumb-item" aria-current="page">Filosofia</li>
    </ol>
</div>
{{-- fin resumen de entradas-section  --}}

{{-- CUERPO  --}}

<div class="about-inner py-5">
    <div class="container pb-xl-5 pb-lg-3">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="mb-4">Mision</h2>
                <p class="text-justify border border-success rounded py-4 px-4 ">Educar y formar con disciplina y exigencia académica a los estudiantes para que actúen con ética y asertivamente ante los desafios del mundo actual, mediante propuestas pedagógicas innovadoras y
                     de calidad, que permitan el desarrollo de competencias y actitudes conducentes al éxito.</p>
            </div>

            <div class="col-md-8 text-center mt-4  ">
                <h2 class="mb-4">Vision</h2>
                <p class="text-justify  border border-success rounded   py-4 px-4" >Ser una institución lider a nivel nacional, con los más exigentes estándares de calidad, innovadora, emprendedora, orientada a desarrollar la calidad educativa y la equidad, brindando a los estudiantes una educación integral con valores cristianos, vocación de servicio, que sean críticos, 
                    ecoeficientes, creativos, responsables, solidarios e impulsores del desarrollo sostenible del pais.</p>
            </div>

        </div>     
        
    </div> 
</div> 


 

<!-- copyright bottom -->
@include('paginaweb.footer')
<!-- //copyright bottom -->
</div>
</div>

@include('paginaweb.script')


</body>

</html>