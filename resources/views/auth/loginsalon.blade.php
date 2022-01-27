@extends('layouts.main')

@section('title', 'Login')
    
@section('content')

<div class="central">

<div class="salon-login">
   <div class="row">
    <div class="col">
        <img src="img/LOGOJP.jpg" alt="" width="90px">
    </div>
   </div>
        <div class="row">
          <div class="col">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Chave de Acesso</label>
                  <input type="text" class="form-control" id="chave" placeholder="Chave">
                </div>
                <div class="form-group">
                  <button type="submit" class="submit-btn">
                      Acessar
                  </button>
              </form>
     </div>
   </div>
</div>
</div>

@endsection