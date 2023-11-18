<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name'
    ];

    public function companies()
    {
        return $this->hasMany(Company::class, 'company_id', 'id');
    }

    public function contractors()
    {
        return $this->hasMany(Contractor::class, 'contractor_id', 'id');
    }
}
