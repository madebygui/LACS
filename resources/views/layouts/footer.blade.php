<section class="cid-rz2yJU0Zky" id="footer7-b" data-sortbtn="btn-primary">
    <div class="container-fluid">
    <div class="row justify-content-center align-center">
        <div class="col-lg-2 col-md-3 pb-3">
          <div class="logo-section align-left">
              <a href="#top">
                <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$lacs_logo_footer->imagem}}" alt="Mobirise" title="" style="width: 45%;">
              </a>
          </div>
          <div class="social-media align-left">
             <ul>
               @foreach ($footer['redes_sociais'] as $item)
               <li>
                   <a class="icon-transition" href="{{$item->url}}" target="_blank">
                   <span class="mbr-iconfont mbr-white {{$item->descricao}}"></span>
                   </a>
               </li>
               @endforeach
             </ul>
          </div>
          <h3 class="mbr-fonts-style mbr-text mbr-white align-left display-4"></h3>
        </div>
        <div class="col-lg-2 col-md-3 pb-3">
          <h3 class="mbr-fonts-style mbr-section-title mbr-white align-left display-7"><strong>
              Contato</strong></h3>
          <ul class="mbr-fonts-style mbr-list align-left display-4">
            @foreach ($footer['contato'] as $item)

              <li><a class="text-warning" href="{{$item->url}}"><span class="mbr-iconfont text-warning {{$item->descricao}} mr-2"></span>{{$item->titulo}}</a></li>     
            @endforeach
            <li><br></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 pb-3">
            <h3 class="mbr-fonts-style mbr-section-title mbr-white align-left display-7"><strong>
                Links Úteis</strong></h3>
            <ul class="mbr-fonts-style mbr-list align-left display-6">
              @foreach ($footer['links'] as $item)
                <li><a class="text-warning" href="{{$item->url}}" target="_blank"><span class="mbr-iconfont text-warning fa-arrow-right fa"></span> {{$item->titulo}}</a></li>
              @endforeach
              
            </ul>
        </div>
        <div class="col-lg-3 col-md-3 pb-3">
            <h3 class="mbr-fonts-style mbr-section-title mbr-white align-left display-7"><strong>Localização</strong></h3>
            <div>
                {!! $footer['localizacao']->texto !!}
                
            </div>
        </div>

        @component('pages.forms-componentes.fale-conosco')
        @endcomponent

    </div>
</div>
</section>

<section once="footers" class="cid-rz2yPWa9Sx" id="footer1-f" data-sortbtn="btn-primary">
<div class="container">
    <div class="media-container-row align-center justify-content-center align-items-center">
        <div class="section-text m-2">
            <p class="mbr-text mbr-black mb-0 mbr-fonts-style display-4">LACS - {{\Carbon\Carbon::now()->year}}. Todos os direitos reservados ® Desenvolvido por <a href="https://agenciaecos.com" target="_blank" class="text-warning"><strong>ECOS</strong></a></p>
        </div>
        
    </div>
</div>
</section>


<div class="mbr-arrow-up">
  <a class="d-flex align-items-center justify-content-center" href="https://wa.me/11954460428" target="_blank">
    <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$botao_whatsapp->imagem}}" class="w-75">
  </a>
</div>