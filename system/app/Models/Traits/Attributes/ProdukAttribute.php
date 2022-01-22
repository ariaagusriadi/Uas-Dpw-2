<?php 

namespace App\models\Traits\Attributes;

use Illuminate\Support\Str;

trait ProdukAttribute {

  function getHargaStringAttribute()
  {
    return "Rp." . number_format($this->attributes['harga']);
  }

  public function handleUploadFoto()
  {
    $this->handleDeleteFoto();
    if(request()->hasFile('foto')){
      $foto = request()->file('foto');
      $destination = "images/produk";
      $randomStr = Str::random(5);

      $filename = $this->uuid . "-" . time() . "-" . $randomStr . "." . $foto->extension();
      $url = $foto->storeAs($destination, $filename);
      $this->foto = "app/". $url;
      $this->save();
    }
  }

  public function handleDeleteFoto()
  {
    $foto = $this->foto;
    if($foto){
      $path = public_path($foto);
      if(file_exists($path)){
        unlink($path);
      }
      return true;
    }
  }
}