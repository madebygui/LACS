<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;
use App\SubcategoriaLacs;

class BlogController extends Controller
{
    public function __construct()
    { 
      $this->footer = parent::__construct();  
    }
    
    public function home()
    {
        
        $destaques = Text::join('tb_subcategoria_lacs', 'tb_subcategoria_lacs.id_subcategoria', '=', 'tb_texto.categoria_1')
                            ->where('tb_texto.excluido',0)
                            ->where('ativo',1)
                            ->where('localizacao',61)
                            ->orderBy('data', 'desc')
                            ->limit(3)
                            ->select('tb_texto.*', 'tb_subcategoria_lacs.nome_subcategoria','tb_subcategoria_lacs.cor')
                            ->get();
        

        $categorias_posts = SubcategoriaLacs::with(['posts' => function($query){
                                    $query->where('tb_texto.excluido', 0)->where('tb_texto.ativo',1)->where('localizacao',61)->orderBy('id_texto', 'desc');
                            }])
                            ->whereHas('posts')
                            ->where('excluido',0)
                            ->get();
                            
                 
                           
        $categorias = SubcategoriaLacs::whereHas('posts')->where('excluido', 0)->get();


        return view('pages.blog.home')
        ->with([
            'destaques' => $destaques,
            'categorias_posts' => $categorias_posts,
            'categorias' => $categorias,
            'footer' => $this->footer
        ]);
    }

    public function post($id)
    {
        $post = Text::join('tb_subcategoria_lacs', 'tb_subcategoria_lacs.id_subcategoria', '=', 'tb_texto.categoria_1')
                    ->where('id_texto',$id)
                    ->where('tb_texto.excluido',0)
                    ->where('ativo',1)
                    ->select('tb_texto.*', 'tb_subcategoria_lacs.id_subcategoria','tb_subcategoria_lacs.nome_subcategoria','tb_subcategoria_lacs.cor')
                    ->firstOrFail();

        $relacionados = Text::join('tb_subcategoria_lacs', 'tb_subcategoria_lacs.id_subcategoria', '=', 'tb_texto.categoria_1')
                            ->where('tb_texto.excluido',0)
                            ->where('ativo',1)
                            ->where('localizacao',61)
                            ->where('id_texto', '!=', $post->id_texto)
                            ->where('categoria_1', $post->categoria_1)
                            ->orderBy('data', 'desc')
                            ->limit(3)
                            ->select('tb_texto.*', 'tb_subcategoria_lacs.nome_subcategoria','tb_subcategoria_lacs.cor')
                            ->get();
        
        
        $ultimos_posts = Text::join('tb_subcategoria_lacs', 'tb_subcategoria_lacs.id_subcategoria', '=', 'tb_texto.categoria_1')
                            ->where('tb_texto.excluido',0)
                            ->where('ativo',1)
                            ->where('id_texto', '!=', $post->id_texto)
                            ->where('localizacao', 61)
                            ->orderBy('data', 'desc')
                            ->limit(3)
                            ->select('tb_texto.*', 'tb_subcategoria_lacs.nome_subcategoria','tb_subcategoria_lacs.cor')
                            ->get();
        
        $categorias = SubcategoriaLacs::where('excluido', 0)->get();

        return view('pages.blog.post')
        ->with([
            'post' => $post,
            'relacionados' => $relacionados,
            'ultimos_posts' => $ultimos_posts,
            'categorias' => $categorias,
            'footer' => $this->footer
        ]);
    }

    public function category($id)
    {
      
        $categoria_posts = SubcategoriaLacs::with(['posts' => function($query){
                $query->where('tb_texto.excluido', 0)->where('tb_texto.ativo',1)->where('localizacao',61)->orderBy('id_texto', 'desc');
            }])
            ->whereHas('posts')
            ->where('id_subcategoria', $id)
            ->where('excluido',0)
            ->firstOrFail();

            $categorias = SubcategoriaLacs::whereHas('posts')->where('excluido', 0)->get();

        return view('pages.blog.busca.categorias')
        ->with([
            'categoria_posts' => $categoria_posts,
            'footer' => $this->footer,
            'categorias' => $categorias
        ]);
    }

    public function searchPost(Request $request)
    {
    
        $term = $request->input('search_term');
        $posts = Text::join('tb_subcategoria_lacs', 'tb_subcategoria_lacs.id_subcategoria', '=', 'tb_texto.categoria_1')
        ->where('tb_texto.excluido',0)
        ->where('ativo',1)
        ->where(function($query) use ($term){
            $query->where('titulo', 'like', "%{$term}%" )
            ->orWhere('descricao' ,'like',"%{$term}%");
        })
        ->where('localizacao', 61)
        ->orderBy('data', 'desc')
        ->select('tb_texto.*', 'tb_subcategoria_lacs.nome_subcategoria','tb_subcategoria_lacs.cor')
        ->get();
    
        $categorias = SubcategoriaLacs::whereHas('posts')->where('excluido', 0)->get();
        return view('pages.blog.busca.posts')
        ->with([
            'posts' => $posts,
            'categorias' => $categorias,
            'footer' => $this->footer
        ]);

    }
}
