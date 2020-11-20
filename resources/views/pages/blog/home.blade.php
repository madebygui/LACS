@extends('layouts.base')



@section('content')

<section class="header6 cid-rzHkVDFZfW" id="header6-42">

    

    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            
        </div>
    </div>
    
</section>

<section once="" class="cid-rzHmKMtKHg" id="form4-47">

    <!-- Simulate a smartphone / tablet -->


    

    <div class="container">


        <div class="row align-center justify-content-center align-items-center">

            <div class="col-md-10 form-section">
                <h2 class="mbr-title align-center pt-2 mbr-fonts-style display-2 text-black">
                    Blog</h2>
                <div class="underline align-center">
                     <div class="line"></div>
                </div>
<!--                 <h2 class="mbr-section-subtitle mbr-fonts-style pt-3 display-7"><strong>
                  Pesquise a notícia que deseja</strong></h2> -->
                
            </div>

        </div>

        <div class="row mt-4">
                <div class="col-md-12 col-lg-12 col-sm-12 align-left">
                    <p class="display-4 text-black mbr-bold"><a href="{{url('/')}}" class="text-primary"><span class="mbr-iconfont mbri-home mbr-bold"></span></a> > <a style="font-size : 1rem !important;" class="display-4 text-black mbr-bold" href="#top">Blog</a></p>
                </div>
            </div>
            <div class="row mt-2">

                    @component('pages.blog.componentes.categorias', ['categorias' => $categorias])
                    @endcomponent
                    
                    @component('pages.blog.componentes.pesquisa')
                    @endcomponent
                </div>

            </div>
    </div>
</section>



