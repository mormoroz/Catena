<?php

namespace App\Models;

use App\Domain\Employee\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_status_type_id',
        'user_id',
        'company_id',
        'customer_id',
        'cargo_id',
        'start_point',
        'end_point'
    ];

    public function application_status_type()
    {
        return $this->belongsTo(Application_status_type::class, 'application_status_type_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function supply_chains()
    {
        return $this->belongsTo(Supply_chain::class, 'supply_chain_id', 'id');
    }


}
