<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;
use App\Localizacao;
use App\Banner;
use App\Produtos;

class PagesController extends Controller
{
    public function __construct()
    {
      $this->footer = parent::__construct();
    }
    public function index(){

         $banner_home = Banner::where('excluido', 0)->where('is_mobile', 0)->where('ativo',1)->get();
         $banner_home_mobile = Banner::where('excluido', 0)->where('is_mobile',1)->where('ativo',1)->get();

         $clinica_lacs = Text::where('localizacao', 36)->where('excluido',0)->where('ativo',1)->get();
         $quem_somos = Text::where('localizacao', 37)->where('excluido',0)->where('ativo',1)->first();
         $melhor_saude = Text::where('localizacao', 38)->where('excluido',0)->where('ativo',1)->first();

         $exames_desc = Text::where('localizacao', 43)->where('excluido',0)->where('ativo',1)->get();
         $exames_laboratoriais =  Text::where('localizacao', 48)->where('excluido',0)->where('ativo',1)->first();
         $exames_diagnostico =  Text::where('localizacao', 49)->where('excluido',0)->where('ativo',1)->first();

         $toxicologico =  Text::where('localizacao', 41)->where('excluido',0)->where('ativo',1)->first();

         $parceiros = Text::
         join('tb_galeria', 'tb_galeria.localizacao', '=', 'tb_texto.galeria')
         ->where('tb_texto.localizacao', 42)
         ->where('tb_galeria.excluido',0)
         ->where('tb_texto.excluido',0)
         ->select('tb_galeria.imagem AS galeria_imagem','tb_galeria.descricao as galeria_descricao', 'tb_texto.*')
         ->get();

        return view('pages.home')
         ->with([
             'banner_home' => $banner_home,
             'banner_home_mobile' => $banner_home_mobile,
             'clinica_lacs' => $clinica_lacs,
             'quem_somos' => $quem_somos,
             'melhor_saude' => $melhor_saude,
             'exames_desc' => $exames_desc,
             'toxicologico' => $toxicologico,
             'parceiros' => $parceiros,
             'footer' => $this->footer
         ]);
    }

    public function cartaoLacs()
    {

        $cartao_lacs = Text::where('localizacao', 55)->where('excluido',0)->where('ativo',1)->first();
        $termos = Text::where('localizacao', 67)->where('excluido',0)->where('ativo',1)->first();
        $diferenciais = Text::where('localizacao', 56)->where('excluido',0)->where('ativo',1)->get();
        $planos = Produtos::whereNull('deleted_at')->orderBy('preco')->get();

        return view('pages.cartaoLacs')
        ->with([
            'cartao_lacs' => $cartao_lacs,
            'diferenciais' => $diferenciais,
            'termos' => $termos,
            'footer' => $this->footer,
            'planos' => $planos
        ]);
    }

    public function sobre()
    {
        $historia = Text::where('localizacao', 51)->where('excluido',0)->where('ativo',1)->first();
        $missao_visao_valores = Text::where('localizacao', 52)->where('excluido',0)->where('ativo',1)->get();
        $un = [];

        $unidades = Text::
        join('tb_galeria', 'tb_galeria.localizacao', '=', 'tb_texto.galeria')
        ->where('tb_texto.localizacao', 53)
        ->where('tb_galeria.excluido',0)
        ->where('tb_texto.excluido',0)
        ->select('tb_galeria.titulo AS galeria_titulo','tb_galeria.imagem AS galeria_imagem','tb_galeria.descricao as galeria_descricao', 'tb_texto.*')
        ->get();

        foreach($unidades as $unidade){
            $un[$unidade->titulo][] = $unidade;
        }


        return view('pages.sobre')
        ->with([
            'historia' => $historia,
            'missao_visao_valores' => $missao_visao_valores,
            'unidades' => $un,
            'footer' => $this->footer
        ]);
    }


    public function especialidades()
    {
        $especialidades = Text::where('localizacao', 57)->where('excluido',0)->where('ativo',1)->get();
        $relacionados = Text::where('localizacao', 62)->where('excluido',0)->where('ativo',1)->first();
        $posts = [];

        if(!empty($relacionados->categoria_1)){

            $posts  = Text::join('tb_subcategoria_lacs', 'tb_subcategoria_lacs.id_subcategoria', '=', 'tb_texto.categoria_1')
            ->where('tb_texto.excluido',0)
            ->where('ativo',1)
            ->where('categoria_1', $relacionados->categoria_1)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->select('tb_texto.*', 'tb_subcategoria_lacs.nome_subcategoria','tb_subcategoria_lacs.cor')
            ->get();

        }

        return view('pages.especialidades')
        ->with([
            'footer' => $this->footer,
            'especialidades' => $especialidades,
            'posts' => $posts
        ]);
    }

    public function terapiasIntegrativas($id)
    {
        $terapia = Text::where('id_texto',$id)->where('excluido',0)->where('ativo',1)->first();
        $posts = [];

        if(!empty($terapia->categoria_1)){

            $posts  = Text::join('tb_subcategoria_lacs', 'tb_subcategoria_lacs.id_subcategoria', '=', 'tb_texto.categoria_1')
            ->where('tb_texto.excluido',0)
            ->where('ativo',1)
            ->where('categoria_1', $terapia->categoria_1)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->select('tb_texto.*', 'tb_subcategoria_lacs.nome_subcategoria','tb_subcategoria_lacs.cor')
            ->get();

        }

        return view('pages.terapias')
        ->with([
            'footer' => $this->footer,
            'terapia' => $terapia,
            'posts' => $posts
        ]);
    }

    public function exameToxicologico()
    {
        return view('pages.toxicologico');
    }

    public function sesmt()
    {
        $sesmt = Text::where('localizacao', 59)->where('excluido',0)->where('ativo',1)->take(3)->get()->toArray();
        $servicos = Text::where('localizacao', 60)->where('excluido',0)->where('ativo',1)->get();
        $posts = [];

        if(!empty($sesmt[0]['categoria_1'])){

            $posts  = Text::join('tb_subcategoria_lacs', 'tb_subcategoria_lacs.id_subcategoria', '=', 'tb_texto.categoria_1')
            ->where('tb_texto.excluido',0)
            ->where('ativo',1)
            ->where('categoria_1', $sesmt[0]['categoria_1'])
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->select('tb_texto.*', 'tb_subcategoria_lacs.nome_subcategoria','tb_subcategoria_lacs.cor')
            ->get();

        }

        return view('pages.sesmt.home')
        ->with([
            'footer' => $this->footer,
            'sesmt' => $sesmt,
            'servicos' => $servicos,
            'posts' => $posts
        ]);
    }

    public function sesmtServicos($id)
    {
        $servico = Text::where('id_texto',$id)->where('excluido',0)->where('ativo',1)->firstOrFail();
        return view('pages.sesmt.servico')
        ->with([

            'servico' => $servico,
            'footer' => $this->footer,
        ]);

    }

    public function parceiros()
    {
        $parceiros = Text::
        join('tb_galeria', 'tb_galeria.localizacao', '=', 'tb_texto.galeria')
        ->where('tb_texto.localizacao', 42)
        ->where('tb_galeria.excluido',0)
        ->where('tb_texto.excluido',0)
        ->select('tb_galeria.imagem AS galeria_imagem','tb_galeria.descricao as galeria_descricao', 'tb_texto.*')
        ->get();

        return view('pages.parceiros')
        ->with(['parceiros' => $parceiros,
                'footer' => $this->footer,
        ]);

    }


}