<section class="mbr-section features2 cid-rB1mqbeMHv" id="features2-4q" data-sortbtn="btn-primary">

    



    <div class="container mb-4">
        
        <div class="row justify-content-center d-flex align-items-center">

             <div class="row first-row mb-2" style="padding-bottom: 0rem!important;">
                @if(!empty($destaques[0]))
                    <div class="card col-sm-12 col-md-12 first-child">
                        <div class="card-wrapper">
                            <a href="{{route('post', ['id' => $destaques[0]->id_texto, 'nome' => str_slug($destaques[0]->titulo)])}}">
                              <div class="card-img">
                                  <div class="mbr-overlay" style="opacity: 0.4; background-color: #00000069;"></div>
                                  <img src="{{empty($destaques[0]->imagem) ? asset('no-image.jpg') : 'https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/'.$destaques[0]->imagem.''}}" style="height: 75vh!important;" title="">
                              </div>
                            </a>
                            <div class="caption caption-category">
                              <div class="row">
                                <div class="col-12">
                                <p class="mbr-text price mbr-fonts-style mbr-lighter display-6 text-white mbr-bold" style=" font-size:1.3rem!important;font-family: 'Roboto', sans-serif !important;background-color: {{$destaques[0]->cor}}!important;">{{$destaques[0]->nome_subcategoria}}</p>
                                </div>
                              </div>
                            </div>
                            <a href="{{route('post', ['id' => $destaques[0]->id_texto, 'nome' => str_slug($destaques[0]->titulo)])}}">
                              <div class="caption">
                                <div class="row m-3">
                                  <div class="col-12">
                                    <p class="mbr-text card-title mbr-fonts-style mbr-lighter display-2 mbr-semibold text-center">{{$destaques[0]->titulo}}</p>
                                  </div>
                                </div>
                              </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endif

            <div class="media-container-column col-lg-6">
                @if(!empty($destaques[1]))
                    <div class="row first-row">
                        <div class="card col-sm-12 col-md-12 first-child">
                            <div class="card-wrapper">
                                    <a href="{{route('post', ['id' => $destaques[1]->id_texto, 'nome' => str_slug($destaques[1]->titulo)])}}">
                                <div class="card-img">
                                    
                                    <div class="mbr-overlay" style="opacity: 0.6; background-color: #00000080;"></div>
                                    <img src="{{empty($destaques[1]->imagem) ? asset('no-image.jpg') : 'https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/'.$destaques[1]->imagem.''}}" style="height: 35vh!important;" title="">
                                    
                                </div>
                                </a>
                                <div class="caption caption-category-sec">
                                <div class="row">
                                    <div class="col-12">
                                    <p class="mbr-text price mbr-fonts-style mbr-lighter display-6 text-white mbr-bold" style=" font-size:1.3rem!important; font-family: 'Roboto', sans-serif !important;background-color: {{$destaques[1]->cor}}!important;">{{$destaques[1]->nome_subcategoria}}</p>
                                    </div>
                                </div>
                                </div>
                                <div class="caption">
                                <div class="row m-3">
                                    <div class="col-12">
                                    <a href="{{route('post', ['id' => $destaques[1]->id_texto, 'nome' => str_slug($destaques[1]->titulo)])}}">
                                    <p class="mbr-text card-title mbr-fonts-style mbr-lighter display-5 mbr-bold text-center">{{$destaques[1]->titulo}}</p>
                                    </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if(!empty($destaques[2]))
                    <div class="row first-row">
                        <div class="card col-sm-12 col-md-12 first-child">
                            <div class="card-wrapper">
                                    <a href="{{route('post', ['id' => $destaques[2]->id_texto, 'nome' => str_slug($destaques[2]->titulo)])}}">
                                <div class="card-img">
                                    
                                    <div class="mbr-overlay" style="opacity: 0.6; background-color: #00000080;"></div>
                                    <img src="{{empty($destaques[2]->imagem) ? asset('no-image.jpg') : 'https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/'.$destaques[2]->imagem.''}}" style="height: 35vh!important;" title="">
                                    
                                </div>
                                </a>
                                <div class="caption caption-category-sec">
                                <div class="row">
                                    <div class="col-12">
                                    <p class="mbr-text price mbr-fonts-style mbr-lighter display-6 text-white mbr-bold" style=" font-size:1.3rem!important; font-family: 'Roboto', sans-serif !important;background-color: {{$destaques[2]->cor}}!important;">{{$destaques[2]->nome_subcategoria}}</p>
                                    </div>
                                </div>
                                </div>
                                <div class="caption">
                                <div class="row m-3">
                                    <div class="col-12">
                                    <a href="{{route('post', ['id' => $destaques[2]->id_texto, 'nome' => str_slug($destaques[2]->titulo)])}}">
                                    <p class="mbr-text card-title mbr-fonts-style mbr-lighter display-5 mbr-bold text-center">{{$destaques[2]->titulo}}</p>
                                    </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

        </div>
    </div>

   <div class="container mt-5 mb-4" id="categoria1">
        
        <div class="row mb-4">


        @if(isset($categorias_posts[0]) && !empty($categorias_posts[0]->posts->first()))
            <div class="col-lg-8 col-md-8 col-sm-12">

                    <div class="row mb-4">
                            <div class="col-12">
                                <div class="col-lg-3 col-md-3 col-sm-4">
                                <p class="align-left display-6 text-white mbr-bold style-categories" style="background-color: {{$categorias_posts[0]->cor}}!important;">{{$categorias_posts[0]->nome_subcategoria}}</p>
                                </div>
                            </div>
                          </div>
     
                    <div class="row">
                        
                        @if(!empty($categorias_posts[0]->posts[0]))

                          <div class="card first-card col-12 col-lg-6 col-md-6">
                              <div class="card-wrapper card-wrapper-adjust">
                                  <div class="card-img">
                                      <a href="{{route('post', ['id' => $categorias_posts[0]->posts[0]->id_texto, 'nome' => str_slug($categorias_posts[0]->posts[0]->titulo)])}}"><img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$categorias_posts[0]->posts[0]->imagem}}"  style="height:172px;" alt="" title="">
                                      <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$categorias_posts[0]->cor}}!important;height: 2vh;"></div></a>
                                  </div>
                                  <div class="card-box">
                                     <div class="first-card-info pb-3">
                                          <div class="info-wrapper">
                                              <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                              <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                    {{ Carbon\Carbon::parse($categorias_posts[0]->posts[0]->data)->format('d/m/Y') }}</p>
                                          </div>
                                      </div>
                                    <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $categorias_posts[0]->posts[0]->id_texto, 'nome' => str_slug($categorias_posts[0]->posts[0]->titulo)])}}"><strong>{{ $categorias_posts[0]->posts[0]->titulo }}</strong></a></h2>
                                     
                                      <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 mbr-semibold">
                                          {{$categorias_posts[0]->posts[0]->descricao}}
                                      </p>
                                      
                                  </div>
                              </div>
                          </div>

                          @endif

                          @if(!empty($categorias_posts[0]->posts[1]))

                          <div class="card first-card col-12 col-lg-6 col-md-6">
                              <div class="card-wrapper card-wrapper-adjust">
                                  <div class="card-img">
                                      <a href="{{route('post', ['id' => $categorias_posts[0]->posts[1]->id_texto, 'nome' => str_slug($categorias_posts[0]->posts[1]->titulo)])}}"><img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$categorias_posts[0]->posts[1]->imagem}}" alt="" title="" style="height:172px;">
                                      <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$categorias_posts[0]->cor}}!important;height: 2vh;"></div></a>
                                  </div>
                                  <div class="card-box">
                                     <div class="first-card-info pb-3">
                                          <div class="info-wrapper">
                                              <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                              <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                    {{ Carbon\Carbon::parse($categorias_posts[0]->posts[1]->data)->format('d/m/Y') }}</p>
                                          </div>
                                      </div>
                                    <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $categorias_posts[0]->posts[1]->id_texto, 'nome' => str_slug($categorias_posts[0]->posts[1]->titulo)])}}"><strong>{{ $categorias_posts[0]->posts[1]->titulo }}</strong></a></h2>
                                     
                                      <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 mbr-semibold">
                                          {{$categorias_posts[0]->posts[1]->descricao}}
                                      </p>
                                      
                                  </div>
                              </div>
                          </div>

                          @endif

                          {{-- <div class="card first-card col-12 col-lg-6 col-md-6">
                              <div class="card-wrapper">
                                  <div class="card-img">
                                      <a href="page5.html"><img src="assets/images/segurana-no-trabalho-641x326.jpg" alt="" title="">
                                      <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:#0c83e4!important;height: 2vh;"></div></a>
                                  </div>
                                  <div class="card-box">
                                      <div class="first-card-info pb-3">
                                          <div class="info-wrapper">
                                              <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                              <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                  03/09/2019</p>
                                          </div>
                                      </div>
                                      <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="page5.html"><strong>Gestão em Segurança do Trabalho garante sucesso das empresas</strong></a></h2>
                                      <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 mbr-semibold">
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto optio modi ullam officia.
                                      </p>
                                     
                                  </div>
                              </div>
                          </div> --}}
                      </div>

                      @if(!empty($categorias_posts[0]->posts[2]))
                    <div class="row">
                      <div class="card first-card col-12 col-lg-6 col-md-6 mt-4">
                              <div class="card-wrapper">
                                  <div class="row card-img">
                                    <div class="col-6 d-flex align-items-center justify-content-center">

                                      <a href="{{route('post', ['id' => $categorias_posts[0]->posts[2]->id_texto, 'nome' => str_slug($categorias_posts[0]->posts[2]->titulo)])}}"><img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$categorias_posts[0]->posts[2]->imagem}}" alt="" title="" style="height: 13vh;">
                                      <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$categorias_posts[0]->cor}}!important;height: 2vh;"></div></a>
                                    </div>
                                    <div class="col-6 d-flex align-items-center justify-content-center" style="padding-left: 2px!important;padding-right: 2px!important;">
                                      <div>
                                         <div class="pb-3 text-left">
                                              <div class="info-wrapper">
                                                  <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                                  <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                        {{ Carbon\Carbon::parse($categorias_posts[0]->posts[2]->data)->format('d/m/Y') }}</p>
                                              </div>
                                          </div>
                                          <div class="mr-2">
                                          <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $categorias_posts[0]->posts[2]->id_texto, 'nome' => str_slug($categorias_posts[0]->posts[2]->titulo)])}}"><strong>{{$categorias_posts[0]->posts[2]->titulo}}</strong></a></h2>
                                          </div>
                                          
                                      </div>
                                    </div>
                                      
                                  </div>
                              </div>
                          </div>
                          @if(!empty($categorias_posts[0]->posts[3]))
                          <div class="card first-card col-12 col-lg-6 col-md-6 mt-4">
                                <div class="card-wrapper">
                                    <div class="row card-img">
                                      <div class="col-6 d-flex align-items-center justify-content-center">
  
                                        <a href="{{route('post', ['id' => $categorias_posts[0]->posts[3]->id_texto, 'nome' => str_slug($categorias_posts[0]->posts[3]->titulo)])}}"><img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$categorias_posts[0]->posts[3]->imagem}}" alt="" title="" style="height: 20vh;">
                                        <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$categorias_posts[0]->cor}}!important;height: 2vh;"></div></a>
                                      </div>
                                      <div class="col-6 d-flex align-items-center justify-content-center" style="padding-left: 2px!important;padding-right: 2px!important;">
                                        <div>
                                           <div class="pb-3 text-left">
                                                <div class="info-wrapper">
                                                    <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                                    <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                          {{ Carbon\Carbon::parse($categorias_posts[0]->posts[3]->data)->format('d/m/Y') }}</p>
                                                </div>
                                            </div>
                                            <div class="mr-2">
                                            <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $categorias_posts[0]->posts[3]->id_texto, 'nome' => str_slug($categorias_posts[0]->posts[3]->titulo)])}}"><strong>{{$categorias_posts[0]->posts[3]->titulo}}</strong></a></h2>
                                            </div>
                                            
                                        </div>
                                      </div>
                                        
                                    </div>
                                </div>
                            </div>
                          @endif
                    </div>
                  @endif
                  @if(!empty($categorias_posts[0]->posts[4]))
                  <div class="row">
                    <div class="card first-card col-12 col-lg-6 col-md-6 mt-4">
                            <div class="card-wrapper">
                                <div class="row card-img">
                                  <div class="col-6 d-flex align-items-center justify-content-center">

                                    <a href="{{route('post', ['id' => $categorias_posts[0]->posts[4]->id_texto, 'nome' => str_slug($categorias_posts[0]->posts[4]->titulo)])}}"><img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$categorias_posts[0]->posts[4]->imagem}}" alt="" title="" style="height: 20vh;">
                                    <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$categorias_posts[0]->cor}}!important;height: 2vh;"></div></a>
                                  </div>
                                  <div class="col-6 d-flex align-items-center justify-content-center" style="padding-left: 2px!important;padding-right: 2px!important;">
                                    <div>
                                       <div class="pb-3 text-left">
                                            <div class="info-wrapper">
                                                <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                                <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                      {{ Carbon\Carbon::parse($categorias_posts[0]->posts[4]->data)->format('d/m/Y') }}</p>
                                            </div>
                                        </div>
                                        <div class="mr-2">
                                        <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $categorias_posts[0]->posts[4]->id_texto, 'nome' => str_slug($categorias_posts[0]->posts[4]->titulo)])}}"><strong>{{$categorias_posts[0]->posts[4]->titulo}}</strong></a></h2>
                                        </div>
                                        
                                    </div>
                                  </div>
                                    
                                </div>
                            </div>
                        </div>
                        @if(!empty($categorias_posts[0]->posts[5]))
                        <div class="card first-card col-12 col-lg-6 col-md-6 mt-4">
                              <div class="card-wrapper">
                                  <div class="row card-img">
                                    <div class="col-6 d-flex align-items-center justify-content-center">

                                      <a href="{{route('post', ['id' => $categorias_posts[0]->posts[5]->id_texto, 'nome' => str_slug($categorias_posts[0]->posts[5]->titulo)])}}"><img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$categorias_posts[0]->posts[5]->imagem}}" alt="" title="" style="height: 20vh;">
                                      <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$categorias_posts[0]->cor}}!important;height: 2vh;"></div></a>
                                    </div>
                                    <div class="col-6 d-flex align-items-center justify-content-center" style="padding-left: 2px!important;padding-right: 2px!important;">
                                      <div>
                                         <div class="pb-3 text-left">
                                              <div class="info-wrapper">
                                                  <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                                  <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                        {{ Carbon\Carbon::parse($categorias_posts[0]->posts[5]->data)->format('d/m/Y') }}</p>
                                              </div>
                                          </div>
                                          <div class="mr-2">
                                          <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $categorias_posts[0]->posts[5]->id_texto, 'nome' => str_slug($categorias_posts[0]->posts[5]->titulo)])}}"><strong>{{$categorias_posts[0]->posts[5]->titulo}}</strong></a></h2>
                                          </div>
                                          
                                      </div>
                                    </div>
                                      
                                  </div>
                              </div>
                          </div>
                        @endif
                  </div>
                @endif
                </div>
        @endif  


        @if(isset($categorias_posts[1]) && !empty($categorias_posts[1]->posts->first()))
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="row mb-4">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                  <p class="align-left display-6 text-white mbr-bold style-categories" style="background-color: {{$categorias_posts[1]->cor}}!important;">{{$categorias_posts[1]->nome_subcategoria}}</p>
                  </div>
              </div>
            </div>

             {{-- <div class="row"> --}}
                <div class="card first-card col-lg-12 col-md-12 col-sm-12">
                  
                    <div class="card-wrapper card-wrapper-adjust">
                        <div class="card-img">
                               
                           <a href="{{route('post', ['id' => $categorias_posts[1]->posts[0]->id_texto, 'nome' => str_slug($categorias_posts[1]->posts[0]->titulo)])}}"><img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$categorias_posts[1]->posts[0]->imagem}}" style="height:172px !important" alt="" title="">
                            <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$categorias_posts[1]->cor}}!important;height: 2vh;"></div></a>
                        </div>
                        <div class="card-box">
                            <div class="first-card-info pb-3">
                                <div class="info-wrapper">
                                    <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                    <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                            {{ Carbon\Carbon::parse($categorias_posts[1]->posts[0]->data)->format('d/m/Y') }}</p>
                                </div>
                            </div>
                        <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $categorias_posts[1]->posts[0]->id_texto, 'nome' => str_slug($categorias_posts[1]->posts[0]->titulo)])}}"><strong>{{$categorias_posts[1]->posts[0]->titulo}}</strong></a></h2>
                            <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 mbr-semibold">
                                    {{$categorias_posts[1]->posts[0]->descricao}}
                            </p>
                            
                        </div>
                    </div>
                </div>
              {{-- </div> --}}
              @if( !empty($categorias_posts[1]->posts[1]))
             {{-- <div class="row"> --}}
               <div class="card first-card col-lg-12 col-md-12 col-sm-12 mt-4">
                      <div style="background: #ffffff3d;" class="card-wrapper">
                          <div class="row card-img">
                            <div class="col-6 d-flex align-items-end">
                            <a href="{{route('post', ['id' => $categorias_posts[1]->posts[1]->id_texto, 'nome' => str_slug($categorias_posts[1]->posts[1]->titulo)])}}"><img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$categorias_posts[1]->posts[1]->imagem}}" style="height:12vh !important" alt="" title="">
                            <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$categorias_posts[1]->cor}}!important;height: 2vh;"></div></a>
                            </div>
                            <div class="col-6 d-flex align-items-center justify-content-center"style="padding-left: 2px!important;padding-right: 2px!important;">
                              <div>
                                 <div class="pb-3 text-left">
                                      <div class="info-wrapper">
                                          <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                          <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                {{ Carbon\Carbon::parse($categorias_posts[1]->posts[1]->data)->format('d/m/Y') }}</p>
                                      </div>
                                  </div>
                                  <div class="mr-2">
                                    <h2 class="first-card-title mbr-fonts-style display-7 text-left"> <a href="{{route('post', ['id' => $categorias_posts[1]->posts[1]->id_texto, 'nome' => str_slug($categorias_posts[1]->posts[1]->titulo)])}}"><strong>{{$categorias_posts[1]->posts[1]->titulo}}</strong></a></h2>
                                  </div>
                                  
                              </div>
                            </div>
                              
                          </div>
                      </div>
                  </div>
              
             {{-- </div> --}}
             @endif
             @if( !empty($categorias_posts[1]->posts[2]))
             <div class="row">
               <div class="card first-card col-lg-12 col-md-12 col-sm-12 mt-4">
                      <div class="card-wrapper">
                          <div class="row card-img">
                            <div class="col-6 d-flex align-items-center justify-content-center">
                            <a href="{{route('post', ['id' => $categorias_posts[1]->posts[2]->id_texto, 'nome' => str_slug($categorias_posts[1]->posts[2]->titulo)])}}"><img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$categorias_posts[1]->posts[2]->imagem}}" style="height:20vh !important" alt="" title="">
                            <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$categorias_posts[1]->cor}}!important;height: 2vh;"></div></a>
                            </div>
                            <div class="col-6 d-flex align-items-center justify-content-center"style="padding-left: 2px!important;padding-right: 2px!important;">
                              <div>
                                 <div class="pb-3 text-left">
                                      <div class="info-wrapper">
                                          <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                          <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                {{ Carbon\Carbon::parse($categorias_posts[1]->posts[2]->data)->format('d/m/Y') }}</p>
                                      </div>
                                  </div>
                                  <div class="mr-2">
                                  <h2 class="first-card-title mbr-fonts-style display-7 text-left"> <a href="{{route('post', ['id' => $categorias_posts[1]->posts[2]->id_texto, 'nome' => str_slug($categorias_posts[1]->posts[2]->titulo)])}}"><strong>{{$categorias_posts[1]->posts[2]->titulo}}</strong></a></h2>
                                  </div>
                                  
                              </div>
                            </div>
                              
                          </div>
                      </div>
                  </div>
              
             </div>
             @endif

        </div>
        @endif
      </div>
