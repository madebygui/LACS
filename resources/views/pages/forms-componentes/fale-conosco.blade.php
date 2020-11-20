<div class="col-lg-3 col-md-8 pb-3">
    <h3 class="mbr-fonts-style mbr-section-title mbr-white align-left display-7"><strong>Fale Conosco</strong></h3>
    <div class="form-wrap" data-form-type="formoid">
      <!--Formbuilder Form-->
      <form class="mbr-form form-with-styler" method="POST" action="{{route('contato.faleConosco')}}">
        @csrf
        <div class="dragArea row">
          <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="nome">
            <input type="text" name="nome" placeholder="Nome Completo" data-form-field="text" class="form-control display-7" value="" id="text-footer7-b" required>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="email">
            <input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control display-7" value="" id="email-footer7-b" required>
          </div>
          <div data-for="text1" class="col-lg-12 col-md-12 col-sm-12 form-group">
            <input type="text" name="telefone" placeholder="Telefone" data-form-field="text1" class="form-control display-7" value="" id="text1-footer7-b" required>
          </div>
          <div data-for="textarea" class="col-lg-12 col-md-12 col-sm-12 form-group">
            <textarea name="mensagem" placeholder="Mensagem" data-form-field="textarea" class="form-control display-7" id="textarea-footer7-b"></textarea>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 form-group">
            <button type="submit" class="btn btn-form btn-primary display-4 btn-sm"><span class="fa fa-send mbr-iconfont mbr-iconfont-btn"></span>ENVIAR</button>
          </div>
        </div>
      </form><!--Formbuilder Form-->
      </div>
</div>