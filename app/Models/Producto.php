<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	use HasFactory;
	protected $table = 'productos';
	protected $primaryKey = 'PRODUCTO_ID';
	public $timestamps = false;
	//Cambiar por atributos de la tabla
	protected $fillable = [
        'PRODUCTO_ID',
        'PROVEEDOR_ID',
        'CLIENTE_ID',
        'VENDEDOR_ID',
        'NOMBREPRODUCTO',
        'PRECIOCOMPRA',
		'PRECIOVENTA',		
		'STOCKMINIMO',
		'FICHATECNICA'
    ];
	
	//protected $filliable =["NombreProducto","PrecioProducto","DescripcionProducto"];
}

