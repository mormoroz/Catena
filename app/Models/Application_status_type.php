<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application_status_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_status_name'
    ];

    public function applications()
    {
        return $this->hasMany(Application::class, 'application_id', 'id');
    }
}
