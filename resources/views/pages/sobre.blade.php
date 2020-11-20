@extends('layouts.base', ['footer' => $footer])


@section('content')

<section class="header6 cid-rzkZuIK0Z1" style="background-image: url(https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$historia->imagem}})" id="header6-1l">

    

    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-md-10 align-center">
                
            <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold mbr-white display-1">{{$historia->titulo}}</h2>
            </div>
        </div>
    </div>
    
</section>

<section class="header8 cid-rzkWzJCq0D" id="header8-1h">
    <div class="container">
        <div class="row align-items-center d-flex justify-content-center">
            <h1 class="mbr-bold mbr-fonts-style align-center display-6 mb-5 text-primary">{{$historia->descricao}}</h1>
            <div class="col-12 align-center img-block">
                <div class="row justify-content-center">
                    <div class="mbr-figure d-flex align-items-center justify-content-center">
                            <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$historia->imagem2}}" style="width : 90% !important;" alt="LACS" title="LACS">
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 align-center img-block">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-xl-8 col-xs-12">
                            <div class="mbr-figure d-flex align-items-center justify-content-center">
                                    <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$historia->imagem2}}" style="width : 90% !important;" alt="LACS" title="LACS">
                            </div>
                    </div>
                </div>
            </div> --}}
            <div class="mbr-white col-12 align-center">
                <div style="font-weight: 400 !important;" class="mbr-section-subtitle pb-3 mbr-fonts-style mbr-white text-justify display-4">{!! $historia->texto !!}</div>
            </div>
            
        </div>
    </div>
    
</section>

<section class="features3 cid-rzkWFbSScy" id="features3-1j">
    <div class="container-fluid">
        <div class="row justify-content-center">
            @foreach ($missao_visao_valores as $item)
                
            <div class="card p-3 col-12 col-md-6 col-xl-4 col-lg-4">
                <div class="mx-4">
                    <div class="card-img pb-4">
                    <span class="mbr-iconfont {{$item->descricao}}"></span>
                    </div>
                    <div class="card-box" style="color:white;">
                        <h4 class="card-title mbr-fonts-style display-5"><strong>
                        {{$item->titulo}}</strong></h4>
                        <p class="mbr-text mbr-fonts-style display-4" >
                            {!! $item->texto !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-rzkWTOqWjN" id="gallery1-1k" style="padding-bottom: 15px!important;">

    

    
        @foreach ($unidades as $key => $unidade)
        <h2 class="align-center mbr-fonts-style mbr-section-title display-2">{{$key}}</h2>
            <!--     <div mbr-class="{'container': !fullWidth}"> -->
                    <div class="col-left-gallery"><!-- Filter --><!-- Gallery -->
                        <div class="mbr-gallery-row">
                            <div class="mbr-gallery-layout-default">
                                <div><div class="d-flex flex-wrap">
                                    @foreach ($unidade as $galeria)
                                <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Fantástica"><div href="#lb-gallery1-1k" data-slide-to="{{$loop->index}}" data-toggle="modal">
                                        <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$galeria->galeria_imagem}}" alt="" title="">
                                        <span class="icon-focus"></span>
                                    <span class="mbr-gallery-title mbr-fonts-style display-7 text-white">{{$galeria->galeria_titulo}}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div><!-- Lightbox -->
                <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-1k">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="carousel-inner">
                                        @foreach ($unidade as $galeria)

                                    <div class="carousel-item {{$loop->index == 0 ? 'active' : ''}}">
                                         <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$galeria->galeria_imagem}}" alt="" title="">
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery1-1k">
                                    <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery1-1k">
                                    <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <!--  </div> -->
 
            @if(!$loop->last)
        <div class="underline align-center">
            <div class="line"></div>
        </div>
        @endif
        @endforeach
</section>



{{-- <section class="mbr-gallery mbr-slider-carousel cid-rzkWTOqWjN" id="gallery1-1k" style="padding-top: 60px!important;">

    

    
    <h2 class="align-center mbr-fonts-style mbr-section-title display-2">
        Unidade 2
    </h2>
    <div class="underline align-center">
        <div class="line"></div>
    </div>

        <div class="col-left-gallery"><div class="mbr-gallery-row"><div class="mbr-gallery-layout-default"><div><div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Fantástica"><div href="#lb-gallery1-1k" data-slide-to="0" data-toggle="modal"><img src="assets/images/img-9173-1900x1267-800x533.jpg" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7 text-white">Legenda</span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Responsivo"><div href="#lb-gallery1-1k" data-slide-to="1" data-toggle="modal"><img src="assets/images/img-9201-2000x1333-800x533.jpg" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7 text-white">Legenda</span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Criativo"><div href="#lb-gallery1-1k" data-slide-to="2" data-toggle="modal"><img src="assets/images/img-9202-2000x1333-800x533.jpg" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7 text-white">Legenda</span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Animado"><div href="#lb-gallery1-1k" data-slide-to="3" data-toggle="modal"><img src="assets/images/img-9220-1900x1267-800x533.jpg" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7 text-white">Legenda</span></div></div></div></div><div class="clearfix"></div></div></div><!-- Lightbox --><div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-1k"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="carousel-inner"><div class="carousel-item"><img src="assets/images/img-9173-1900x1267.jpg" alt="" title=""></div><div class="carousel-item active"><img src="assets/images/img-9201-2000x1333.jpg" alt="" title=""></div><div class="carousel-item"><img src="assets/images/img-9202-2000x1333.jpg" alt="" title=""></div><div class="carousel-item"><img src="assets/images/img-9220-1900x1267.jpg" alt="" title=""></div></div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery1-1k"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery1-1k"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a></div></div></div></div></div>

</section> --}}

@endsection