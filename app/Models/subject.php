<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'pass_mark', 'mark_obtained'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
