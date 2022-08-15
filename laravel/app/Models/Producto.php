<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  use HasFactory;
  protected $primaryKey = 'id';
  protected $table = 'producto';

    public function sucursal (){
      return $this ->hasMany(sucursal::class);
    }
}
