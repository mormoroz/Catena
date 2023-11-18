<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_supply_chain extends Model
{
    use HasFactory;

    protected $fillable = [
        'supply_chain_id',
        'start_point',
        'end_point',
        'delivery_type_id',
        'contractor_id',
        'sequence_number',
        'expected_time_end',
        'real_time_end',
        'sub_supply_chain_status_id'
    ];

    public function supplyChain()
    {
        return $this->belongsTo(Supply_chain::class, 'supply_chain_id', 'id');
    }

    public function deliveryType()
    {
        return $this->belongsTo(Delivery_type::class, 'delivery_type_id', 'id');
    }

    public function contractor()
    {
        return $this->belongsTo(Contractor::class, 'contractor_id', 'id');
    }

    public function subSupplyChainStatus()
    {
        return $this->belongsTo(Sub_supply_chain_status::class, 'sub_supply_chain_status_id', 'id');
    }
}
