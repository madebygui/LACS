<?php

namespace App\Providers;

use App\Banner;
use App\Localizacao;
use App\Gallery;
use App\Text;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       // \Illuminate\Support\Facades\URL::forceScheme('https');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('exames_laboratoriais_nav', Text::where('localizacao', 39)->where('excluido',0)->where('ativo',1)->orderBy('titulo')->get());
        View::share('exames_complementares_nav', Text::where('localizacao', 40)->where('excluido',0)->where('ativo',1)->orderBy('titulo')->get());

        View::share('terapias_nav', Text::where('localizacao', 58)->where('excluido',0)->where('ativo',1)->orderBy('titulo')->get());

        View::share('lacs_logo', Text::where('localizacao', 63)->where('excluido',0)->where('ativo',1)->first());
        View::share('botao_whatsapp', Text::where('localizacao', 64)->where('excluido',0)->where('ativo',1)->first());
        View::share('lacs_logo_footer', Text::where('localizacao', 65)->where('excluido',0)->where('ativo',1)->first());

        View::share('lacs_metatags', Text::where('localizacao', 66)->where('excluido',0)->where('ativo',1)->first());


    }
}
