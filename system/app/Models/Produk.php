<?php

namespace App\Models;

use App\models\Traits\Attributes\ProdukAttribute;
use App\models\Traits\Relations\ProdukRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Produk extends Model
{
    use ProdukAttribute,ProdukRelations;
    use HasFactory;
    protected $table = "produk";
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->uuid = (string) Str::uuid();
        });
    }
}
