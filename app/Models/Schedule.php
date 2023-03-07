<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['school_id', 'slug','time_in','time_out'];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function employees()
    {
        return $this->belongsToMany('App\Models\User', 'schedule_users', 'schedule_id', 'user_id');
    }
}
