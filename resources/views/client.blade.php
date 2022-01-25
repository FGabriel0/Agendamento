@extends('layouts.main')

@section('title', 'Agendamento')
    
@section('content')
      <div class="text-client">
        <h1>AGENDAMENTO</h1>
      </div>

        <form class="salao-form">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nome:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Número de contato:</label>
              <input type="number" class="form-control" id="number" placeholder="Digite seu número">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Escolha uma Data:</label>
                <input type="date" class="form-control" id="date" placeholder="Escolha uma data">
              </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Cortes:</label>
              <select name="cortes" id="cortes" class="form-control">
                  <option>Social</option>
                  <option>Degrade</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Sugestão:</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alguma sugestão para o corte?"></textarea>
            </div>
          </form>
          <button type="submit" class="submit-btn">Enviar</button>

 @include('layouts.footer')

@endsection