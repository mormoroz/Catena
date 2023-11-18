<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_supply_chain_status extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_supply_chain_status_name',
    ];

    public function supplyChain()
    {
        return $this->belongsTo(Supply_chain::class, 'supply_chain_id', 'id');
    }
}
