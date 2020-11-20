<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Text;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function __construct()
    {
        return [
                'contato' => Text::where('localizacao', 44)->where('excluido',0)->where('ativo',1)->get(),
                'links' => Text::where('localizacao', 45)->where('excluido',0)->where('ativo',1)->get(),
                'localizacao' => Text::where('localizacao', 46)->where('excluido',0)->where('ativo',1)->first(),
                'redes_sociais' => Text::where('localizacao', 47)->where('excluido',0)->where('ativo',1)->get()
        ];
    }
}
