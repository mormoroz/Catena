<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    use HasFactory;


    protected $fillable = [
        'INN',
        'name',
        'address',
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

    public function sub_supply_chains()
    {
        return $this->hasMany(Sub_supply_chain::class, 'sub_supply_chain_id', 'id');
    }
}
