<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailCreate extends Model
{
 protected $table="emailcreat";
    protected  $fillable=[

        'title',
        'subject'
    ];
}
