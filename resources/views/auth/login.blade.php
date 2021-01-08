@extends('auth.contenido')

@section('login')
<div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-group mb-0">
        <div class="card p-4">
        <form>
          <div class="card-body">
            <h1>Acceder</h1>
            <p class="text-muted">Control de acceso al sistema</p>
            <div class="form-group mb-3">
              <span class="input-group-addon"><i class="icon-user"></i></span>
              <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
            </div>
            <div class="form-group mb-4">
              <span class="input-group-addon"><i class="icon-lock"></i></span>
              <input type="password" name="clave" id="clave" class="form-control" placeholder="Password">
            </div>
            <div class="row">
              <div class="col-6">
                <button type="submit" class="btn btn-primary px-4">Acceder</button>
              </div>
            </div>
          </div>
        </form>
        </div>
        <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
          <div class="card-body text-center">
            <div>
              <h2>Sistema de Mesa de Partes Virtual- MDA</h2>
              <p>Sistema de  trámite documentario municipal</p>
              <a href="https://www.udemy.com/user/juan-carlos-arcila-diaz/" target="_blank" class="btn btn-primary active mt-3">Ver el curso!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
