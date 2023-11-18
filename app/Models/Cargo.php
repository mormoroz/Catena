<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo_type_id',
        'weight',
        'width',
        'height',
        'length',
    ];

    public function cargo_type()
    {
        return $this->belongsTo(Cargo_type::class, 'cargo_type_id', 'id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'application_id', 'id');
    }
}
