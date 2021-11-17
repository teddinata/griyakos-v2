<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\EditProfilRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class EditProfilController extends Controller
{
    public function index ()
    {

          $user = auth()->user();



        return view ('pages.editprofil ',[
            'user' => $user

        ]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view ('editprofil.edit', [
            'user' => $user
        ]);
    }



    public function update(EditProfilRequest $Request, $id)
    {
        $user = User::findOrFail($id);


        //dd($Request->all());
        $user->avatar = $Request->avatar;
        $user->name = $Request->name;
        $user->username = $Request->username;
        $user->email = $Request->email;
        $user->phone = $Request->phone;
        $user->birth = $Request->birth;
        $user->gender = $Request->gender;
        if ($Request->hasFile('avatar')){
            $Request->file('avatar')->move('images/',$Request->file('avatar')->getClientOriginalName());
            $user->avatar = $Request->file('avatar')->getClientOriginalName();
            $user->save();
        }




        $user->save();



        Alert::success('Update Sukses!', 'Profil Sukses di Update');

        return redirect()->route('editprofil');

    }

    }


