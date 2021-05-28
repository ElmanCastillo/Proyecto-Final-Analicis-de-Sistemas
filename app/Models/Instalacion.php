<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Instalacion
 * 
 * @property int $id
 * @property int $cliente
 * @property int $servicio
 * @property string $dia
 * @property string $mes
 * @property string $anio
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
class Instalacion extends Model
{
	protected $table = 'instalacions';

	protected $casts = [
		'cliente' => 'int',
		'servicio' => 'int',
		'estatus' => 'int'
	];

	protected $dates = [
		'fecha_commit',
		'hora_commit'
	];

	protected $fillable = [
		'cliente',
		'servicio',
		'dia',
		'mes',
		'anio',
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
