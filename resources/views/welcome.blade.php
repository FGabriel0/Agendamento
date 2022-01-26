@extends('layouts.main')

@section('title', 'Jp Barbearia')
    
@section('content')
<div class="container">
    <div class="banner">
            <h1>JP Barbearia</h1>     
            <div class="banner-img">            
                <img src="img/LOGOJP.jpg" alt="logo">
            </div>
         <p class="mb-0">Agendamento</p>   
        <div class="banner-submit">
            <button class="button-btns"><a href="#">Profissional do salão</a></button>
            <button class="button-btns"><a href="#">Agendar</a></button>
        </div>
    </div>
        <div class="sessao-header">
            <h1>Cortes Designs</h1>
        </div>

    <div class="card-deck">
        <div class="card">
          <img src="img/corte.jpg" class="card-img-top" alt="corte">
          <div class="card-body">
            <h5 class="card-title">Design 1</h5>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="img/corte2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Design 2</h5>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="img/corte3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Design 3</h5>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
</div>


@include('layouts.footer')

@endsection





