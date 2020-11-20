@extends('layouts.base', ['footer' => $footer])


@section('content')


<section class="carousel slide cid-rz2x8BhUHC banner-desktop" data-interval="false" id="slider2-5" data-sortbtn="btn-primary">


    <div class="container-fluid content-slider">
       <div class="content-slider-wrap">
          <div>
              <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="8000">
                <ol class="carousel-indicators">
                    @foreach ($banner_home as $item)
                        <li data-app-prevent-settings="" data-target="#slider2-5" class="{{$loop->index == 0 ? 'active' : ''}}" data-slide-to="{{$item->index}}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner" role="listbox">
                    @foreach ($banner_home as $item)

                    <div class="carousel-item slider-fullscreen-image {{$loop->index == 0 ? 'active' : ''}}" data-bg-video-slide="false" style="background-image: url(https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$item->imagem}});">
                       <div class="container container-slide">

                          <div class="image_wrapper">
                                <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$item->imagem}}">
                             <div class="carousel-caption justify-content-center">
                                 @if($loop->index === 0)
                                <div class="col-10 align-right">
                                   <div class="mbr-section-btn" buttons="0"><img src="assets/images/logo-novo-2-1049x278.png" class="w-25 img-fluid"></div>
                                </div>
                            @endif
                             </div>
                          </div>
                       </div>
                    </div>
                    @endforeach

                </div>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider2-5"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider2-5"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a>
             </div>
          </div>
       </div>
    </div>
  </section>

  <section class="carousel slide cid-rz2x8BhUHC banner-mobile" data-interval="false" id="slider2-5mob" data-sortbtn="btn-primary">


    <div class="container-fluid content-slider">
       <div class="content-slider-wrap">
          <div>
             <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
                <ol class="carousel-indicators">
                        @foreach ($banner_home_mobile as $item)
                        <li data-app-prevent-settings="" data-target="#slider2-5mob" class="{{$loop->index == 0 ? 'active' : ''}}" data-slide-to="{{$item->index}}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner" role="listbox">

                   @foreach ($banner_home as $item)

                   <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$item->imagem}});">
                      <div class="container container-slide">

                         <div class="image_wrapper">
                         <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$item->imagem}}">
                            <div class="carousel-caption justify-content-center">
                               <div class="col-10 align-right">
                                  <div class="mbr-section-btn" buttons="0"><img src="assets/images/logo-novo-2-1049x278.png" class="w-25 img-fluid"></div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   @endforeach

                </div>
                <!-- <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider2-5"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider2-5"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a> -->
             </div>
          </div>
       </div>
    </div>
  </section>

  <section class="features11 cid-rz2wEWzpcl" id="features11-2" data-sortbtn="btn-primary">




      <div class="container-fluid">
          <div class="section-heading">
              <h2 class="mbr-fonts-style mbr-section-title align-center mbr-light mbr-black display-2">Clínica LACS</h2>
              <div class="underline align-center">
                  <div class="line"></div>
              </div>
          </div>
          <div class="row text-center justify-content-center pt-5">
                @foreach ($clinica_lacs as $item)

                <div class="col-xl-4 col-md-6 col-10">
                    <div class="table-wrap">
                        <div class="table-icon">
                           <a href="{{!empty($item->url)? $item->url : 'javascript:;'}}" class="text-white">
                              <!-- <span class="mbr-iconfont fa-user-md fa" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span> -->
                            <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$item->imagem}}" class="w-25 img-fluid">
                            </a>
                        </div>
                        <div class="table-heading">
                            <h1 class="table-pricing mbr-fonts-style display-7 pt-3"> <a href="{{!empty($item->url)? $item->url : 'javascript:;'}}" class="text-white"><strong>
                            {{$item->titulo}}</strong></a></h1>
                        </div>
                        <hr>
                    <h3 class="mbr-fonts-style mbr-section-subtitle align-left mbr-light pt-3 display-4"><a href="{{!empty($item->url)? $item->url : 'javascript:;'}}" class="text-white">A Clínica LACS trabalha com um amplo quadro de especialidades médicas. Confira!</a></h3>

                    </div>
                </div>
                @endforeach



          </div>
      </div>
  </section>

  <section class="features2 cid-rz2wQSdM69" id="features2-3" data-sortbtn="btn-primary">




      <div class="container">
          <div class="row main align-items-center">
              <div class="col-md-6 image-element align-self-center">
                  <div class="img-wrap m-3" style="width: 100%; height: 100%;">
                  <img class="img-fluid" src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$quem_somos->imagem}}" alt="" title="">
                  </div>
              </div>
              <div class="col-md-6 text-element">
                  <div class="text-content">
                      <h2 class="mbr-title pt-2 mbr-fonts-style align-center display-2">
                      {{$quem_somos->titulo}}</h2>
                      <div class="underline align-center">
                           <div class="line"></div>
                      </div>
                      <div class="mbr-section-text">
                          <p class="mbr-text pt-3 mbr-light mbr-fonts-style text-justify display-6">
                             {{$quem_somos->descricao}}
                          </p>
                      </div>
                    <div class="mbr-section-btn pt-3 align-center"><a class="btn btn-md btn-primary display-4" href="{{url('/sobre')}}">Saiba Mais</a></div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="header4 cid-rz2xg163TI mbr-parallax-background" style="background-image: url(https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$melhor_saude->imagem}}) !important;" id="header4-7" data-sortbtn="btn-primary">



      <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);">
      </div>

      <div class="container-fluid align-center">
          <div class="row justify-content-md-center">
              <div class="mbr-white col-md-12 col-lg-10">

                  <div class="row  align-items-center">
                      <div class="col-md-8">

                          <p class="mbr-text align-center py-2 mbr-fonts-style display-5"><strong>
                                  {{$melhor_saude->titulo}}
                          </strong></p>

                        <div class="mbr-section-btn align-left"><a class="btn btn-md btn-secondary display-4" href="{{url('/cartao-lacs')}}">SAIBA MAIS</a></div>
                      </div>

                       <div class="col-md-4 py-3 ">
                        {!! $melhor_saude->texto !!}

                       </div>
                  </div>
              </div>
          </div>
      </div>


  </section>

  <section class="features5 popup-btn-cards cid-rzjvpfPril" id="features5-p" data-sortbtn="btn-primary">




      <div class="container-fluid">
          <h2 class="mbr-section-title align-center mbr-fonts-style display-2">
              EXAMES</h2>
          <div class="underline align-center">
              <div class="line"></div>
          </div>

          <div class="row justify-content-center pt-5 align-items-start">
              @foreach ($exames_desc as $item)

              <div class="card p-3 col-12 col-md-6 col-lg-4 col-xl-3">
                  <div class="card-wrapper ">
                      <div class="card-img">
                          <div class="mbr-overlay"></div>

                          <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$item->imagem}}" alt="Mobirise" title="">
                      </div>
                      <div class="card-box">
                      <h4 class="card-title mbr-fonts-style align-center display-7">{{$item->titulo}}</h4>

                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </section>

