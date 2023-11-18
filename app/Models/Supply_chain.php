<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply_chain extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class, 'application_id', 'id');
    }

    public function subSupplyChains()
    {
        return $this->hasMany(Sub_supply_chain::class, 'sub_supply_chain_id', 'id');
    }
}
