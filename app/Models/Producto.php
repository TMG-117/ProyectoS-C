<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	use HasFactory;
	protected $table = 'productos';
	protected $primaryKey = 'producto_id';
	public $timestamps = false;
	//Cambiar por atributos de la tabla
	protected $fillable = [
        'producto_id',
        'categoria_id',
        'nombre',
        'precio_compra',
		'precio_venta',
		'codigo',
		'fecha_vencimiento',
		'cantidad',
		'stock_minimo',
		'imagen'
    ];
	
	//protected $filliable =["NombreProducto","PrecioProducto","DescripcionProducto"];
}
