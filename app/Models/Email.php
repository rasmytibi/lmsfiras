<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
 protected $table="_subscribe_";
    protected  $fillable=[

        'email',
    ];
}
