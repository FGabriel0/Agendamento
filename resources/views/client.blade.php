@extends('layouts.main')

@section('title', 'Agendamento')
    
@section('content')
<div class="client-form">
      <div class="text-client">
        <h1>AGENDAMENTO</h1>
      </div>

        <form class="salao-form">
            <div class="form-group">
              <label for="exampleFormControlInput1">
                <i class="fas fa-user"></i>
                Nome:
              </label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">
                <i class="fas fa-phone-square-alt"></i>
                Número de contato:
              </label>
              <input type="number" class="form-control" id="number" placeholder="Digite seu número">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">
                  <i class="far fa-calendar-alt"></i>
                  Escolha uma Data:
                </label>
                <input type="date" class="form-control" id="date" placeholder="Escolha uma data">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect2">
                  <i class="far fa-clock"></i>
                  Horários Disponiveis:
                </label>
                <select name="horarios" id="horarios" class="form-control">
                    <option>11:30</option>
                    <option>13:00</option>
                </select>
              </div>
             
            <div class="form-group">
              <label for="exampleFormControlSelect2">
                <i class="fas fa-cut"></i>
                Cortes:
              </label>
              <select name="cortes" id="cortes" class="form-control">
                  <option>Social</option>
                  <option>Degrade</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">
                <i class="fas fa-bullhorn"></i>
                Sugestão:
              </label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alguma sugestão para o corte?"></textarea>
            </div>
          </form>
          <button type="submit" class="submit-btn">Enviar</button>
  </div>
  
@include('layouts.footer')

@endsection