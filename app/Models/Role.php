<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    protected $table='roles';
    protected $fillable = ['title'];


    public function permission()
    {
        return $this->belongsToMany(Permission::class , 'permission_role');
    }

}
