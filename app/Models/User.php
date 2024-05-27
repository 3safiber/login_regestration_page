<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $fillable = ['username', 'email', 'password'];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, relatedPivotKey: 'subject_id');
    }
}
