<?php 

namespace App\models\Traits\Relations;

use App\Models\Produk;

trait UserRelations{

  public function produk()
  {
    return $this->hasMany(Produk::class, 'id_user');
  }

}