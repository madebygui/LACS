<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Texto;
use App\Galeria;
use App\Categoria;
use App\Localizacao;
use App\Video;

class OutrosController extends Controller
{

	public function especialidades(){

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();

		return view('pages.todasespecialidades',[
			'telefone' => $telefone,
			'redessociais' => $redessociais
		]);
	}

	public function paginasEspecialidadesEExames($id_pagina,$pagina){

		$enabled = '';
		$disable = 'title';

		$categorias = Categoria::join('tb_texto','tb_categoria_1.id_categoria_1','tb_texto.categoria_1')
		->where('tb_texto.localizacao',$id_pagina)
		->groupBy('id_categoria_1')
		->get();

		$conteudo = Texto::where('localizacao',$id_pagina)
		->where('categoria_1','1')
		->where('ativo',1)
		->where('excluido',0)
		->get();

		$localizacao_texto = Localizacao::where('excluido',0)
		->where('id_localizacao_texto',$id_pagina)
		->get();

		$titulo_pagina = $localizacao_texto[0]->nome;

		$index = 0;

		foreach($categorias as $item){

			if($index == 0){
				$item->class = $disable;
			}
			else{
				$item->class = $enabled;
			}

			$item->url = str_slug($item->nome,'_');
			
			$index++;
		}

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();

		return view('pages.especialidades',[

			'id_pagina' => $id_pagina,
			'pagina' => $pagina,
			'categorias' => $categorias,
			'titulo_pagina' => $titulo_pagina,
			'conteudo' => $conteudo,
			'telefone' => $telefone,
			'redessociais' => $redessociais

		]);

	}

	public function paginasDetalhes($id_pagina,$pagina,$id_categoria,$nome_categoria){
		$enabled = '';
		$disable = 'title';
		$view = "";

		$categorias = Categoria::join('tb_texto','tb_categoria_1.id_categoria_1','tb_texto.categoria_1')
		->where('tb_texto.localizacao',$id_pagina)
		->groupBy('id_categoria_1')
		->get();

		$conteudo = Texto::where('localizacao',$id_pagina)
		->where('categoria_1',$id_categoria)
		->where('ativo',1)
		->where('excluido',0)
		->get();

		$localizacao_texto = Localizacao::where('excluido',0)
		->where('id_localizacao_texto',$id_pagina)
		->get();

		$titulo_pagina = $localizacao_texto[0]->nome;

		if($id_categoria == 7){
			$view = "noticias";
		}
		else{
			$view = "especialidades";
		}

		$index = 0;

		foreach($categorias as $item){

			if($item->id_categoria_1 == $id_categoria){
				$item->class = $disable;
			}
			else{
				$item->class = $enabled;
			}

			$item->url = str_slug($item->nome,'_');
			
			$index++;
		}

		foreach($conteudo as $item){

			$item->url = str_slug($item->titulo,'_');
		}

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();

		return view('pages.'.$view,[

			'id_pagina' => $id_pagina,
			'pagina' => $pagina,
			'categorias' => $categorias,
			'titulo_pagina' => $titulo_pagina,
			'conteudo' => $conteudo,
			'id_categoria' => $id_categoria,
			'nome_categoria' => $nome_categoria,
			'telefone' => $telefone,
			'redessociais' => $redessociais


		]);

	}

	public function postDetalhes($id_pagina,$pagina,$id_categoria,$nome_categoria,$id_post,$nome_post){
		$enabled = '';
		$disable = 'title';

		$categorias = Categoria::join('tb_texto','tb_categoria_1.id_categoria_1','tb_texto.categoria_1')
		->where('tb_texto.localizacao',$id_pagina)
		->groupBy('id_categoria_1')
		->get();

		$conteudo = Texto::where('id_texto',$id_post)
		->where('ativo',1)
		->where('excluido',0)
		->get();

		$localizacao_texto = Localizacao::where('excluido',0)
		->where('id_localizacao_texto',$id_pagina)
		->get();

		$titulo_pagina = $localizacao_texto[0]->nome;

		$index = 0;

		foreach($categorias as $item){

			if($item->id_categoria_1 == $id_categoria){
				$item->class = $disable;
			}
			else{
				$item->class = $enabled;
			}

			$item->url = str_slug($item->nome,'_');
			
			$index++;
		}

		foreach($conteudo as $item){

			$item->url = str_slug($item->titulo,'_');
		}

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();

		return view('pages.noticiasdetalhes',[

			'id_pagina' => $id_pagina,
			'pagina' => $pagina,
			'categorias' => $categorias,
			'titulo_pagina' => $titulo_pagina,
			'conteudo' => $conteudo,
			'telefone' => $telefone,
			'redessociais' => $redessociais


		]);

	}


