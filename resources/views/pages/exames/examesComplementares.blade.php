@extends('layouts.base', ['footer' => $footer])


@section('content')

<section class="header6 cid-rzC7zaWdPw" id="header6-1m">

    

    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-8 align-center">
                
                <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold mbr-white display-1">Exames Laboratoriais</h2>
            </div>
        </div>
    </div>
    
</section>

<section class="cid-rzC82j7AQZ" id="content7-1p">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-8 align-center">
                <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold display-2">
                    {{$exame->titulo}}</h2>
                <h3 class="mbr-section-subtitle align-center mbr-fonts-style mbr-light pb-3 display-7"><strong>@if(!empty($exame->descricao)) {{$exame->descricao}} @endif</strong></h3>
                
            </div>
        </div>
    </div>
</section>

<section class="image1 cid-rzC7WSIvHd" id="image1-1o">
    <!-- Block parameters controls (Blue "Gear" panel) -->
    
    <!-- End block parameters -->
    <figure class="mbr-figure container-fluid">
        <div class="image-block" style="width: 40%;">
                <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$exame->imagem}}" alt="" title="">
            <div class="img-caption">
            <p class="mbr-fonts-style align-left mbr-white mbr-bold display-7">{{$exame->titulo}}</p>
            </div>
        </div>
    </figure>
</section>

<section class="mbr-section article content1 cid-rzC82MOFDh" id="content1-1q">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 col-lg-10 mbr-fonts-style display-7 text-justify">
                {!! $exame->texto !!}
            </div>
        </div>
    </div>
</section>

{{-- <section class="mbr-section article content5 cid-rzC86vUeDR" id="content5-1r">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ul>
                    <li><strong>17 BETA ESTRADIOL</strong></li>
                    <li><strong>ACIDO DELTA AMINO- LEVULINICO= ALA</strong></li>
                    <li><strong>ACIDO FÓLICO</strong></li>
                </ul>
            </div>
        </div>
    </div>
</section> --}}

@component('pages.forms-componentes.duvida')
@endcomponent

@if(!empty($posts))
    @component('pages.forms-componentes.noticiasRelacionadas', ['posts' => $posts])
    @endcomponent
@endif

@endsection