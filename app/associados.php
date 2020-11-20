<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class associados extends Model
{
	protected $table = 'tb_associados';

	protected $fillable = ["nome","sobrenome","email","datanasc","cpf","rg","telefone","ramal","celular","contrato","status_cartao","datatrans","datavenc","plano_cartao","forma_pgto","valor","parcelas","cep","cidade","uf","bairro","rua","numero","complemento","status","id_pagseguro"];

	protected $primaryKey = 'id_associados';

	protected $dates = ['datanasc','datatrans','datavenc'];

	protected $dateFormat = 'Y-m-d';

	public function getDates()
	{
		return ['datanasc','datatrans','datavenc'];
	}
}
