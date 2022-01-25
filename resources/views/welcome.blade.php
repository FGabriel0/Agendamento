@extends('layouts.main')

@section('title', 'Jp Barbearia')
    
@section('content')
    <div class="banner">
        <h1>JP Barbearia</h1>  
        
        
        <div class="banner-img">
            <img src="img/LOGOJP.jpg" alt="">
        </div>

        <p>Agendamento</p>

    <div class="banner-submit">
        <button class="button-btns"><a href="#">Profissional do salão</a></button>
        <button class="button-btns"><a href="#">Agendar</a></button>
    </div>
</div>

<section class="sessao-projetos">
    <div class="sessao-header">
        <h1>Cortes Designs</h1>
    </div>

    <div class="projetos">
        <div class="card">
            <div class="card-img-wrapper">
                <img src="img/corte.jpg" alt="imagem do projeto todo">
            </div>
        <div class="card-infor">
            <h2>Design 1</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At magnam laboriosam ab ad ipsum a consequuntur vero in voluptate explicabo alias odio reiciendis temporibus, sed sit inventore eos neque praesentium!</p>
        </div>
    </div>
        <div class="card">
        <div class="card-img-wrapper">
            <img src="img/corte2.jpg" alt="">
        </div>
        <div class="card-infor">
            <h2>Design 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore minus ipsam deleniti excepturi libero magnam quod iusto expedita ea accusantium doloribus odio dolor eum, ratione, a explicabo. Asperiores, cumque magni!</p>
            </div>
        </div>
        <div class="card">
        <div class="card-img-wrapper">
            <img src="img/corte3.jpg" alt="">
        </div>
        <div class="card-infor">
            <h2>Design 3</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, suscipit. Nobis, iusto facere sequi amet quos omnis minima reprehenderit qui in eligendi dignissimos vitae maiores ad natus? Itaque, provident ipsam!</p>
            </div>
        </div>
    </div>
</section>



@include('layouts.footer')

@endsection





