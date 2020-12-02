<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    public function user()
    {
        return $this->belongsToMany(Role::class,'user_role','role_id','user_id');
    }
}