</div>

   <div class="container mt-5 mb-4" id="categoria2">
        
        <div class="row d-flex  mb-4">

        @if( isset($categorias_posts[2]) && !empty($categorias_posts[2]->posts->first()))
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row mb-4">
              <div class="col-12">
                  <div class="col-lg-5 col-md-5 col-sm-6">
                  <p class="align-left display-6 text-white mbr-bold style-categories" style="background-color: {{$categorias_posts[2]->cor}}!important;">{{$categorias_posts[2]->nome_subcategoria}}</p>
                  </div>
              </div>
            </div>

                @for ($i = 0; $i <= 3; $i++)


               
                    @if(empty($categorias_posts[2]->posts[$i]))
                        @break
                    @endif

                    @if ($i == 0 || $i == 2)
                        <div class="row">
                    @endif

                    <div class="card first-card col-sm-12 col-lg-6 col-md-6 mt-4">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <a href="{{route('post', ['id' => $categorias_posts[2]->posts[$i]->id_texto, 'nome' => str_slug($categorias_posts[2]->posts[$i]->titulo)])}}"><img style="height: 125px;" src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$categorias_posts[2]->posts[$i]->imagem}}" alt="" title="">
                                    <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$categorias_posts[2]->cor}}!important;height: 2vh;"></div></a>
                                </div>
                                <div class="card-box" style="padding: 1rem!important;">
                                   <div class="first-card-info pb-3">
                                        <div class="info-wrapper">
                                            <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                            <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                    {{ Carbon\Carbon::parse($categorias_posts[2]->posts[$i]->data)->format('d/m/Y') }}</p>
                                        </div>
                                    </div>
                                <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $categorias_posts[2]->posts[$i]->id_texto, 'nome' => str_slug($categorias_posts[2]->posts[$i]->titulo)])}}"><strong>{{$categorias_posts[2]->posts[$i]->titulo}}</strong></a></h2>
                                   
                                    <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 mbr-semibold">
                                            {{$categorias_posts[2]->posts[$i]->descricao}}
                                    </p>
                                    
                                </div>
                            </div>
                        </div>

                    @if($i == 1 || $i == 3)
                        </div>
                    @endif
                    
                @endfor



        </div>
        @endif

        
        @if(isset($categorias_posts[3]) && !empty($categorias_posts[3]->posts->first()))
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row mb-4">
              <div class="col-12">
                  <div class="col-lg-5 col-md-5 col-sm-6">
                  <p class="align-left display-6 text-white mbr-bold style-categories" style="background-color: {{$categorias_posts[3]->cor}}!important;">{{$categorias_posts[3]->nome_subcategoria}}</p>
                  </div>
              </div>
            </div>

                @for ($i = 0; $i <= 3; $i++)

                    @if(empty($categorias_posts[3]->posts[$i]))
                        @break
                    @endif

                    @if ($i == 0 || $i == 2)
                        <div class="row">
                    @endif

                    <div class="card first-card col-sm-12 col-lg-6 col-md-6 mt-4">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <a href="{{route('post', ['id' => $categorias_posts[3]->posts[$i]->id_texto, 'nome' => str_slug($categorias_posts[3]->posts[$i]->titulo)])}}"><img style="height:125px;" src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$categorias_posts[3]->posts[$i]->imagem}}" alt="" title="">
                                    <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$categorias_posts[3]->cor}}!important;height: 2vh;"></div></a>
                                </div>
                                <div class="card-box" style="padding: 1rem!important;">
                                   <div class="first-card-info pb-3">
                                        <div class="info-wrapper">
                                            <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                            <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                    {{ Carbon\Carbon::parse($categorias_posts[3]->posts[$i]->data)->format('d/m/Y') }}</p>
                                        </div>
                                    </div>
                                <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $categorias_posts[3]->posts[$i]->id_texto, 'nome' => str_slug($categorias_posts[3]->posts[$i]->titulo)])}}"><strong>{{$categorias_posts[3]->posts[$i]->titulo}}</strong></a></h2>
                                   
                                    <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 mbr-semibold">
                                            {{$categorias_posts[3]->posts[$i]->descricao}}
                                    </p>
                                    
                                </div>
                            </div>
                        </div>





                    @if($i == 1 || $i == 3)
                        </div>
                    @endif
                    
                @endfor



        </div>
        @endif

      </div>