@component('pages.forms-componentes.toxicologico-simples', ['toxicologico' => $toxicologico])
@endcomponent


  <section class="clients cid-rDFAj2qXNb" data-interval="false" id="clients-4x">



          <div class="container mb-5">
              <div class="media-container-row">
                  <div class="col-12 align-center">
                  <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">{{$parceiros->first()->titulo}}</h2>
                      <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5">{{$parceiros->first()->descricao}}</h3>
                  </div>
              </div>
          </div>

      <div class="container">

                <div class="row">

                    @foreach ($parceiros as $parceiro)

                                <div class="col-md-2 col-xs-12" style="margin-right : 1pc;margin-left:1pc;">
                                    <div class="wrap-img " style="-webkit-filter: grayscale(100%);
                                    filter: grayscale(100%);
                                    filter: gray;">
                                    <a href="{{$parceiro->galeria_descricao}}" target="_blank"><img style="width:100%; height:100px" src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$parceiro->galeria_imagem}}" class="img-responsive clients-img" alt="" title=""></a>
                                    </div>
                                </div>
                    @endforeach
                </div>

                <div class="row mt-5">
                        <div class="col-12">
                          <div class="mbr-section-btn align-center">
                          <a class="btn btn-md btn-secondary display-4" href="{{route('parceiros')}}">VEJA MAIS</a>
                          </div>
                        </div>

                      </div>
            </div>

  </section>

@endsection
