<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Recibo
 * 
 * @property int $id
 * @property string $codigo_barra
 * @property int $servicio
 * @property int $cliente
 * @property float $descuento
 * @property float $total
 * @property string $periodo
 * @property string|null $usuario
 * @property Carbon|null $fecha_commit
 * @property Carbon|null $hora_commit
 * @property int|null $estatus
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 *
 * @package App\Models
 */
class Recibo extends Model
{
	protected $table = 'recibos';

	protected $casts = [
		'servicio' => 'int',
		'cliente' => 'int',
		'descuento' => 'float',
		'total' => 'float',
		'estatus' => 'int'
	];

	protected $dates = [
		'fecha_commit',
		'hora_commit'
	];

	protected $fillable = [
		'codigo_barra',
		'servicio',
		'cliente',
		'descuento',
		'total',
		'periodo',
		'usuario',
		'fecha_commit',
		'hora_commit',
		'estatus'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'cliente');
	}

	public function servicio()
	{
		return $this->belongsTo(Servicio::class, 'servicio');
	}
}
