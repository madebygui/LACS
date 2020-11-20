<section class="features12 cid-rzCaomR7Mz" id="features12-1s">
    
    <div class="container mt-5 mb-4" id="categoria3">

      <h2 class="mbr-section-title align-left mbr-fonts-style display-5"><strong>
            Confira algumas das notícias relacionadas</strong></h2>
        <div class="underline align-left pb-3">
            <div class="line"></div>
        </div>
        
        <div class="row d-flex justify-content-center align-items-center mb-4">

          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row mb-4">
              <div class="col-12">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <p class="align-left display-6 text-white mbr-bold style-categories" style="background-color: {{$posts[0]->cor}}!important;">{{$posts[0]->nome_subcategoria}}</p>
                  </div>
              </div>
            </div>

              <div class="row">
                @foreach ($posts as $item)
                
                <div class="card first-card col-sm-12 col-lg-4 col-md-4 mt-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                        <a href="{{route('post', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}"><img src="{{empty($item->imagem) ? asset('no-image.jpg') : 'https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/'.$item->imagem.''}}" alt="" style="height:178px !important;" title="">
                        <div class="img-text mbr-text mbr-fonts-style align-center mbr-white display-4" style="background-color:{{$item->cor}}!important;height: 2vh;"></div></a>
                        </div>
                        <div class="card-box" style="padding: 1rem!important;">
                           <div class="first-card-info pb-3">
                                <div class="info-wrapper">
                                    <span class="mbr-iconfont fa-calendar fa" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                                    <p class="mbr-text info-text mbr-fonts-style mbr-lighter display-4">
                                        {{ Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</p>
                                </div>
                            </div>
                          <h2 class="first-card-title mbr-fonts-style display-7 text-left"><a href="{{route('post', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}"><strong>{{$item->titulo}}</strong></a></h2>
                           
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