@extends('layouts.base', ['footer' => $footer])


@section('content')

  <section class="header3 cid-rzkFNi0OyX mbr-fullscreen"  style="background-image: url(https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$cartao_lacs->imagem2}}" id="header3-17">



    <div class="mbr-overlay" style="opacity: 0.2;">
    </div>

    <div class="container align-left">
      <div class="row justify-content-center">
        <div class="media-container-column mbr-white col-md-10">
          <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-2">{{$cartao_lacs->titulo}}</h1>
          <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
            O melhor para a sua saúde!</h3>


            <div class="mbr-section-btn align-center pt-3"><a class="btn btn-md btn-primary display-4" href="#formbuilder-1c">Contratar</a>
              <a class="btn btn-md btn-danger-outline display-4" href="popup:#mbr-popup-1a" data-toggle="modal" data-target="#mbr-popup-1a">Termos de Uso</a></div>
            </div>
          </div>
        </div>

      </section>

      <section class="header1 cid-rzkGNLocvw" id="header1-18">

        <div class="container-fluid header-content">
          <div class="row text-row">
            <div class="col-md-12 col-lg-7">
              {!! $cartao_lacs->texto !!}
              <div class="mbr-section-btn pb-3"><a class="btn btn-md btn-danger display-4" href="#formbuilder-1c">Contratar</a></div>
            </div>
            <div class="col-lg-5 col-md-12">
              <div class="mbr-figure">
                {!!$cartao_lacs->url!!}
              </div>
            </div>
          </div>
          <div class="row features-row">
            @foreach ($diferenciais as $item)
              <div class="card  p-5 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-4">

                  <span class="mbr-iconfont {{$item->descricao}}" style="color: rgb(13, 105, 81); fill: rgb(13, 105, 81);"></span>
                </div>
                <div class="card-box">
                  <h4 class="card-title mbr-fonts-style display-7"><strong>{{$item->titulo}}</strong></h4>
                  {!! $item->texto !!}
                </div>
              </div>
            @endforeach
          </div>
          <div class=" mbr-white pb-3 align-center m-4">
            <p class="mbr-section-subtitle mbr-fonts-style text-center display-7"><strong>{{$cartao_lacs->descricao}}</strong></p>
          </div>
        </div>
      </section>

      <section class="image1 cid-rzkIMEFYLh" id="image1-1b">
        <!-- Block parameters controls (Blue "Gear" panel) -->

        <!-- End block parameters -->
        <figure class="mbr-figure container-fluid">
          <div class="image-block" style="width: 80%;">
            <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$cartao_lacs->imagem}}" alt="" title="">

          </div>
        </figure>
      </section>

      <section class="form cid-rzkJZAaVXX" id="formbuilder-1c">


        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto mbr-form"  >
              <!--Formbuilder Form-->
              <form class="mbr-form form-with-styler" id="form-cartao" method="POST" action="{{url('/cadastrar-associado')}}" enctype="multipart/form-data">
                @csrf
                <div class="dragArea form-row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <h4 class="mbr-fonts-style display-5"><strong>Dados Pessoais</strong></h4>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <hr>
                  </div>
                  <div data-for="nome" class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label>Primeiro Nome*</label>
                    <input type="text" required="required" name="nome" title="Primeiro Nome" placeholder="Ex: João" data-form-field="name" class="form-control display-7" value="" id="nome-formbuilder-1c">
                  </div>
                  <div data-for="sobrenome" class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label>Sobrenome*</label>
                    <input type="text" required="required" title="Sobrenome" name="sobrenome" placeholder="Ex: da Silva" data-form-field="sobrenome" class="form-control display-7" value="" id="sobrenome-formbuilder-1c">
                  </div>

                  <div data-for="email" class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label>Email*</label>
                    <input type="email" required="required" title="Email" name="email" placeholder="Ex: joao@gmail.com" data-form-field="email" class="form-control display-7" value="" id="email-formbuilder-1c">
                  </div>

                  <div data-for="Data de Nascimento*" class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label for="Data de Nascimento*-formbuilder-1c" class="form-control-label mbr-fonts-style display-4">Data de Nascimento*</label>
                    <input type="date" required="required" title="Data de Nascimento" name="datanasc" data-form-field="date" class="form-control display-7" value="" id="datanasc">
                  </div>

                  <div data-for="cpf" class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <label>CPF*</label>
                    <input type="text" required="required" title="CPF" name="cpf" placeholder="Ex: 123.456.789-00" data-form-field="cpf" class="form-control display-7" value="" id="cpf">
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12 form-group" data-for="rg">
                    <label>RG*</label>
                    <input type="text" required="required" title="RG" name="rg" placeholder="Ex: 12345678*" data-form-field="rg" class="form-control display-7" value="" id="rg">
                  </div>

                  <div data-for="telefone" class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <label>Telefone</label>
                    <input type="tel" name="telefone" placeholder="Ex:(00) 0000-0000" data-form-field="telefone" class="form-control display-7" value="" id="telefone">
                  </div>

                  <div class="col-lg-6 col-md-12 col-sm-12 form-group" data-for="celular">
                    <label>Celular*</label>
                    <input type="tel" required="required" title="Celular" name="celular" placeholder="Ex:(00) 00000-0000" data-form-field="celular" class="form-control display-7" value="" id="celular">
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <h5 class="mbr-fonts-style display-5 m-4"><strong>Endereço</strong></h5>
                  </div>

                  <div data-for="cep" class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <label>CEP*</label>
                    <input type="number" required="required" title="cep" name="cep" placeholder="Ex: 12345678" data-form-field="cep" class="form-control display-7" min="1" step="1" value="" id="cep">
                  </div>

                  <div data-for="cidade" class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <label>Cidade*</label>
                    <input required="required" type="text" title="Cidade" name="cidade" placeholder="Ex: São Paulo" data-form-field="cidade" class="form-control display-7" value="" id="cidade">
                  </div>

                  <div data-for="uf" class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label for="uf-formbuilder-1c" class="form-control-label mbr-fonts-style display-4">Estado*</label>
                    <select required="required" name="uf" data-form-field="uf" title="UF" class="form-control display-7" id="uf">
                      <option value="Selecione um Estado">Selecione um Estado</option>
                      <option value="AC">Acre</option>
                      <option value="AL">Alagoas</option>
                      <option value="AP">Amapá</option>
                      <option value="AM">Amazonas</option>
                      <option value="BA">Bahia</option>
                      <option value="CE">Ceará</option>
                      <option value="DF">Distrito Federal</option>
                      <option value="ES">Espírito Santo</option>
                      <option value="GO">Goiás</option>
                      <option value="MA">Maranhão</option>
                      <option value="MT">Mato Grosso</option>
                      <option value="MS">Mato Grosso do Sul</option>
                      <option value="MG">Minas Gerais</option>
                      <option value="PA">Pará</option>
                      <option value="PB">Paraíba</option>
                      <option value="PR">Paraná</option>
                      <option value="PE">Pernambuco</option>
                      <option value="PI">Piauí</option>
                      <option value="RJ">Rio de Janeiro</option>
                      <option value="RN">Rio Grande do Norte</option>
                      <option value="RS">Rio Grande do Sul</option>
                      <option value="RO">Rondônia</option>
                      <option value="RR">Roraima</option>
                      <option value="SC">Santa Catarina</option>
                      <option value="SP">São Paulo</option>
                      <option value="SE">Sergipe</option>
                      <option value="TO">Tocantins</option>
                    </select>
                  </div>
                  <div data-for="bairro" class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label>Bairro*</label>
                    <input required="required" title="Bairro" type="text" name="bairro" placeholder="Ex: Jardim Primavera" data-form-field="bairro" class="form-control display-7" value="" id="bairro">
                  </div>
                  <div data-for="rua" class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <label>Logradouro*</label>
                    <input required="required" title="Logradouro" type="text" name="rua" placeholder="Rua dos Eucaliptos" data-form-field="rua" class="form-control display-7" value="" id="rua">
                  </div>
                  <div data-for="numero" class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <label>Número*</label>
                    <input required="required" type="number" title="Número" name="numero" placeholder="Somente números" data-form-field="numero" class="form-control display-7" step="1" value="" id="number2-formbuilder-1c">
                  </div>
                  <div data-for="complemento" class="col-lg-6 col-md-12 col-sm-12 form-group">
                    <label>Complemento*</label>
                    <input type="text" name="complemento" title="Complemento" placeholder="Apto, casa, comércio, etc." data-form-field="complemento" class="form-control display-7" value="" id="text3-formbuilder-1c">
                  </div>
                  <div class="col-md-12 col-sm-12 form-group">
                    <input type="file" class="custom-file-input" id="customFile" accept="image/*,application/pdf" name="comprovante">
                    <label class="custom-file-label" for="customFile">Insira aqui um comprovante de endereço</label>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="">
                    <div class="form-control-label">
                      <label for="" class="mbr-fonts-style display-7">
                      </label>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <h5 class="mbr-fonts-style display-5 m-4"><strong>Plano</strong></h5>
                    </div>

                    <div data-for="plano_cartao" class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <label>Plano*</label>
                      <select required="required" title="Plano" name="plano_cartao" data-form-field="plano_cartao" class="form-control display-7" id="plano_cartao">
                        <option value="0">Selecionar um plano</option>
                        @foreach ($planos as $item)
                          <option {{$item->preco > 0 ? '': 'disabled'}} value="{{$item->id}}">{{$item->nome}} - {{$item->preco > 0 ? 'R$ '.number_format($item->preco, 2, ',', '.') : 'Em breve'}}</option>
                          {{-- <option {{$item->preco > 0 ? '': 'disabled'}} value="{{$item->id}}" data-preco={{$item->preco}}>{{$item->nome}} - {{$item->preco > 0 ? 'R$ '.number_format($item->preco, 2, ',', '.') : 'Em breve'}}</option> --}}
                        @endforeach
                      </select>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <h5 class="mbr-fonts-style display-5 m-4"><strong>Forma de Pagamento</strong></h5>
                    </div>

                    <div data-for="forma_pgto" class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <label>Forma de Pagamento*</label>
                      <select required="required" title="Forma de Pagamento" name="forma_pgto" data-form-field="forma_pgto" class="form-control display-7" id="forma_pgto">
                        <option value="">Selecionar forma de pagamento</option>
                        <option value="1">Boleto à vista</option>
                        <option value="3">Cartão de Crédito</option>
                        <option value="4">Cartão de Crédito Recorrente</option>
                        <option value="2">Boleto parcelado</option>
                      </select>

                      <small class="text-success" style="display:none" id="recorrente-descricao">Nessa forma de pagamento o valor parcelado é cobrado mensalmente, mantendo o limite do seu cartão disponível.</small>
                    </div>

                    <div class="mt-5" style="display:none" id="cartao-credito">
                      <h4>Dados do cartão</h4>
                      <div class="form-row">
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                          <label>Número do cartão*</label>
                          <input type="text" title="Número do Cartão" name="form-cartao-numero" placeholder="Formato: 0000 0000 0000 0000" data-form-field="name" class="form-control display-7" value="" id="form-cartao-numero" style="padding-left:65px">
                          <div style="height:61px; display:flex; justify-content:center; align-items:center; position:absolute; top:30px; left:15px">
                            <img src="{{asset('other.jpg')}}" alt="" id="card-brand" style="height:25px !important">
                          </div>

                          <i class="fa fa-check" style="display:none; position:absolute; top:50px; right:18px; color:green;" id="valid_card"></i>
                          <i class="fa fa-times" style="position:absolute; top:50px; right:18px; color:red;" id="invalid_card"></i>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 form-group">
                          <label>Data de Vencimento*</label>
                          <input type="text" name="form-cartao-data-venc" title="Data de Vencimento" placeholder="Formato: MM/AAAA" data-form-field="name" class="form-control display-7" value="" id="form-cartao-data-venc">
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 form-group">
                          <label>CVV*</label>
                          <input type="text" name="form-cartao-digito" title="CVV" placeholder="Formato: 123" data-form-field="name" class="form-control display-7" value="" id="form-cartao-digito">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <label>Nome impresso no cartão*</label>
                          <input type="text" name="form-cartao-nome" title="Nome impresso no cartão" placeholder="Ex: JOÀO DA SILVA" data-form-field="name" class="form-control display-7" value="" id="form-cartao-nome" style="text-transform:uppercase">
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                          <label>CPF Titular*</label>
                          <input type="text" name="form-cartao-cpf" title="CPF Titular" placeholder="Ex: 123.456.789-00" data-form-field="name" class="cpf form-control display-7" value="" id="form-cartao-cpf">
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                          <label>Celular/Fixo Titular*</label>
                          <input type="text" name="form-cartao-telefone" title="Telefone Titular" placeholder="Ex: (00) 00000-0000" data-form-field="name" class="telefone form-control display-7" value="" id="form-cartao-telefone">
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                          <label>Data de Nasc. do Titular*</label>
                          <input type="text" name="form-cartao-nascimento" title="Data de Nasc. do Titular" placeholder="Formato: DD/MM/AAAA" data-form-field="name" class="nascimento form-control display-7" value="" id="form-cartao-nascimento">
                        </div>
                      </div>
                    </div>

                    <div data-for="parcelas" class="col-lg-12 col-md-12 col-sm-12 form-group parcelas" id="parcelas" style="display:none">
                      <label>Quantidade de parcelas*</label>
                      <select name="parcelas" data-form-field="parcelas" class="form-control display-7">
                        <option value="" disabled selected>Preencha o número do cartão para ver a quantidade de parcelas</option>
                      </select>
                    </div>
                    <div data-for="parcelas-boleto" class="col-lg-12 col-md-12 col-sm-12 form-group parcelas" id="parcelas-boleto" style="display:none">
                      <label>Quantidade de parcelas*</label>
                      <select name="parcelas" data-form-field="parcelas" class="form-control display-7">
                        <option value="">Selecionar</option>
                        <option value="1">1x</option>
                        <option value="2">2x</option>
                        <option value="3">3x</option>
                        <option value="4">4x</option>
                        <option value="5">5x</option>
                        <option value="6">6x</option>
                        <option value="7">7x</option>
                        <option value="8">8x</option>
                        <option value="9">9x</option>
                        <option value="10">10x</option>
                        <option value="11">11x</option>
                        <option value="12">12x</option>
                      </select>
                    </div>

                  </div>
                  <div class="col-12 text-center">
                    <div class="form-check form-check-inline col-12 d-flex align-items-center justify-content-center mb-4">
                      <input required type="checkbox" name="Aceito os Termos de Uso" data-form-field="checkbox" class="form-check-input display-7" id="Aceito os Termos de Uso-formbuilder-1c">
                      <label class="form-check-label display-7">Aceito os <a href="popup:#mbr-popup-1a" data-toggle="modal" data-target="#mbr-popup-1a"><strong>Termos de Uso</strong></a></label>
                    </div>
                    <div class="col-12">
                      <button type="button" class="btn btn-primary display-7 text-center" id="conferir-pedido">Conferir Pedido</button>
                    </div>

                  </div>
                </div>
              </form><!--Formbuilder Form-->
            </div>
          </div>
        </div>
      </section>

      <div class="modal mbr-popup cid-rzkIxzGjUE fade" tabindex="-1" role="dialog" data-overlay-color="#000000" data-overlay-opacity="0.8" id="mbr-popup-1a" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header pb-0">
              <h5 class="modal-title mbr-fonts-style mr-4 ml-4 display-7"><strong>{{$termos->titulo}}</strong></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32" fill="currentColor">
                  <path d="M31.797 0.191c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.598 0.581 0.342 1.543 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM14.472 17.515c-0.264-0.256-0.686-0.25-0.942 0.015l-13.328 13.326c-0.613 0.595 0.34 1.562 0.942 0.942l13.328-13.326c0.27-0.262 0.27-0.695 0-0.957zM1.144 0.205c-0.584-0.587-1.544 0.336-0.942 0.942l30.654 30.651c0.613 0.625 1.563-0.325 0.942-0.942z"></path>
                </svg>
              </button>
            </div>

            <div class="modal-body">
              <p class="mbr-text mbr-fonts-style text-justify display-4">
                {!! $termos->texto!!}
                <div>




                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>

        {{-- Produçao --}}
        <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
        {{-- SandBox --}}
        {{-- <script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script> --}}

        <script src="{{asset('js/jquery.creditCardValidator.js')}}"></script>
        <script src="{{asset('js/pagseguro_transacao.js')}}"></script>

        <div class="modal fade" id="modal-confirmacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="height:auto !important">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Conferir Venda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary pre-compra" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary pre-compra" onclick="confirmarCompra()">Confirmar compra</button>
                <button type="button" class="btn btn-secondary pos-compra" data-dismiss="modal" style="display:none">Fechar</button>
                <a href="#" class="btn btn-primary imprimir-boleto" style="display:none" target="_blank">Imprimir Boleto</a>
              </div>
            </div>
          </div>
        </div>




    @endsection
