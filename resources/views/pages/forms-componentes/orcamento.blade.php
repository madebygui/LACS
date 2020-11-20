<section class="cid-rDFFPhUlJD" id="form3-53">

    <div class="container-fluid">
       <div class="row justify-content-center">
          <div class="form-1 col-md-10 col-lg-8" data-form-type="formoid">
             <form class="mbr-form form-with-styler" method="POST" action="{{route('contato.orcamento')}}">
               @csrf
                <div class="dragArea form-row">
                   <div class="col-md-12">
                      <h1 class="mbr-fonts-style mbr-fonts-style mbr-section-title align-center display-5"><strong>Solicite um Orçamento</strong></h1>
                   </div>
                   <div class="col-md-6 form-group">
                      <input type="text" name="nome" required="required" class="form-control display-7" placeholder="Nome">
                   </div>
                   <div class="col-md-6 form-group">
                      <input type="text" name="sobrenome" class="form-control display-7" required="required" placeholder="Sobrenome">
                   </div>
                   <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                      <input type="email" name="email" class="form-control display-7" required="required" placeholder="E-mail">
                   </div>
                   <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                      <input type="text" name="telefone" class="form-control display-7" required="required" placeholder="Telefone">
                   </div>
                   <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                      <input type="text" name="empresa" placeholder="Empresa" class="form-control display-7">
                   </div>
                   <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                      <input type="text" name="cargo" placeholder="Cargo" class="form-control display-7">
                   </div>
                   <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                      <select name="num_funcionarios" class="form-control display-7" required="required">
                         <option value="Número de funcionários">Número de funcionários</option>
                         <option value="1 funcionário">1 funcionário</option>
                         <option value="De 2 á 3 funcionários">De 2 á 3 funcionários</option>
                         <option value="De 4 á 10 funcionários">De 4 á 10 funcionários</option>
                         <option value="De 11 á 50 funcionários">De 11 á 50 funcionários</option>
                         <option value="De 51 á 200 funcionários">De 51 á 200 funcionários</option>
                         <option value="Acima de 200 funcionários">Acima de 200 funcionários</option>
                      </select>
                   </div>
                   <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                      <input name="site" type="text" placeholder="https://seusite.com" pattern="https://.*" class="form-control display-7">
                   </div>
                   <div class="col-md-12 form-group" data-for="message">
                      <textarea name="mensagem" placeholder="Mensagem" class="form-control display-7"></textarea>
                   </div>
                   <div class="col-md-12 input-group-btn align-center">
                      <button type="submit" class="btn btn-form btn-primary display-4">SOLICITAR</button>
                  </div>
                </div>
             </form>
            
          </div>
       </div>
    </div>

</section>