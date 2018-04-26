<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    # Jika nama table bukan ejaan plural,maka maklumkan nama table
    # yang perlu model ini berhubung
    # protected $table = 'roles';

    protected $fillable = [
        'name'
    ];
}
