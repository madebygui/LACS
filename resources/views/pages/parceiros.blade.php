@extends('layouts.base',['footer' => $footer])

@section('content')
<section class="teams1 cid-rDFBLCDmpm" id="teams1-51">
    <div class="container-fluid">
        <h2 class="mbr-title mbr-fonts-style align-center mbr-black display-2">
            Empresas Parceiras</h2>
        <div class="underline align-center">
            <div class="line"></div>
        </div>

        <div class="row justify-content-center flip-card pt-4">
              
            @foreach ($parceiros as $parceiro)          
                <div class="col-sm-6 card-wrap col-lg-4 d-flex justify-content-center align-items-center">
                        <a href="{{$parceiro->galeria_descricao}}" target="_blank">
                    <div class="image-wrap">
                            <img src="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$parceiro->galeria_imagem}}" alt="" title="">
                        <div class="img-overlay"></div>
                    </div>
                </a>
                </div>
            @endforeach
        </div>

    </div>
</section>
@endsection
