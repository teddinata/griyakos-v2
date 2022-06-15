<?php

namespace App\Http\Controllers;

use App\RoomPackage;
use App\TravelPackage;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $items = RoomPackage::with(['galleries'])->get();
        $details = TravelPackage::with(['travel_galleries'])->get();

        return view('pages.home',[
            'user' => $user,
            'items' => $items,
            'details' => $details,

        ]);



    }
}
