<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';

    protected $fillable = [
        'staff_id',
        'work_date',
        'clock_in',
        'clock_out',
        'total_work_minutes',
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function work_breaks()
    {
        return $this->hasMany(WorkBreak::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
