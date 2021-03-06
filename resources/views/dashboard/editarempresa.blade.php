@extends('layouts.dash')

@section('content')

<div class="main-content">
        <form action="{{ route('actualizarempresa' , [$empresa->id]) }}" method="post">
                @csrf
     <!-- HEADER -->
      <div class="header">
        <div class="container-fluid">

                
          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">
                
                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Bienvenido, {{ title_case(Auth::user()->name) }} {{ title_case(Auth::user()->apellido) }}
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                  Editar Empresa {{ title_case($empresa->nombre) }}
                </h1>

              </div>
              <div class="col-auto">
               
                <!-- Button trigger modal -->
              
            
                    <button type="submit" class="btn btn-primary">
                            Guardar Cambios
                    </button>
                

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

        </div>
      </div> <!-- / .header -->
      
      <!-- CARDS -->
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-12">
            
            <!-- Goals -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h4 class="card-header-title">
                      Editar Empresa  {{ title_case($empresa->nombre) }}
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Button -->
                    <!--
                    <a href="#!" class="btn btn-sm btn-white">
                      Export
                    </a>
                    -->

                  </div>
                </div> <!-- / .row -->
              </div>

              <div class="container">
                <div class="row">
                    <div class="col">
                        
                        <div class="form-group">
                            <label for="nombreempresa">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombreempresa" placeholder="Nombre de la empresa" value="{{ $empresa->nombre }}">
                            <small class="form-text text-muted">Nombre de la empresa</small>
                        </div>
                    </div>

                    <div class="col">
                    <div class="form-group">
                            <label for="logoempresa">Logotipo</label>
                            <input type="file" name="logo" class="form-control" id="logoempresa" placeholder="Logotipo" value="{{ $empresa->logo }}">
                            <small class="form-text text-muted">Logotipo de la empresa</small>
                            </div>
                    </div>
                </div>


                <div class="row">
                       <div class="col">
                            <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="10">{{ $empresa->descripcion }}</textarea>
                                    <small class="form-text text-muted">Descripción de la empresa</small>
                            </div>
                        </div> 
                </div>
                
              </div>
                
              
            </div>

          
        </div> <!-- / .row -->
      </div>
    </form>
    </div>

@endsection