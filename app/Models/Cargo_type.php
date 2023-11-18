<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name',
    ];

    public function cargos()
    {
        return $this->hasMany(Cargo::class, 'cargo_id', 'id');
    }
}
