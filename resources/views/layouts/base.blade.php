<!DOCTYPE html>
<html>
<head>
	
	@component('layouts.head')	
	@endcomponent

	@if(isset($blog_metatags))
		@component('layouts.meta', ['blog_metatags' => $blog_metatags])	
		@endcomponent
	@else
		@component('layouts.meta')	
		@endcomponent
	@endif



</head>
<body>
	<div class="loader"></div>

	@if(isset($progress))
		@component('layouts.navbar', ['progress' => $progress])
		@endcomponent
	@else
		@component('layouts.navbar')
		@endcomponent
	@endif
	
	



	@yield('content')


	@php
		use App\Http\Controllers\Controller;
		if(!isset($footer)){
			$footer = new Controller();
		}
	@endphp

	@component('layouts.footer', ['footer' => $footer])	
	@endcomponent

	@include('layouts.scripts')



</body>
</html>