</div>

@if(isset($categorias_posts[4]) && !empty($categorias_posts[4]->posts->first()))
    <div class="container mt-5 mb-4" id="categoria3">
        
        <div class="row d-flex justify-content-center align-items-center mb-4">

          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row mb-4">
              <div class="col-12">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <p class="align-left display-6 text-white mbr-bold style-categories" style="background-color: {{$categorias_posts[4]->cor}}!important;">{{$categorias_posts[4]->nome_subcategoria}}</p>
                  </div>
              </div>
            </div>

              <div class="row">

                @foreach ($categorias_posts[4]->posts as $post)

                @if($loop->index === 3)
                    @break
                @endif

                <div class="card first-card col-sm-12 col-lg-4 col-md-4 mt-4">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <a href="{{route('post', ['id' => $post->id_texto, 'nome' => str_slug($post->titulo)])}}"><img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$post->imagem}}" alt="" title="">
                                <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$categorias_posts[4]->cor}}!important;height: 2vh;"></div></a>
                            </div>
                            <div class="card-box" style="padding: 1rem!important;">
                               <div class="first-card-info pb-3">
                                    <div class="info-wrapper">
                                        <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                        <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                {{ Carbon\Carbon::parse($post->data)->format('d/m/Y') }}</p>
                                             
                                    </div>
                                </div>
                            <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $post->id_texto, 'nome' => str_slug($post->titulo)])}}"><strong>{{$post->titulo}}</strong></a></h2>
                               
                                <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 mbr-semibold">
                                    {{$post->descricao}}
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    
                @endforeach
                
              </div>
          </div>
        </div>
    </div>
