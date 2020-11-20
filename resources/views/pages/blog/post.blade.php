@extends('layouts.base', ['progress' => true, 'blog_metatags' => $post])


@section('content')

<section class="header9 cid-rzI6ApnDkJ" id="header9-4h">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-10 align-center mbr-white">
            <h1 class="mbr-section-title mbr-bold mbr-fonts-style display-2">{{$post->titulo}}</h1>
                <h2 class="mbr-section-subtitle pb-3 mbr-fonts-style display-7"><strong>
                   <a class="icon-transition" href="#">
                           <span class="fa fa-calendar mbr-iconfont" style="color: rgb(255, 255, 255);"></span>
                       </a> {{ Carbon\Carbon::parse($post->data)->format('d/m/Y') }}</strong></h2>
                
            </div>
        </div>
    </div>
    
</section>

<section once="" class="cid-rzHmKMtKHg" id="form4-47" style="padding-top: 30px!important;padding-bottom: 15px!important;">

    <div class="container">
            <div class="row mt-4">
                <div class="col-md-12 col-lg-12 col-sm-12 align-left">
                <p  style="font-size:1rem !important;" class="display-4 text-black mbr-bold"><a href="{{url('/')}}" class="text-primary"><span class="mbr-iconfont mbri-home mbr-bold"></span></a> > <a style="font-size : 1rem !important;" class="display-4 text-black mbr-bold" href="{{route('categorias',['id_subcategoria' => $post->id_subcategoria, 'nome_subcategoria' => str_slug($post->nome_subcategoria)])}}">{{$post->nome_subcategoria}}</a> > {{$post->titulo}}</p>
                </div>
            </div>
            
            <div class="row mt-2">
              
                @component('pages.blog.componentes.categorias', ['categorias' => $categorias])
                @endcomponent
                
                @component('pages.blog.componentes.pesquisa')
                @endcomponent
              
              </div>
              <hr>
          </div>


</section>

