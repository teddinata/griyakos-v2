<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProfilController extends Controller
{
    public function index ()
    {

      $user = auth()->user();



    return view ('pages.profil ',[
        // 'item' => $item,
        'user' => $user

    ]);

}
}

