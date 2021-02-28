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



{{-- CUERPO  --}}



 

<!-- copyright bottom -->
@include('paginaweb.footer')
<!-- //copyright bottom -->
</div>
</div>

@include('paginaweb.script')


</body>

</html>