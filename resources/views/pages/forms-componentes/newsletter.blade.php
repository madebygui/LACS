<div id="form-newsletter">
    <div class="row align-center justify-content-start align-items-center mt-5">
      <div class="col-md-12">
        <h2 class="mbr-section-title align-left mbr-fonts-style display-5 mbr-bold text-primary">RECEBA NOVIDADES</h2>
          <div class="underline align-left">
            <div class="line" style="background: linear-gradient(90deg, #00694f, #333333);"></div>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col-12">
      <form class="mbr-form form-with-styler" method="POST" action="{{route('contato.newsletter')}}">
        @csrf
        <div class="mt-3 mb-3">
          <input type="text" name="nome" required class="form-control display-4" placeholder="Nome">
        </div>
        <div class="mt-3 mb-3">
          <input type="email" name="email" required class="form-control display-4" placeholder="E-mail">
        </div>
        <div class="m-4 align-center">
          <button type="submit" href="#" class="btn btn-lg btn-primary display-4">QUERO RECEBER</button>
        </div>
      </form>
    </div>
  </div>
  </div>