<section class="cid-rDFIgeLuR3 mbr-parallax-background" id="header2-54" style="background-image: url({{asset('assets/images/mbr-1920x1202.jpg')}})!important;">

    

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container-fluid">
        <div class="row justify-content-space-between">
            <div class="col-md-7 text-element">
                <h2 class="mbr-section-title mbr-fonts-style mbr-white mbr-bold display-2">Ficou com dúvida?&nbsp;</h2>
                <div class="underline align-left pb-3">
                     <div class="line"></div>
                </div>
                
                
            </div>
            <div class="form-1 col-md-4 col-xl-3" data-form-type="formoid">
                
            <form class="mbr-form form-with-styler" method="POST" action="{{route('contato.faleConosco')}}">
                @csrf
                    <div class="dragArea row">
                        <div class="col-md-12">
                            <h3 class="mbr-fonts-style mbr-fonts-style mbr-fonts-style form-title pb-3 mbr-fonts-style display-5">Fale Conosco</h3>
                        </div>
                        <div class="col-md-12  form-group">
                            <label class="form-control-label mbr-fonts-style display-4">Nome Completo:</label>
                            <input type="text" name="nome" required="required" class="form-control display-7">
                        </div>
                        <div data-for="email" class="col-md-12  form-group">
                            <label class="form-control-label mbr-fonts-style display-4">E-mail:</label>
                            <input type="text" name="email" class="form-control display-7" required="required">
                        </div>
                        <div data-for="phone" class="col-md-12  form-group">
                            <label class="form-control-label mbr-fonts-style display-4">Telefone:</label>
                            <input type="text" name="telefone" class="form-control display-7">
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="form-control-label mbr-fonts-style display-4">Mensagem</label>
                            <textarea name="mensagem" class="form-control display-7"></textarea>
                        </div>
                        <div class="col-md-12 input-group-btn align-center">
                          <button type="submit" class="btn btn-form btn-primary-outline display-4"><span class="fa fa-send mbr-iconfont mbr-iconfont-btn"></span>ENVIAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
              
</section>