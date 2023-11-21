<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class SubSupplyChainController extends Controller
{
    public function home()
    {
        $user = auth()->user();
        

       // $sub_supply_chain_status = $sub_supply_chains->subSupplyChainStatus();
            //Add custom props to array
        $sub_supply_chains_array[] = array(
                'id' => $sub_supply_chains->id,
                'start_point' => $sub_supply_chains->start_point,
                'end_point' => $sub_supply_chains->end_point,
                'sub_supply_chain_status' => $sub_supply_chain_status->sub_supply_chain_status_name
            );

        return view('home', [
            'sub_supply_chains' => $sub_supply_chains_array,
        ]);
    }
}
