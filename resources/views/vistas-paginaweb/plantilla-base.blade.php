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
        <li class="breadcrumb-item"><a href="pagereal" class="font-weight-bold">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Name Section</li>
    </ol>
</div>
{{-- fin resumen de entradas-section  --}}


{{-- CUERPO  --}}



 

<!-- copyright bottom -->
@include('paginaweb.footer')
<!-- //copyright bottom -->
</div>
</div>

@include('paginaweb.script')


</body>

</html>