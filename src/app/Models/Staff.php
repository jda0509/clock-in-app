<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use HasFactory;

    protected $table = 'staff';

    protected $fillable = [
        'name',
        'email',
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
