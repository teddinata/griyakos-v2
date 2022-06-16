<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionRequest;
use App\Transaction;
use Illuminate\Http\Request;
use App\Pembayaran;
use App\RoomType;
use App\Http\Requests\PembayaranRequest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // show pembayaran where transactions id  is available
        $item = Pembayaran::where('transactions_id', $request->id)->get();
        // $item = Pembayaran::where('transactions_id', '=', $request->id)->get();

        return view ('pages.pembayaran.index', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('pages.pembayaran.create', [
            'id' => $id

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
	   $this->validate($request, [
            'transactions_id' => 'integer|exists:transactions,id',
            'foto' => 'required',
            'bank' => 'required',
            'nama' => 'required',
            'rekening' => 'required',
            'tanggal_transfer' => 'required',
            'total' => 'required'
       ]);
            $foto = $request->foto;
            $foto = $foto->getClientOriginalName();

        $pembayaran = Pembayaran::create([
            'transactions_id' => $request->id,
            'foto' => $foto,
            'bank' => $request->bank,
            'nama' => $request->nama,
            'rekening' => $request->rekening,
            'tanggal_transfer' => $request->tanggal_transfer,
            'total' => $request->total
        ]);
        if ($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $foto = $request->file('foto')->getClientOriginalName();
        }
        Alert::success('Terima Kasih!', 'Anda sudah melakukan konfirmasi pembayaran. Saat ini transaksi anda
        sedang dalam proses validasi. Validasi membutuhkan waktu 10 menit.');
        return redirect()->route('history-order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
