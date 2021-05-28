<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 * 
 * @property int $id
 * @property string $nombre_servicio
 * @property string $descripcion_servicio
 * @property float $precio_servicio
 * @property string|null $usuario
 * @property Carbon|null $fecha_commit
 * @property Carbon|null $hora_commit
 * @property int|null $estatus
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Instalacion[] $instalacions
 * @property Collection|Pago[] $pagos
 * @property Collection|Recibo[] $recibos
 *
 * @package App\Models
 */
class Servicio extends Model
{
	protected $table = 'servicios';

	protected $casts = [
		'precio_servicio' => 'float',
		'estatus' => 'int'
	];

	protected $dates = [
		'fecha_commit',
		'hora_commit'
	];

	protected $fillable = [
		'nombre_servicio',
		'descripcion_servicio',
		'precio_servicio',
		'usuario',
		'fecha_commit',
		'hora_commit',
		'estatus'
	];

	public function instalacions()
	{
		return $this->hasMany(Instalacion::class, 'servicio');
	}

	public function pagos()
	{
		return $this->hasMany(Pago::class, 'servicio');
	}

	public function recibos()
	{
		return $this->hasMany(Recibo::class, 'servicio');
	}
}
