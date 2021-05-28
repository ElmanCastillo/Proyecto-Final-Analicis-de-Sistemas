<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $telefono
 * @property string $nit
 * @property string $dpi
 * @property string $nacimiento
 * @property string|null $usuario
 * @property Carbon|null $fecha_commit
 * @property Carbon|null $hora_commit
 * @property int|null $estatus
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Direccion[] $direccions
 * @property Collection|Instalacion[] $instalacions
 * @property Collection|Pago[] $pagos
 * @property Collection|Recibo[] $recibos
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';

	protected $casts = [
		'estatus' => 'int'
	];

	protected $dates = [
		'fecha_commit',
		'hora_commit'
	];

	protected $fillable = [
		'nombres',
		'apellidos',
		'telefono',
		'nit',
		'dpi',
		'nacimiento',
		'usuario',
		'fecha_commit',
		'hora_commit',
		'estatus'
	];

	public function direccions()
	{
		return $this->hasMany(Direccion::class, 'cliente');
	}

	public function instalacions()
	{
		return $this->hasMany(Instalacion::class, 'cliente');
	}

	public function pagos()
	{
		return $this->hasMany(Pago::class, 'cliente');
	}

	public function recibos()
	{
		return $this->hasMany(Recibo::class, 'cliente');
	}
}