@endif


@if(isset($categorias_posts[5]) && !empty($categorias_posts[5]->posts->first()))

    <div class="container mt-5 mb-4" id="categoria4">
        
        <div class="row d-flex justify-content-center align-items-center mb-4">

        @for ($i = 5; $i < count($categorias_posts); $i++)

        <div class="col-lg-3 col-md-3 col-sm-12">

        <div class="row mb-4">
            <div class="col-12">
                <div class="col-12">
                <p class="align-left display-6 text-white mbr-bold style-categories" style="background-color: {{$categorias_posts[$i]->cor}}!important;">{{$categorias_posts[$i]->nome_subcategoria}}</p>
                </div>
            </div>
        </div>

            @foreach ($categorias_posts[$i]->posts as $post)
            
                @if($loop->index == 3)
                        @break
                @endif


                @if($loop->index == 0)
                
                                <div class="row">
                                
                                    <div class="card first-card col-md-12 col-sm-12 col-lg-12 mt-4">
                                            <div class="card-wrapper">
                                                    <div class="card-img">
                                                        <a href="{{route('post', ['id' => $post->id_texto, 'nome' => str_slug($post->titulo)])}}"><img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$post->imagem}}" alt="" title="">
                                                        <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$categorias_posts[$i]->cor}}!important;height: 2vh;"></div></a>
                                                    </div>
                                                    <div class="card-box" style="padding: 1rem!important;">
                                                       <div class="first-card-info pb-3">
                                                            <div class="info-wrapper">
                                                                <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                                                <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                                        {{ Carbon\Carbon::parse($post->data)->format('d/m/Y') }}</p>
                                                                     
                                                            </div>
                                                        </div>
                                                    <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $post->id_texto, 'nome' => str_slug($post->titulo)])}}"><strong>{{$post->titulo}}</strong></a></h2>
                                                       
                                                        <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 mbr-semibold">
                                                            {{$post->descricao}}
                                                        </p>
                                                        
                                                    </div>
                                        </div>
                                    </div>
                                </div>

                @else
                <div class="row">
                        <div class="card first-card col-md-12 col-sm-12 col-lg-12 mt-4">
                            <div class="card-wrapper">
                                
                                <div class="card-box" style="padding: 1rem!important;border: #0000003b solid!important;">
                                    <div class="first-card-info pb-3">
                                        <div class="info-wrapper">
                                            <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                            <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                    {{ Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</p>
                                        </div>
                                    </div>
                                <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $post->id_texto, 'nome' => str_slug($post->titulo)])}}"><strong>{{$post->titulo}}</strong></a></h2>
                                    <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 mbr-semibold">
                                            {{$post->descricao}}
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                    </div>

                @endif

    
                
                    @endforeach
                </div>
        
            
        @endfor


        </div>
    </div>
