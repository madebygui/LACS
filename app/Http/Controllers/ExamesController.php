<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;
use App\SubcategoriaLacs;

class ExamesController extends Controller
{
    public function __construct()
    { 
      $this->footer = parent::__construct();  
    }

    public function examesLaboratoriais($id)
    {
        $exame =  Text::where('id_texto', $id)->where('excluido',0)->where('ativo',1)->firstOrFail();
        $posts = [];

        if(!empty($exame->categoria_1)){

            $posts  = Text::join('tb_subcategoria_lacs', 'tb_subcategoria_lacs.id_subcategoria', '=', 'tb_texto.categoria_1')
            ->where('tb_texto.excluido',0)
            ->where('ativo',1)
            ->where('categoria_1', $exame->categoria_1)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->select('tb_texto.*', 'tb_subcategoria_lacs.nome_subcategoria','tb_subcategoria_lacs.cor')
            ->get();

        }


        return view('pages.exames.examesLaboratoriais')
        ->with([
            'footer' => $this->footer,
            'exame' => $exame,
            'posts' => $posts
        ]);

    }

    public function examesComplementares($id)
    {
        $exame = Text::where('id_texto', $id)->where('excluido',0)->where('ativo',1)->firstOrFail();
        $posts = [];

        if(!empty($exame->categoria_1)){

            $posts  = Text::join('tb_subcategoria_lacs', 'tb_subcategoria_lacs.id_subcategoria', '=', 'tb_texto.categoria_1')
            ->where('tb_texto.excluido',0)
            ->where('ativo',1)
            ->where('categoria_1', $exame->categoria_1)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->select('tb_texto.*', 'tb_subcategoria_lacs.nome_subcategoria','tb_subcategoria_lacs.cor')
            ->get();

        }

        return view('pages.exames.examesComplementares')
        ->with([
            'footer' => $this->footer,
            'exame' => $exame,
            'posts' => $posts
        ]);
    }

    
}
