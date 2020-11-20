@extends('layouts.base', ['footer' => $footer])


@section('content')

<section class="header6 cid-rzCT1xkoZX" id="header6-36">

    

    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-8 align-center">
                
                <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold mbr-white display-1">SESMT</h2><h3 class="mbr-section-subtitle align-center mbr-fonts-style mbr-light pb-3 mbr-white display-7"><strong>Serviço Especializado em Engenharia de Segurança e em Medicina do Trabalho</strong></h3>
            </div>
        </div>
    </div>
    
</section>

<section class="features4 cid-rzCT93DvQx" id="features4-38">

    <div class="container-fluid">   
        <div class="row content-row align-items-center">
            <div class="col-lg-6 text-content">
            <h2 class="mbr-title pt-2 mbr-fonts-style align-center mbr-black display-2"><strong>{{$sesmt[0]['titulo']}}</strong></h2>
                <div class="underline align-center">
                    <div class="line"></div>
                </div>
                <div class="mbr-section-text">
                    <p class="mbr-text pt-3 mbr-light mbr-fonts-style align-center display-7"><strong>
                        {{$sesmt[0]['descricao']}}
                    </strong></p>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                  <div class="col-lg-12 d-flex align-items-center justify-content-center">
                    
                      <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$sesmt[0]['imagem']}}" class="w-25 img-fluid">
                    
                  </div>
                </div>
                
            </div>
            <div class="col-lg-6 media-content">
            <div class="mbr-figure">{!!$sesmt[0]['url']!!}</div>
            </div>
        </div>
    </div>          
</section>

<section class="features12 cid-rzH76p51W2" id="features12-3m">

    <div class="container-fluid">
        <h2 class="mbr-section-title align-left mbr-fonts-style display-2">Nossos Serviços</h2>
        <div class="underline align-left pb-3">
            <div class="line"></div>
        </div>
        
        <div class="row justify-content-center align-items-start pt-5">
            @foreach ($servicos as $item)
            
            <div class="card px-3 py-4 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper flip-card">
                    <div class="card-img">
                        <a href="{{route('servicos.sesmt', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}"><img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$item->imagem}}" alt="" title=""></a>
                        
                    </div>
                    <div class="card-box">
                    <p class="mbr-card-text mbr-fonts-style align-center display-7"><a href="{{route('servicos.sesmt', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}"><strong>{{$item->titulo}}</strong></a><br></p>
                    <div class="mbr-section-btn align-center"><a href="{{route('servicos.sesmt', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}" class="btn btn-black-outline display-4">CONHEÇA</a></div>
                    </div>
                </div>
            </div>
            @endforeach     

        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-rzGMcrA8Tp" id="content1-3b">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 col-lg-10 mbr-fonts-style text-justify display-7">
             {!! $sesmt[0]['texto'] !!}
            </div>
        </div>
    </div>
</section>

<section class="header8 cid-rzH3ND62dD" id="header8-3j">

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="mbr-white col-md-6">
                
                <h2 class="mbr-section-subtitle pb-3 mbr-fonts-style mbr-white text-justify display-7">{!! $sesmt[1]['texto'] !!}</h2>
                
            </div>
            <div class="col-md-6 align-left img-block">
                <div class="mbr-figure">
                <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$sesmt[1]['imagem']}}" alt="Mobirise" title="">
                </div>
            </div>
        </div>
    </div>
    
</section>

{!!$sesmt[2]['texto']!!}

{{-- <section class="mbr-section article content1 cid-rzGN6JCOlO" id="content1-3f">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 col-lg-10 mbr-fonts-style text-justify display-7">
                <div>ite-se que o ERP (Enterprise Resource Planning, que significa “Planejamento dos recursos da empresa”), produzido pelo grupo Soitic foi construído com a função de integrar todos os dados e processos relacionados à saúde ocupacional da sua empresa, tornando funcional e automático a gestão desses dados, facilitando o manuseio e a respectiva transferência.
</div><div>&nbsp;
</div><div>Confira abaixo todas as garantias que circunscrevem a colmeia de segurança e a eficiência correlacionada ao uso efetivo de sistema. Garantias essas que serão estendidas ao empresário parceiro direto da Clínica LACS.</div>
            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="image1 cid-rzGN7pIPHb" id="image1-3g">
    <!-- Block parameters controls (Blue "Gear" panel) -->
    
    <!-- End block parameters -->
    <figure class="mbr-figure container-fluid">
        <div class="image-block" style="width: 35%;">
            <img src="assets/images/metra-677x747.jpg" alt="" title="">
            
        </div>
    </figure>
</section> --}}

{{-- <section class="mbr-section article content1 cid-rzGNjphoJ2" id="content1-3h">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 col-lg-10 mbr-fonts-style text-justify display-7">
                <div>Não se pode deixar de citar a importância dessa facilitação no manuseio dos dados, por que com a vinda do e-Social a transferência desses dados será de suma importância e obrigatória. Até porque o sistema do e-Social exigirá que todos os empresários enviem esses dados ao portal competente.
</div><div>&nbsp;
</div><div>A exposição dessas parcerias devem ser vistas com bons olhos, pois só demonstra a ampla capacidade de atendimento que a Clínica LACS pode oferecer aos seus clientes, independentemente da sua área de atuação.
</div><div>Caro visitante, confira o menu Notícias e tenha acesso a mais informações sobre Saúde e Segurança do Trabalho, entre outros temas Importantes.
</div><div>&nbsp;
</div><div>&nbsp;
</div>

            </div>
        </div>
    </div>
</section> --}}

<!-- <section class="cid-rzH62kqolz mbr-parallax-background" id="header2-3k">

    

    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(13, 105, 81);">
    </div>
    <div class="container-fluid">
        <div class="row justify-content-space-between">
            <div class="col-md-7 text-element">
                <h2 class="mbr-section-title mbr-fonts-style mbr-white mbr-bold display-2">
                    Carta de Apresentação</h2>
                <div class="underline align-left pb-3">
                     <div class="line"></div>
                </div>
                
                
            </div>
            <div class="form-1 col-md-4 col-xl-3" data-form-type="formoid">

            <form class="mbr-form form-with-styler">
            <div class="dragArea row">
            <div class="col-md-12 form-group" data-for="nome">
            <input type="text" name="nome" data-form-field="Name" required="required" class="form-control display-4" placeholder="Coloque o seu Nome" value="" id="nome-header2-3k">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="radio">
            <div class="form-control-label">
            </div>
            <div class="form-check">
            <input type="radio" name="radio" data-form-field="radio" class="form-check-input display-7" value="Pessoa Física" checked="" id="radio-header2-3k">
            <label class="form-check-label display-7">Pessoa Física</label>
            </div>
            <div class="form-check">
            <input type="radio" name="radio" data-form-field="radio" class="form-check-input display-7" value="Pessoa Jurídica" id="radio-header2-3k">
            <label class="form-check-label display-7">Pessoa Jurídica</label>
            </div>
            </div>
            <div class="col-md-12 input-group-btn">
            <button type="submit" class="btn btn-form btn-primary display-4">Receber minha carta</button>
            </div>
            </div>
            </form>
            </div>
        </div>
    </div>
              
</section> -->
@component('pages.forms-componentes.orcamento')
@endcomponent


@if(!empty($posts))
    @component('pages.forms-componentes.noticiasRelacionadas', ['posts' => $posts])
    @endcomponent
@endif


    
@endsection