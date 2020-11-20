@extends('layouts.base', ['footer' => $footer])

@section('content')

<section class="header6 cid-rzCA0jLwcG" id="header6-2n">

    

    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-md-10 align-center">
                
                <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold mbr-white display-1">Terapias Integrativas Quânticas</h2>
            </div>
        </div>
    </div>
    
</section>

<section class="cid-rzCA6yyqJM" id="content7-2o">

    

    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-8 align-center">
            <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold display-2">@if(!empty($terapia->descricao)) {{$terapia->descricao}} @endif</h2>
            <h3 class="mbr-section-subtitle align-center mbr-fonts-style mbr-light pb-3 display-7"><strong>Conheça nossos terapeutas!</strong></h3>
                
            </div>
        </div>
    </div>
</section>

@if(!empty($terapia->imagem))
<section class="image1 cid-rzCAeZ1ibT" id="image1-2p">
    <!-- Block parameters controls (Blue "Gear" panel) -->
    
    <!-- End block parameters -->
    <figure class="mbr-figure container-fluid">
        <div class="image-block" style="width: 50%;">
                <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$terapia->imagem}}" alt="" title="">
                <div class="img-caption">
                    <p class="mbr-fonts-style align-left mbr-white mbr-bold display-7">
                        {{$terapia->descricao}}
                    </p>
                </div>
            </div>
        </figure>
    </section>
@endif

<section class="mbr-section article content1 cid-rzCAwdog0H" id="content1-2q">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 col-lg-10 mbr-fonts-style display-7 text-justify">
                    {!! $terapia->texto !!}
            </div>
        </div>
    </div>
</section>


@component('pages.forms-componentes.duvida')
@endcomponent

@if(!empty($posts))
    @component('pages.forms-componentes.noticiasRelacionadas', ['posts' => $posts])
    @endcomponent
@endif

@endsection