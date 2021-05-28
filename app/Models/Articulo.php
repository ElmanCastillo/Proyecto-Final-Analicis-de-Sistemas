<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Articulo
 * 
 * @property int $id
 * @property string $codigo
 * @property string $descripcion
 * @property int $cantidad
 * @property float $precio
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Articulo extends Model
{
	protected $table = 'articulos';

	protected $casts = [
		'cantidad' => 'int',
		'precio' => 'float'
	];

	protected $fillable = [
		'codigo',
		'descripcion',
		'cantidad',
		'precio'
	];
}
