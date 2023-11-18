<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_country extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_name'
    ];

    public function companies()
    {
        return $this->hasMany(Company::class, 'company_id', 'id');
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'customer_id', 'id');
    }

    public function contractors()
    {
        return $this->hasMany(Contractor::class, 'contractor_id', 'id');
    }
}
