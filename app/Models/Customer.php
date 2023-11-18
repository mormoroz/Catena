<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'patronymic',
        'email',
        'phone_number',
        'password',
        'company_country_id',
        'company_type_id'
    ];

    public function company_country()
    {
        return $this->belongsTo(Company_country::class, 'company_country_id', 'id');
    }

    public function company_type()
    {
        return $this->belongsTo(Company_type::class, 'company_type_id', 'id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'application_id', 'id');
    }
}
