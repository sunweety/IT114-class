<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\House;
use App\Models\Landlord;
use App\Models\Record;

class HouseController extends Controller
{
    public function landlordhouse()
    {
        $landlord = User::where('type', 2)->value('card_id');
        $houses = House::where('card_id', $landlord)->get();

        $admin = House::value('employee_id');
        $admins = User::where('card_id', $admin)->get();
        
        //use house_id to check which house it is.
        //$houseid=House::value('house_id');
        //dd($houseid);
        //$tenants=Record::where('house_id', $houseid)->get();
        
        //dd($tenants);
        //$tenants = House::with('records')->get();
        //$tenant= Record::where('houses')->get();
        $results = House::with('records')->get();

        //$tenants->tenant_id()->field;
        
        /*$tenants = Record::with(['houses' => function ($query) {
        $query->where('house_id');
        }])->get();*/

        /*$tenants = Record::where(['house_id' => function($q){
        $q->select('house_id');
        }])->get();*/
        

        
        //$tenantss = Record::where('house_id', $houseid)->value('tenant_id');
      
        //$admins = House::where('employee_id', $admin)->get();
        //dd($tenants);
        return view('landlordhouse', compact('houses','admins','results'));
    }//
}
