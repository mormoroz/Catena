<?php

namespace App\Models;

use App\Domain\Employee\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'INN',
        'name',
        'address',
        'company_type_id',
        'company_country_id'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'application_id', 'id');
    }

}
