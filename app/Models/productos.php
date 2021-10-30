<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
 protected $producto ="productos";
 protected $filliable =["NombreProducto","PrecioProducto","DescripcionProducto"];
}