	public function toxicologico(){
		$telefone = $this->telefone();

		$redessociais = $this->redessociais();

		$toxicologico = Texto::where('localizacao',62)
		->where('ativo',1)
		->where('excluido',0)
		->limit(1)
		->get();

		$local_video = 0;

		foreach($toxicologico as $item){
			$local_video = $item->video;
		}

		$toxicologico_video = Video::where('localizacao',$local_video)
		->where('ativo',1)
		->where('excluido',0)
		->limit(1)
		->get();

		return view('pages.exame_toxicologico',[

			'telefone' => $telefone,
			'redessociais' => $redessociais,
			'toxicologico' => $toxicologico,
			'toxicologico_video' => $toxicologico_video
		]);
	}

	public function sesmt(){

		$sesmt = Texto::where('localizacao',63)
		->where('excluido',0)
		->where('ativo',1)
		->limit(1)
		->get();

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();
		return view('pages.sesmt',[

			'telefone' => $telefone,
			'redessociais' => $redessociais,
			'sesmt' => $sesmt
		]);
	}

	public function sesmtnoticias(){

		$sesmt = Texto::where('localizacao',64)
		->where('excluido',0)
		->where('ativo',1)
		->get();

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();
		return view('pages.sesmtnoticias',[

			'telefone' => $telefone,
			'redessociais' => $redessociais,
			'sesmt' => $sesmt
		]);
	}

	public function sesmtnoticiasdetalhes($id){

		$sesmt = Texto::where('id_texto',$id)
		->where('excluido',0)
		->where('ativo',1)
		->limit(1)
		->get();

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();
		return view('pages.sesmtnoticiasdetalhes',[

			'telefone' => $telefone,
			'redessociais' => $redessociais,
			'sesmt' => $sesmt
		]);
	}

	public function sesmtnossosservicos(){

		$sesmt = Texto::where('localizacao',70)
		->where('excluido',0)
		->where('ativo',1)
		->get();

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();
		return view('pages.sesmtnossosservicos',[

			'telefone' => $telefone,
			'redessociais' => $redessociais,
			'sesmt' => $sesmt
		]);
	}

	public function sesmtnossosservicosdetalhes($id){

		$sesmt = Texto::where('id_texto',$id)
		->where('excluido',0)
		->where('ativo',1)
		->limit(1)
		->get();

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();
		return view('pages.sesmtnossosservicosdetalhes',[

			'telefone' => $telefone,
			'redessociais' => $redessociais,
			'sesmt' => $sesmt
		]);
	}

	public function sesmtcarta(){

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();
		return view('pages.sesmtcarta',[

			'telefone' => $telefone,
			'redessociais' => $redessociais,
			'sesmt' => []
		]);
	}

	public function sesmtcartaescolhida(Request $request){

		$sesmt = Texto::where('localizacao',65)
		->where('excluido',0)
		->where('ativo',1)
		->where('categoria_2',$request->tipo)
		->limit(1)
		->get();

		return $sesmt;
	}

	public function blog(){

		$sesmt = Texto::where('localizacao',71)
		->where('excluido',0)
		->where('ativo',1)
		->get();

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();
		return view('pages.blog',[

			'telefone' => $telefone,
			'redessociais' => $redessociais,
			'sesmt' => $sesmt
		]);
	}

	public function blogdetalhe($id){

		$sesmt = Texto::where('id_texto',$id)
		->where('excluido',0)
		->where('ativo',1)
		->limit(1)
		->get();

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();
		return view('pages.blogdetalhe',[

			'telefone' => $telefone,
			'redessociais' => $redessociais,
			'sesmt' => $sesmt
		]);
	}

	public function examesweb(){

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();
		return view('pages.examesweb',[

			'telefone' => $telefone,
			'redessociais' => $redessociais
		]);
	}

	public function cartaolacs($id_termo,$id,$nome){
		$cartao = Texto::where('localizacao',$id)
		->where('ativo',1)
		->where('excluido',0)
		->get();

		$termos = Texto::where('localizacao',$id_termo)
		->where('ativo',1)
		->where('excluido',0)
		->get();

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();

		return view('pages.cartaolacs',[

			'cartao' => $cartao,
			'termos' => $termos,
			'telefone' => $telefone,
			'redessociais' => $redessociais

		]);
	}

	public function contratarCartao($id_termo){

		$termos = Texto::where('localizacao',$id_termo)
		->where('ativo',1)
		->where('excluido',0)
		->get();

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();

		return view('pages.contratar-cartao',[
			'termos' => $termos,
			'telefone' => $telefone,
			'redessociais' => $redessociais
		]);
	}

	public function pagamento(){

		$telefone = $this->telefone();

		$redessociais = $this->redessociais();

		return view('pages.pagamento',[
			'telefone' => $telefone,
			'redessociais' => $redessociais
		]);
	}
	

	


	
}



























