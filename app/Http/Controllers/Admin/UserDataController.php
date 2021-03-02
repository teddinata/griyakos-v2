<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserDataRequest;
use App\UserData;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class UserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = UserData::all();

        return view('pages.admin.userdata.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.userdata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserDataRequest $request)
    {
        $data = $request->all();
        
        UserData::create($data);
        Alert::success('Selamat!', 'Data Pengguna Sukses ditambahkan');
        return redirect()->route('userdata.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = UserData::findOrFail($id);

        return view ('pages.admin.userdata.detail', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = UserData::findOrFail($id);
        
        return view ('pages.admin.userdata.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        
       $item = UserData::findOrFail($id);

       $item->update($data);
       Alert::success('Selamat!', 'Data Pengguna Sukses diupdate');
       return redirect()->route('userdata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = UserData::findOrFail($id);
        $item->delete();
        Alert::success('Selamat!', 'Data Pengguna Sukses dihapus');
        return redirect()->route('userdata.index');
    }

    public function cetak_pdf()
    {

        $items = UserData::all();

        $pdf = PDF::loadview('pages.admin.userdata.data_pengguna_pdf',['items' => $items]);
    	return $pdf->download('laporan-pengguna.pdf');
    }

    public function nota($id)
    {

        $item = UserData::findOrFail($id);

        $pdf = PDF::loadview('pages.admin.userdata.nota',['item' => $item]);
    	return $pdf->stream();
    }

    
}
