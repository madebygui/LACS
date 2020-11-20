<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubcategoriaLacs extends Model{
  protected $table = "tb_subcategoria_lacs";
  protected $primaryKey = "id_subcategoria";

  public function posts()
  {
    return $this->hasMany('App\Text', 'categoria_1');
  }
}
