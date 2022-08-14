<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'Sucursal';

    public function Producto(){
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
