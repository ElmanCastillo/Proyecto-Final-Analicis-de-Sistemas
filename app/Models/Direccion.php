<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Direccion
 * 
 * @property int $id
 * @property int $cliente
 * @property int $lugar_poblado
 * @property string $nombre_lugar
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
class Direccion extends Model
{
	protected $table = 'direccions';

	protected $casts = [
		'cliente' => 'int',
		'lugar_poblado' => 'int',
		'estatus' => 'int'
	];

	protected $dates = [
		'fecha_commit',
		'hora_commit'
	];

	protected $fillable = [
		'cliente',
		'lugar_poblado',
		'nombre_lugar',
		'usuario',
		'fecha_commit',
		'hora_commit',
		'estatus'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'cliente');
	}

	public function lugar_poblado()
	{
		return $this->belongsTo(LugarPoblado::class, 'lugar_poblado');
	}
}
