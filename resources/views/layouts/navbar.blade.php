

<section class="menu cid-rz3eVzMnGU" once="menu" id="menu3-o" data-sortbtn="btn-primary">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg" style="border-bottom: 2.5px solid #00694f!important;">
       <div class="navbar-brand">
          <span class="navbar-logo">
          <a href="{{url('/')}}">  
             <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$lacs_logo->imagem}}" alt="LACS" title="LACS Logo" style="height: 3.8rem;">
          </a>
          </span>
       </div>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <div class="hamburger">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
          </div>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
             <li class="nav-item">
             <a class="nav-link link text-black display-6" href="{{url('/sobre')}}">
                Sobre</a>
             </li>
             <li class="nav-item">
             <a class="nav-link link text-black display-6" href="{{url('/cartao-lacs')}}">
                Cartão Lacs</a>
             </li>
             <li class="nav-item dropdown">
                <a class="nav-link link dropdown-toggle text-black display-6" href="#" data-toggle="dropdown-submenu" aria-expanded="false">
                Exames</a>
                <div class="dropdown-menu">
                   
                   <div class="dropdown">
                      <a class="dropdown-item dropdown-toggle text-black display-6" href="#" data-toggle="dropdown-submenu" aria-expanded="false">Exames Complementares de Diagnóstico</a>
                      <div class="dropdown-menu dropdown-submenu">
                           @foreach ($exames_complementares_nav as $item)  
                           <a class="dropdown-item text-black display-6" href="{{route('complementares', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}">{{$item->titulo}}</a>
                         @endforeach
                     </div>
                   </div>
                   <div class="dropdown">
                      <a class="dropdown-item dropdown-toggle text-black display-6" href="#" data-toggle="dropdown-submenu" aria-expanded="false">Exames Laboratoriais</a>
                      <div class="dropdown-menu dropdown-submenu">
                         @foreach ($exames_laboratoriais_nav as $item)  
                           <a class="dropdown-item text-black display-6" href="{{route('laboratoriais', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}">{{$item->titulo}}</a>
                         @endforeach
                        </div>
                   </div>
                </div>
             </li>
            <li class="nav-item"><a class="nav-link link text-black display-6" href="{{route('especialidades')}}" aria-expanded="false">Especialidades</a></li>
            <li class="nav-item"><a class="nav-link link text-black display-6" href="{{url('/blog')}}">Blog</a></li>
             <li class="nav-item dropdown">
                <a class="nav-link link text-black dropdown-toggle display-6" href="#top" data-toggle="dropdown-submenu" aria-expanded="false">Terapias Integrativas</a>
                <div class="dropdown-menu">
                   @foreach ($terapias_nav as $item)  
                     <a class="text-black dropdown-item display-6" href="{{route('terapias', ['id' => $item->id_texto, 'nome' => str_slug($item->titulo)])}}">{{$item->titulo}}</a>
                   @endforeach
                 </div>
             </li>

            <li class="nav-item"><a class="nav-link link text-black display-6" href="{{url('/sesmt')}}">Saúde Ocupacional</a></li>
          </ul>
          <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-secondary-outline display-6" href="http://examesweb.com.br/" target="_blank">
             Exames Online</a>
          </div>
       </div>

       @if(isset($progress))
       <div class="progress-container">
         <div class="progress-bar" id="myBar"></div>
     </div>
     @endif
    </nav>
 </section>