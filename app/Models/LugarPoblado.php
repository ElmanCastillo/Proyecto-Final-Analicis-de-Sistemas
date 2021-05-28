<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LugarPoblado
 * 
 * @property int $id
 * @property string $nombre_lugar_poblado
 * @property string|null $usuario
 * @property Carbon|null $fecha_commit
 * @property Carbon|null $hora_commit
 * @property int|null $estatus
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Direccion[] $direccions
 *
 * @package App\Models
 */
class LugarPoblado extends Model
{
	protected $table = 'lugar_poblados';

	protected $casts = [
		'estatus' => 'int'
	];

	protected $dates = [
		'fecha_commit',
		'hora_commit'
	];

	protected $fillable = [
		'nombre_lugar_poblado',
		'usuario',
		'fecha_commit',
		'hora_commit',
		'estatus'
	];

	public function direccions()
	{
		return $this->hasMany(Direccion::class, 'lugar_poblado');
	}
}
