@extends('layouts.main')

@section('title', 'Profissional')
    
@section('content')

<div class="table-responsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente:</th>
            <th scope="col">Contato:</th>
            <th scope="col">Data:</th>
            <th scope="col">Corte:</th>
            <th scope="col">Horário:</th>
            <th scope="col">Sugestão:</th>
            <th>
               <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    Ações
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <button class="dropdown-item">Deletar</button>
                    </div>
                  </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>...</td>
            <td>...</td>
            <td>...</td>
          </tr>
        </tbody>
      </table>
</div>
  @include('layouts.footer')

@endsection