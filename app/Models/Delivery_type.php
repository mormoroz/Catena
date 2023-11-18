<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name',
    ];

    public function subSupplyChains()
    {
        return $this->hasMany(Sub_supply_chain::class, 'sub_supply_chain_id', 'id');
    }
}