<section class="mbr-section article content1 cid-rzI2VXEunT" id="content1-4f">

    <div class="container">

      <div class="media-container-row mb-5 mt-2">

          <div class="col-lg-8 col-md-8 col-sm-12">

              <div class="row mb-4">
                  <div class="container-fluid">
                     <div class="col-12 align-left">
                      <div class="row d-flex align-items-center justify-content-start">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <h2 class="mbr-section-title mbr-fonts-style mb-0 display-5"><strong>Divulgue esse Artigo:</strong></h2>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">  
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//{{Request::url()}}" target="_blank">
                              <span class="btn btn-social facebook" title="Compartilhar link no Facebook">
                                  <i class="socicon socicon-facebook d-flex align-items-center justify-content-center"></i>
                              </span>
                          </a>
                        <a href="https://twitter.com/intent/tweet?text=https%3A//{{Request::url()}}" target="_blank">
                              <span class="btn btn-social twitter" title="Compartilhar link no Twitter">
                                  <i class="socicon socicon-twitter d-flex align-items-center justify-content-center"></i>
                              </span>
                          </a>
                        <a href="whatsapp://send?text=Gestão em Segurança do Trabalho garante sucesso das empresas https%3A//{{Request::url()}}" target="_blank">
                              <span class="btn btn-social plusone" title="Compartilhar link no WhatsApp">
                                  <i class="socicon-whatsapp socicon d-flex align-items-center justify-content-center"></i>
                              </span>
                          </a>
                          </div>
                      </div>
                    
                  </div>
                </div>
              </div>
            
             
                <div class="media-container-row">
                  <div class="mbr-text col-12 col-md-8 col-lg-10 mbr-fonts-style text-justify display-7">
                              @if(!empty($post->imagem))
                                <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$post->imagem}}" alt="{{$post->titulo}}" title="{{$post->titulo}}">
                              @endif

                              {!! $post->texto !!}

                              @if(!empty($post->imagem2))
                                <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$post->imagem}}" alt="{{$post->titulo}}" title="{{$post->titulo}}">
                              @endif
                </div>
              </div>
            


           
                {{-- <figure class="mbr-figure container-fluid d-flex align-items-center justify-content-center mt-5 mb-5">
                    <div class="image-block" style="width: 75%;">
                        <img src="assets/images/segurana-no-trabalho-641x326.jpg" alt="" title="">
                        
                    </div>
                </figure>
           --}}

           
                {{-- <div class="media-container-row">
                    <div class="mbr-text col-12 col-md-8 col-lg-10 mbr-fonts-style text-justify display-7">
                        <div>O levantamento de riscos no ambiente de trabalho e exames específicos são necessários para gerir uma boa SST e garantir segurança aos funcionários e excelência para a Organização. Para auxiliar na gestão da saúde das empresas, hoje em dia um recurso muito utilizado são os softwares médicos especializados, que reúnem dados e informações fundamentais para gerir da melhor forma uma rotina saudável para os funcionários de cada setor em específico. Dentro desse ambiente, a Clínica LACS é especialista em Saúde Ocupacional e Segurança do Trabalho, utilizando todos os recursos tecnológicos para garantir mais efetividade nos exames e diagnósticos ambientais, além de possuir em sua própria estrutura todos os mecanismos necessários para a realização de diversos exames complementares não sendo necessário que o funcionário se desloque para outro local com o fim de realizar os respectivos exames compatíveis com a sua função.</div>
                    </div>
                </div> --}}


                {{-- <figure class="mbr-figure container-fluid d-flex align-items-center justify-content-center mt-5 mb-5">
                    <div class="image-block" style="width: 75%;">
                        <img src="assets/images/segurana-no-trabalho-641x326.jpg" alt="" title="">
                        
                    </div>
                </figure> --}}
            
                <div class="row mb-4">
                  <div class="container-fluid">
                     <div class="col-12 align-left">
                      <div class="row d-flex align-items-center justify-content-start">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <h2 class="mbr-section-title mbr-fonts-style mb-0 display-5"><strong>Divulgue esse Artigo:</strong></h2>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">  
                          <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//{{Request::url()}}" target="_blank">
                              <span class="btn btn-social facebook" title="Compartilhar link no Facebook">
                                  <i class="socicon socicon-facebook d-flex align-items-center justify-content-center"></i>
                              </span>
                          </a>
                          <a href="https://twitter.com/intent/tweet?text=https%3A//{{Request::url()}}" target="_blank">
                              <span class="btn btn-social twitter" title="Compartilhar link no Twitter">
                                  <i class="socicon socicon-twitter d-flex align-items-center justify-content-center"></i>
                              </span>
                          </a>
                          <a href="whatsapp://send?text=Gestão em Segurança do Trabalho garante sucesso das empresas https%3A//{{Request::url()}}" target="_blank">
                              <span class="btn btn-social plusone" title="Compartilhar link no WhatsApp">
                                  <i class="socicon-whatsapp socicon d-flex align-items-center justify-content-center"></i>
                              </span>
                          </a>
                          </div>
                      </div>
                    
                  </div>
                </div>
              </div>
          </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="row align-center justify-content-start align-items-center mt-3">
                <div class="col-md-12">
                  <h2 class="mbr-section-title align-left mbr-fonts-style display-7 mbr-bold" style="color:{{$post->cor}}!important;">Leia Mais sobre essa Categoria</h2>
                    <div class="underline align-left">
                    <div class="line" style="background-color: {{$post->cor}}!important;"></div>
                  </div>
                </div>
            </div>
            @foreach ($relacionados as $item)
              <div class="row">            
                <div class="card first-card col-12 mt-4">
                        <div class="card-wrapper">
                            <div class="row card-img">
                              <div class="col-6 d-flex align-items-center justify-content-center">
                                <a href="{{route('post', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}"><img src="{{empty($item->imagem) ? asset('no-image.jpg') : 'https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/'.$item->imagem.''}}" alt="" title="" style="height: 20vh;">
                                <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$item->cor}}!important;height: 2vh;"></div></a>
                              </div>
                              <div class="col-6 d-flex align-items-center justify-content-center" style="padding-left: 2px!important;padding-right: 2px!important;">
                                <div>
                                   <div class="text-left">
                                        <div class="info-wrapper">
                                            <span class="mbr-iconfont fa-calendar fa" style="color: #000000; fill: rgb(13, 105, 81);"></span>
                                            <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                {{ Carbon\Carbon::parse($item->data)->format('d/m/Y') }}</p></p>
                                        </div>
                                    </div>
                                    <div class="mr-2">
                                    <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a class="text-black" href="{{route('post', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}"><strong>{{$item->titulo}}</strong></a></h2>
                                    </div>
                                    
                                </div>
                              </div>
                                
                            </div>
                        </div>
                    </div>
                </div>  

            @endforeach

              <div class="row align-center justify-content-start align-items-center mt-5">
                  <div class="col-md-12">
                    <h2 class="mbr-section-title align-left mbr-fonts-style display-5 mbr-bold text-primary">ÚLTIMOS POSTS</h2>
                      <div class="underline align-left">
                        <div class="line" style="background: linear-gradient(90deg, #00694f, #333333);"></div>
                    </div>
                  </div>
              </div>

              @foreach ($ultimos_posts as $item)
              
              <div class="row">            
                  <div class="card first-card col-12 mt-4">
                          <div class="card-wrapper">
                              <div class="row card-img">
                                <div class="col-6 d-flex align-items-center justify-content-center">
                                    <a href="{{route('post', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}"><img src="{{empty($item->imagem) ? asset('no-image.jpg') : 'https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/'.$item->imagem.''}}" alt="" title="" style="height: 20vh;">
                                    <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$item->cor}}!important;height: 2vh;"></div></a>
                                </div>
                                <div class="col-6 d-flex align-items-center justify-content-center" style="padding-left: 2px!important;padding-right: 2px!important;">
                                  <div>
                                     <div class="text-left">
                                          <div class="caption caption-category-sec">
                                            <div class="row">
                                              <div class="col-10">
                                              <p class="mbr-text price mbr-fonts-style mbr-lighter display-4 text-white mbr-bold d-flex align-items-center style-categories" style="background-color: {{$item->cor}}!important;">{{$item->nome_subcategoria}}</p>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="mr-2">
                                      <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}"><strong>{{$item->titulo}}</strong></a></h2>
                                      </div>
                                      
                                  </div>
                                </div>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach

              @component('pages.forms-componentes.newsletter')
              @endcomponent


        </div>
    </div>