@endif

</section>


<!-- <section class="mbr-gallery cid-rAncXzpwoM" id="shop1-4l" data-sortbtn="btn-primary">


<div class="container">
   <div class="mbr-shop" show-sidebar="" card-buttons="" shop__showsidebar="" show-buttons="">

      <div class="row col-md-12">

         <div class="col-xl-12 mb-4">
           
            <div class="sidebar-block container sidebar-categories">
              <div class="col-12 mt-4 mb-4">

                  <div class="mobile-container">
                        <div class="topnav">
                          <a href="#home" class="active ml-5">MENU</a>
                          <div class="sidebar-block container sidebar-categories">
                           <div class="categories col-md-12">
                              <div class="categories-titles">
                          
                                  <div class="mbr-gallery-filter mbr-shop-filter container gallery-filter-active">
                                      <ul buttons="0" id="myLinks">
                                       <li class="mbr-gallery-filter-all active display-7">Todos</li>
                                      
                                      </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <span class="mbr-iconfont fa-navicon fa mr-2"></span>
                          </a>
                        </div>
                    </div>
               </div>
            </div>
         </div>

         <div class="wrapper-shop-items col-xl-12">
            <div class="mbr-gallery-row">
               <div>
                  <div class="shop-items">

                     <div class="mbr-gallery-item" data-tags="Categoria 1" data-slide-to="0" data-seller="false">
                          <div class="card first-card col-12 col-lg-12">
                              <div class="card-wrapper">
                                  <div class="card-img">
                                      <a href="page5.html"><img src="assets/images/capa-blog-lacs3-641x326.png" alt="" title=""></a>
                                      <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color: #fbba16!important;"><strong>CATEGORIA 1</strong></div>
                                  </div>
                                  <div class="card-box">
                                      <h2 class="first-card-title mbr-fonts-style display-7 text-center"><a href="page5.html" class="text-primary"><strong>Mudanças no eSocial: entenda o novo cronograma</strong></a><strong><br></strong></h2>
                                      <div class="first-card-info pb-3">
                                          <div class="info-wrapper">
                                              <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                              <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                  03/09/2019</p>
                                          </div>
                                      </div>
                                      <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 text-justify">
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto optio modi ullam officia.
                                      </p>
                                      <div class="mbr-section-btn card-btn"><a href="page5.html" class="btn btn-md btn-black-outline display-4">
                                              Leia Mais</a></div>
                                  </div>
                              </div>
                          </div>
                     </div>

                      <div class="mbr-gallery-item" data-tags="Categoria 2" data-slide-to="1" data-seller="false">
                         <div class="card first-card col-12 col-lg-12">
                              <div class="card-wrapper">
                                  <div class="card-img">
                                      <a href="page5.html"><img src="assets/images/novembro-azul-641x326.png" alt="" title=""></a>

                                      <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color: #0c83e4!important;"><strong>CATEGORIA 2</strong></div>
                                  </div>
                                  <div class="card-box">
                                      <h2 class="first-card-title mbr-fonts-style display-7 text-center"><a href="page5.html" class="text-primary"><strong>Novembro Azul: câncer de próstata</strong></a><strong><br></strong></h2>
                                      <div class="first-card-info pb-3">
                                          <div class="info-wrapper">
                                              <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                              <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                  03/09/2019</p>
                                          </div>
                                      </div>
                                      <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 text-justify">
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto optio modi ullam officia.
                                      </p>
                                      <div class="mbr-section-btn card-btn"><a href="page5.html" class="btn btn-md btn-black-outline display-4">
                                              Leia Mais</a></div>
                                  </div>
                              </div>
                          </div>
                     </div>

                    <div class="mbr-gallery-item" data-tags="Categoria 3" data-slide-to="2" data-seller="false">
                         <div class="card first-card col-12 col-lg-12">
                              <div class="card-wrapper">
                                  <div class="card-img">
                                      <a href="page5.html"><img src="assets/images/capa-blog-lacs-1-641x326.png" alt="" title=""></a>
                                      
                                      <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color: #da0000!important;"><strong>CATEGORIA 3</strong></div>
                                  </div>
                                  <div class="card-box">
                                      <h2 class="first-card-title mbr-fonts-style display-7 text-center"><a href="page5.html" class="text-primary"><strong>Como vai o seu coração?</strong></a><strong><br></strong></h2>
                                      <div class="first-card-info pb-3">
                                          <div class="info-wrapper">
                                              <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                              <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                  03/09/2019</p>
                                          </div>
                                      </div>
                                      <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 text-justify">
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto optio modi ullam officia.
                                      </p>
                                      <div class="mbr-section-btn card-btn"><a href="page5.html" class="btn btn-md btn-black-outline display-4">
                                              Leia Mais</a></div>
                                  </div>
                              </div>
                          </div>
                     </div>

                      <div class="mbr-gallery-item" data-tags="Categoria 1" data-slide-to="3" data-seller="false">
                        <div class="card first-card col-12 col-lg-12">
                              <div class="card-wrapper">
                                  <div class="card-img">
                                      <a href="page5.html"><img src="assets/images/segurana-no-trabalho-641x326.jpg" alt="" title=""></a>
                                      
                                      <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color: #fbba16!important;"><strong>CATEGORIA 1</strong></div>
                                  </div>
                                  <div class="card-box">
                                      <h2 class="first-card-title mbr-fonts-style display-7 text-center"><a href="page5.html" class="text-primary"><strong>Gestão em segurança do Trabalho garante sucesso das empresas</strong></a></h2>
                                      <div class="first-card-info pb-3">
                                          <div class="info-wrapper">
                                              <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                              <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                  03/09/2019</p>
                                          </div>
                                      </div>
                                      <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 text-justify">
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto optio modi ullam officia.
                                      </p>
                                      <div class="mbr-section-btn card-btn"><a href="page5.html" class="btn btn-md btn-black-outline display-4">
                                              Leia Mais</a></div>
                                  </div>
                              </div>
                          </div>
                     </div>

                    <div class="mbr-gallery-item" data-tags="Categoria 3" data-slide-to="1" data-seller="false">
                       <div class="card first-card col-12 col-lg-12">
                              <div class="card-wrapper">
                                  <div class="card-img">
                                      <a href="page5.html"><img src="assets/images/lacs-terceira-idade-641x326.png" alt="" title=""></a>
                                      
                                      <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color: #da0000!important;"><strong>CATEGORIA 3</strong></div>
                                  </div>
                                  <div class="card-box">
                                      <h2 class="first-card-title mbr-fonts-style display-7 text-center"><a href="page5.html" class="text-primary"><strong>Cuidados da saúde na terceira idade</strong></a></h2>
                                      <div class="first-card-info pb-3">
                                          <div class="info-wrapper">
                                              <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                              <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                  03/09/2019</p>
                                          </div>
                                      </div>
                                      <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 text-justify">
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto optio modi ullam officia.
                                      </p>
                                      <div class="mbr-section-btn card-btn"><a href="page5.html" class="btn btn-md btn-black-outline display-4">
                                              Leia Mais</a></div>
                                  </div>
                              </div>
                          </div>
                     </div>

                      <div class="mbr-gallery-item" data-tags="Categoria 4" data-slide-to="2" data-seller="false">
                        <div class="card first-card col-12 col-lg-12">
                              <div class="card-wrapper">
                                  <div class="card-img">
                                      <a href="page5.html"><img src="assets/images/capabloglacs3-641x326.png" alt="" title=""></a>
                                      
                                      <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color: #ec6997!important;"><strong>CATEGORIA 4</strong></div>
                                  </div>
                                  <div class="card-box">
                                      <h2 class="first-card-title mbr-fonts-style display-7 text-center"><a href="page5.html" class="text-primary"><strong>Outubro Rosa</strong></a></h2>
                                      <div class="first-card-info pb-3">
                                          <div class="info-wrapper">
                                              <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                              <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                                  03/09/2019</p>
                                          </div>
                                      </div>
                                      <p class="mbr-text first-card-text mbr-fonts-style mbr-lighter display-4 text-justify">
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto optio modi ullam officia.
                                      </p>
                                      <div class="mbr-section-btn card-btn"><a href="page5.html" class="btn btn-md btn-black-outline display-4">
                                              Leia Mais</a></div>
                                  </div>
                              </div>
                          </div>
                     </div>

                  </div>
               </div>
              
            </div>
         </div>



      </div>

   </div>
       <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 m-4">
                <div class="mbr-section-btn align-center">
                    <a class="btn btn-primary display-4" href="#">Veja Mais</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>

</section> -->


@endsection