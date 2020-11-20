<div class="col-md-7 col-lg-7 col-sm-10">
        <div class="mobile-container">
            <div class="topnav">
              <a href="#home" class="active ml-5" style="font-size:1.3rem;" >MENU - Navegue pelas categorias</a>
              <div class="top-menu" id="myLinks">
                @foreach ($categorias as $item)
                  <a href="{{route('categorias',['id_subcategoria' => $item->id_subcategoria, 'nome_subcategoria' => str_slug($item->nome_subcategoria)])}}" class="menu-color">{{$item->nome_subcategoria}}</a><hr>  
                @endforeach
              </div>
              <a href="javascript:void(0);" class="icon" onclick="myFunctionMenu()">
                <span class="mbr-iconfont fa-navicon fa mr-2"></span>
              </a>
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