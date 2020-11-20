@extends('layouts.base')


@section('content')

    <div class="container mt-5 mb-4" id="categoria1" style="margin-top : 6pc !important;">

        <div class="row" style="    margin-bottom: 2pc;">
		<div class="col-md-7">
 <div class="mobile-container">
            <div class="topnav" style="">
                <div class="row">
                    <div class="col-md-1">
                        <a href="javascript:void(0);" class="icon" onclick="myFunctionMenu()" style="">
                            <span class="mbr-iconfont fa-navicon fa mr-2"></span>
                          </a>
                    </div>
                    <div class="col-md-10">
                        <a href="#home" class="active" style="font-size:1.3rem;">MENU - Navegue pelas categorias</a>
                    </div>
                </div>

              <div class="top-menu" id="myLinks" style="margin-top: 2pc;background-color: #efefef; display: none; /* background-color: white; */border-color: #00000024!important;border-radius: 15px;border-style: solid;">
                @foreach ($categorias as $item)
                  <a href="{{route('categorias',['id_subcategoria' => $item->id_subcategoria, 'nome_subcategoria' => str_slug($item->nome_subcategoria)])}}" class="menu-color">{{$item->nome_subcategoria}}</a><hr>  
                @endforeach
                </div>
              
            </div>
        </div>

        </div>
		<div class="col-md-5">
<form method="POST" action="https://lacs.com.br/search" class="mbr-form form-with-styler m-4 d-flex justify-content-end">
  <input type="hidden" name="_token" value="8h7YPpWs6kt8VjlcN4s7u8garHz3XPQ7YXtQgCIx">          <div class="dragArea row d-flex justify-content-end">
            <div class="col-8 col-md-10 col-lg-10" style="
    padding: 0;
">
              <input class="input-sm input-inverse special-form display-4 form-search mr-2" name="search_term" placeholder="Faça a sua pesquisa" type="text" required="" style="
    width: 100%;
">
            </div>
            <div class="col-4 col-md-2 d-flex justify-content-center" style="padding: 0;">
              <button class="btn-sm btn-black" type="submit" style="border-radius: 15px!important;border: 0.8px!important;padding: 0.6rem 1.1rem!important;"><span class="fa fa-search mbr-iconfont mbr-iconfont-btn"></span></button>
            </div>
          </div>
          
        </form>
        </div>
    </div>
            
            <div class="row d-flex justify-content-center align-items-center mb-4">


                        <div class="col-12">

                        {{-- <div class="row mb-4">
                                <div class="col-12">
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                    <p class="align-left display-6 text-white mbr-bold style-categories" style="background-color: {{$categoria_posts->cor}}!important;">{{$categoria_posts->nome_subcategoria}}</p>
                                    </div>
                                </div>
                            </div> --}}

            
                        {{-- <div class="row mb-4">
                        <div class="col-12">
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <p class="align-left display-6 text-white mbr-bold style-categories" style="background-color: #0c83e4!important;"></p>
                            </div>
                        </div>
                        </div> --}}
        
                        <div class="row">
                            
                            @if(empty($posts))

                                <div class="col-md-12">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Nenhum post encontrado !</strong>
                                      </div>
                                </div>

                            @else

                                @foreach ($posts as $post)
                                    
                                <div class="card first-card col-lg-4 col-md-4 col-xs-12 col-sm-12">
                                        <div class="card-wrapper">
                                            <div class="card-img">
                                                <a href="{{route('post', ['id' => $post->id_texto, 'nome' => str_slug($post->titulo)])}}"><img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$post->imagem}}" alt="" title="" style="height:172px;">
                                                <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$post->cor}}!important;height: 2vh;"></div></a>
                                            </div>
                                            <div class="card-box">
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


                                @endforeach

                            @endif
                            

                            
                            

                            
                            
                   </div>

                                            
                                                        
                                    </div>
            


                    
                </div>
    </div>

    <script type="text/javascript">
        function myFunctionMenu() {
          var x = document.getElementById("myLinks");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
        
  
        </script>
@endsection