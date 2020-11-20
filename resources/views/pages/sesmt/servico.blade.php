@extends('layouts.base',['footer' => $footer])


@section('content')


<section class="header6 cid-rzHi1ypnPM" id="header6-3q">

    

    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-md-10 align-center">
                
                <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold mbr-white display-1">Nossos Serviços</h2>
            </div>
        </div>
    </div>
    
</section>

<section class="cid-rzHi3lg6QT" id="content7-3r">

    

    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-md-10 align-center">
            <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold display-2">{{$servico->titulo}}</h2>
            <h3 class="mbr-section-subtitle align-center mbr-fonts-style mbr-light pb-3 display-7"><strong>{{$servico->descricao}}</strong></h3>
                
            </div>
        </div>
    </div>
</section>

{!!$servico->texto!!}
{{-- <section class="image1 cid-rzHi6AKaJx" id="image1-3s">
    <!-- Block parameters controls (Blue "Gear" panel) -->
    
    <!-- End block parameters -->
    <figure class="mbr-figure container-fluid">
        <div class="image-block" style="width: 55%;">
            <img src="assets/images/segurana-no-trabalho-641x326.jpg" alt="" title="">
            
        </div>
    </figure>
</section> --}}

{{-- <section class="mbr-section article content1 cid-rzHi7u4lh5" id="content1-3t">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 col-lg-10 mbr-fonts-style display-7 text-justify">
                <div>A Clínica LACS, visando oferecer o suporte necessário aos seus clientes empresariais, os empregadores/empresários, cujos ramos de atuação são milhares, decidiu investir na prestação de diversos serviços necessários à saúde ocupacional das empresas.
</div><div>
</div><div>Nesse sentido, segue a lista de serviços que a Clínica LACS está preparada para fornecer aos seus clientes.
</div><div>
</div><div>Atendemos todas as normas regulamentadoras, isto é, da Norma Regulamentadora nº 01 à nº 36. Confira-se:</div>
            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="mbr-section article content5 cid-rzHies6sPM" id="content5-3y">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7 text-justify">
                <ul>
                    <li><strong>LTCAT- Laudo Técnico De Condições Ambientais Do Trabalho;</strong></li>
                    <li><strong>PPP- Perfil Profissiográfico Previdenciário;</strong></li>
                    <li><strong>PCMSO - Programa De Controle Medico Ocupacional;</strong></li>
                </ul>
            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="mbr-section article content1 cid-rzHi9OrABY" id="content1-3v">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 col-lg-10 mbr-fonts-style display-7 text-justify">
                <div>Nas disposições dessas Normas Regulamentadoras resta previsto, também, a necessidade da realização de diversos cursos e/ou treinamentos para garantir a segurança e saúde do trabalhador e o cumprimento da legislação trabalhista pelas empresas. Nesse sentido segue o rol de cursos e treinamentos que a Clínica LACS oferece, atualmente:</div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content5 cid-rzHibcKuQH" id="content5-3x">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ul>
                    <li><strong>Curso De CIPA (NR 05);</strong></li>
                    <li><strong>SIPAT – Semana Interna De Prevenção De Acidentes De Trabalho;</strong></li>
                    <li><strong>NR06- Equipamentos De Proteção Individual (EPI/EPC);</strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-rzHiWmOOa0" id="content1-40">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 col-lg-10 mbr-fonts-style display-7 text-justify">
                <div>Cite-se, nessa oportunidade, que a Clínica LACS também oferece o serviço de elaboração dos seguintes Laudos para a regularização da sua empresa junto aos órgãos da administração pública, no que tange aos requisitos legais relacionados à SST – Segurança e Saúde do Trabalho. Confira-se:</div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content5 cid-rzHiVVOCjm" id="content5-3z">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ul>
                    <li><strong>Laudo Elétrico;</strong></li>
                    <li><strong>Laudo De Para-Raios (SPDA);</strong></li>
                    <li><strong>Laudo Técnico De Avaliação De Conforto Térmico;</strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-rzHj2cV5nT" id="content1-41">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 col-lg-10 mbr-fonts-style display-7 text-justify">
                <div>Ps.: A Clínica LACS detém o aparato estrutural e humano para atender a sua empresa quando o assunto é o de Segurança e Saúde no Trabalho - SST.
</div><br>
<div>Entre em contato com um dos colaboradores da Clínica LACS, sane suas dúvidas, faça um orçamento e agende uma visita ao seu estabelecimento.</div>
            </div>
        </div>
    </div>
</section> --}}

@endsection