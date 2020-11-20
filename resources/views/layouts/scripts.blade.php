
<script async src="{{asset('assets/popper/popper.min.js')}}"></script>
<script async src="{{asset('js/bootstrap.min.js')}}"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}
<script async src="{{asset('assets/parallax/jarallax.min.js')}}"></script>
<script async src="{{asset('assets/touchswipe/jquery.touch-swipe.min.js')}}"></script>
<script async src="{{asset('js/jquery.mb.vimeo_player.js')}}"></script>
<script async src="{{asset('assets/dropdown/js/nav-dropdown.js')}}"></script>
<script async src="{{asset('assets/dropdown/js/navbar-dropdown.js')}}"></script>
<script async src="{{asset('js/bootstrap-carousel-swipe.js')}}"></script>
<script async src="{{asset('assets/mbr-clients-slider/mbr-clients-slider.js')}}"></script>
<script async src="{{asset('assets/playervimeo/vimeo_player.js')}}"></script>
<script async src="{{asset('js/jquery.mb.ytplayer.min.js')}}"></script>
<script async src="{{asset('assets/mbr-popup-btns/mbr-popup-btns.js')}}"></script>
{{-- <script async src="{{asset('js/jquery.formstyler.js')}}"></script> --}}
{{-- <script async src="{{asset('js/jquery.formstyler.min.js')}}"></script> --}}
<script async src="{{asset('js/jquery.datetimepicker.full.js')}}"></script>
{{-- <script src="{{asset('assets/smoothscroll/smooth-scroll.js')}}"></script> --}}
<script async src="{{asset('assets/theme/js/script.js')}}"></script>
{{-- <script src="{{asset('assets/formoid/formoid.min.js')}}"></script> --}}
<script async src="{{asset('assets/slidervideo/script.js')}}"></script>
<script async src="{{asset('assets/gallery/script.js')}}"></script>
<script async src="{{asset('assets/mobirise-shop/script.js')}}"></script>
<script  src="{{asset('js/sweetalert2.all.min.js')}}"></script>
<script async src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
<script async src="https://apis.google.com/js/plusone.js"></script>
<script async src="{{asset('assets/facebook-plugin/facebook-script.js')}}"></script>

  <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6425219.js"></script>
  <!-- End of HubSpot Embed Code -->

  @if(session('success'))
  <script>

              Swal.fire({
                  type: 'success',
                  text : "{{session('success')}}"
              });

  </script>
  @endif

<script>

     @if ($errors->any())

     errors = {!! json_encode($errors->messages()) !!};
                        out = '';
                        for (var p in errors) {
                        out += errors[p] + '<br>' ;
                        }

                    $(document).ready(function(){


                        Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                html : `${out}`
                            });


                    })




    @endif
</script>

@if(session()->has('message'))
    <script>

        var out = {!! json_encode(session()->get('message')) !!};
         $(document).ready(function(){


         Swal.fire({
          type: 'success',
          title: 'Muito bem !',
          html : `${out}`
        });


    });
    </script>
@endif

@if (session('status'))
    <script>
    Swal.fire(
    'Sucesso!',
    'Aguarde que entraremos em contato para confirmar o pedido',
    'success'
    )
    </script>
@endif

<script>
            $(document).ready(function() {

        $('#telefone').mask('(00) 0000-0000');
        $('#cpf').mask('000.000.000-00', {reverse: true});
        var maskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        options = {onKeyPress: function(val, e, field, options) {
            field.mask(maskBehavior.apply({}, arguments), options);
        }
    };

    $('.celular').mask(maskBehavior, options);

    });

    $(window).load(function() {

$(".loader").fadeOut("slow");

});

</script>
