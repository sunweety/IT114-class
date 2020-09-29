<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\House;
use App\Models\Landlord;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function handleAdmin()
    {
        return view('handleAdmin');
    }

    public function handleTenant()
    {
        $tenant = User::where('type', 3)->value('card_id');
        $houses = House::where('card_id', $tenant)->get();
        return view('handleTenant', compact('houses'));
    }

    public function handleLandlord()
    {
        $landlord = User::where('type', 2)->value('card_id');
        $houses = House::where('card_id', $landlord)->get();
        //dd($houses);
        return view('handleLandlord', compact('houses'));
    }
}
