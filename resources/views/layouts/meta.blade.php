<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="generator" content="Agência ECOS, agenciaecos.com">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="{{asset('assets/images/icon-45x45.png')}}" type="image/x-icon">
<meta name="robots" content="index, follow">
<meta name="csrf-token" content="{{ csrf_token() }}">


<meta lang='pt-br' name='keywords' content='{{$lacs_metatags->url}}'/>

@if(!isset($blog_metatags))
<meta name="description" content="{{$lacs_metatags->descricao}}">
    <title>{{$lacs_metatags->titulo}}</title>
    <meta name="author" content="{{$lacs_metatags->titulo}}">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:title" content="{{$lacs_metatags->titulo}}">
    <meta property="og:site_name" content="{{$lacs_metatags->titulo}}">
    <meta property="og:description" content="{{$lacs_metatags->descricao}}">
    <meta property="og:image" content="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$lacs_metatags->imagem}}">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="800">
@else
    <title>{{$blog_metatags->titulo}}</title>

    <meta name="description" content="{{$blog_metatags->descricao}}">
    <meta name="author" content="{{$lacs_metatags->titulo}}">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:title" content="{{$blog_metatags->titulo}}">
    <meta property="og:site_name" content="{{$lacs_metatags->titulo}}">
    <meta property="og:description" content="{{$blog_metatags->descricao}}">
    <meta property="og:image" content="https://s3-us-west-2.amazonaws.com/fasow/28730/imagens/{{$blog_metatags->imagem}}">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="800">

@endif
