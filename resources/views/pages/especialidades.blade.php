@extends('layouts.base')


@section('content')

<section class="header6 cid-rzCrbCvzHh" id="header6-2a">

    

        <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(0, 0, 0);">
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-md-8 align-center">
                    
                    <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold mbr-white display-1">ESPECIALIDADES</h2>
                </div>
            </div>
        </div>
        
    </section>
    
    <section class="mbr-gallery cid-rzCrP2LwHb" id="shop4-2i">
       <div class="container-fluid" style="padding-left: 0px!important;">
          <div class="mbr-shop" card-buttons="">
             <!-- Shop Gallery -->
             <div class="row col-md-12 d-flex justify-content-center">
                <div class="wrapper-shop-items col-md-8">
                   <div class="mbr-gallery-row">
                      <div>
                         <div class="shop-items row">
                            @foreach ($especialidades as $item)
                            <div class="mbr-gallery-item" data-tags="" data-slide-to="{{$loop->index}}" data-seller="false">
                                 <div class="item_overlay" data-toggle="modal"></div>
                                 <div class="galleryItem" data-toggle="modal">
                                    <div class="style_overlay"></div>
                                    <div class="img_wraper m-4 d-flex align-items-center justify-content-center">
                                          <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$item->imagem}}" class="w-75" alt="{{$item->titulo}}" title="{{$item->titulo}}">
                                    </div>
                                    
                                    <div class="sidebar_wraper">
                                       <h4 class="item-title mbr-fonts-style mbr-text display-6"><strong>{{$item->titulo}}</strong></h4>
                                       @if(!empty($item->descricao))
                                          <div class="price-block"><span class="shop-item-price mbr-fonts-style display-4">{{$item->descricao}}</span></div>
                                       @endif
                                       {!! $item->texto !!}
                                    </div>
                                 </div>
                              </div>        
                            @endforeach
    
                         </div>
                      </div>
                      <div class="clearfix"></div>
                   </div>
                </div>
             </div>
             <!-- Lightbox -->
             <div class="shopItemsModal_wraper" id="modal_especialidades" style="z-index: 100;">
                <div class="shopItemsModalBg"></div>
                <div class="shopItemsModal row">
                   <div class="col-md-4 image-modal d-flex justify-content-center align-items-center"></div>
                   <div class="col-md-8 text-modal"></div>
                   <div class="closeModal">
                      <div class="close-modal-wrapper"></div>
                   </div>
                </div>
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

<script>

      $(function() {
      
      
        var observer = new MutationObserver(function(mutations) {
            
            if($("#modal_especialidades").is(":visible")){
               $("#menu3-o").hide();
            }else{
               $("#menu3-o").show();
            }
        });
        var target = document.querySelector('#modal_especialidades');
        observer.observe(target, {
          attributes: true
        });
      
      });
      
      </script>

@endsection