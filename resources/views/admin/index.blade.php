@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row center">
      <h2>Admin</h2>
    </div>

    @include('admin._caminho')

    <div class="row">
     
        <div class="col s12 m6">
          <div class="card purple darken-2">
            <div class="card-content white-text">
              <span class="card-title">Pacientes</span>
              <p>Pacientes cadastrados no sistema</p>
            </div>
            <div class="card-action">
              <a href="{{route('pacientes.index')}}">Visualizar</a>
            </div>
          </div>
        </div>
     
      
        <div class="col s12 m6">
          <div class="card orange darken-4">
            <div class="card-content white-text">
              <span class="card-title">Prontuarios</span>
              <p>Listar Prontuarios do sistema</p>
            </div>
            <div class="card-action">
              <a href="{{route('agendas.index')}}">Visualizar</a>
            </div>
          </div>
        </div>
       
      </div>


</div>
@endsection
