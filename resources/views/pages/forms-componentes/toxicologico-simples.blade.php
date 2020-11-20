<section class="cid-rzkChpMsxF mbr-parallax-background" style="background-image: url(https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$toxicologico->imagem}}) !important;" id="header2-u" data-sortbtn="btn-primary">
  
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>
    <div class="container-fluid">
        <div class="row justify-content-space-between">
            <div class="col-md-7 text-element">
            <h2 class="mbr-section-title mbr-fonts-style mbr-white mbr-bold display-2">{{$toxicologico->titulo}}</h2>
                <div class="underline align-left pb-3">
                     <div class="line"></div>
                </div>
                <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style pb-3 mbr-white display-5">{{$toxicologico->descricao}}</h3>
              <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="{{route('toxicologico')}}">Saiba Mais</a></div>
            </div>
            <div class="form-1 col-md-4 col-xl-3" data-form-type="formoid">
                <!---Formbuilder Form--->
            <form method="POST" class="mbr-form form-with-styler" action="{{route('contato.toxicologico')}}">
                @csrf
                    <div class="dragArea row">
                        <div class="col-md-12  form-group" data-for="name">
                            <label for="name-header2-u" class="form-control-label mbr-fonts-style display-4">Nome</label>
                            <input type="text" name="nome" data-form-field="Name" required="required" class="form-control display-7" id="name-header2-u">
                        </div>
                        <div data-for="email" class="col-md-12  form-group">
                            <label for="email-header2-u" class="form-control-label mbr-fonts-style display-4">E-mail</label>
                            <input type="text" name="email" data-form-field="E-mail" class="form-control display-7" required="required" id="email-header2-u">
                        </div>
                        <div data-for="phone" class="col-md-12  form-group">
                            <label for="phone-header2-u" class="form-control-label mbr-fonts-style display-4">Telefone</label>
                            <input type="text" name="telefone" data-form-field="Phone" class="form-control display-7 celular" id="phone-header2-u">
                        </div>
                        <div class="col-md-12  form-group" data-for="name">
                            <label for="name-header2-u" class="form-control-label mbr-fonts-style display-4">Empresa</label>
                            <input type="text" name="empresa" data-form-field="Name" required="required" class="form-control display-7" id="name-header2-u">
                        </div>
                        
                        <div class="col-md-12 input-group-btn text-center"><button type="submit" class="btn btn-form btn-primary-outline display-4"><span class="fa fa-send mbr-iconfont mbr-iconfont-btn"></span>ENVIAR</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
              
</section>