</section>

<section class="features12 cid-rzCaomR7Mz cid-pos-blog" id="features12-1s">

    <div class="container mt-5 mb-4" id="categoria3">

      <h2 class="mbr-section-title align-left mbr-fonts-style display-5"><strong>
            Leia Mais</strong></h2>
        <div class="underline align-left pb-3">
            <div class="line"></div>
        </div>
        
        <div class="row d-flex justify-content-center align-items-center mb-4">

          <div class="col-lg-12 col-md-12 col-sm-12">

              <div class="row">
                
                @foreach ($relacionados as $item)
                  <div class="card first-card col-sm-12 col-lg-4 col-md-4 mt-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                        <a href="{{route('post', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}"><img src="{{empty($item->imagem) ? asset('no-image.jpg') : 'https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/'.$item->imagem.''}}" alt="" title="">
                        <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$item->cor}}!important;height: 2vh;"></div></a>
                        </div>
                        <div class="card-box" style="padding: 1rem!important;">
                           <div class="first-card-info pb-3">
                                <div class="info-wrapper">
                                    <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                    <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                        {{ Carbon\Carbon::parse($item->data)->format('d/m/Y') }}</p>
                                </div>
                            </div>
                          <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}"><strong>{{$post->titulo}}</strong></a></h2>
                           
                            <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 mbr-semibold">
                                @if(!empty($item->descricao))
                                    {{$item->descricao}}
                                @endif
                            </p>
                            
                        </div>
                    </div>
                  </div>                    
                @endforeach
              </div>
          </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section__comments" id="facebook-comments-block-4c" data-rv-view="509" style="background-color: #efefef; padding-top: 1.5rem; padding-bottom: 4.5rem;">
         
    <div class="container mbr-section__container mbr-section__container--isolated addons-container">
        <div class="addons-row">
            <div class="addons-container-inner"><div class="facebookPlaceholder" data-numposts="6"><h2>FACEBOOK COMMENTS WILL BE SHOWN ONLY WHEN YOUR SITE IS ONLINE</h2> <img src="assets/images/facebook-comments.jpg"></div></div>
            
           
        </div>
    </div>
</section>

<script type="text/javascript">

  $(document).ready(function(){
    $("nav.navbar").css("padding","0");
  })
      // When the user scrolls the page, execute myFunction
      window.onscroll = function() {myFunction()};
      
      function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
      }
  </script>


@endsection