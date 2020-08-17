<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 *
 * @package App
 * @property string $title
*/
class Permission extends Model
{
    protected $table='permissions';
    protected $fillable = ['title'];


}
