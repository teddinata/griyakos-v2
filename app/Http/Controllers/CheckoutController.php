<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Exception;

use App\RoomType;
use Carbon\Carbon;
use Midtrans\Snap;
use App\RoomPackage;
use App\Transaction;
use Midtrans\Config;

use App\TransactionDetail;
use Illuminate\Http\Request;

use App\Mail\TransactionSuccess;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\DetailTransactionRequest;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $user = auth()->user();
        $item = Transaction::with([
            'details', 'room_package', 'user', 'room_type'])->findOrFail($id);
        return view('pages.checkout', [
            'user' => $user,
            'item' => $item
        ]);
    }

    public function process(DetailTransactionRequest $request, $id)
    {
        // $room_package = RoomPackage::findOrFail($id);
        $room_type = RoomType::findOrFail($request->roomTypes);

        // $code = 'GRIYA-' . mt_rand(000,999);


        $transaction = Transaction::create([
            'room_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'transaction_total' => $room_type->price,
            'kode_unik' => mt_rand(0,999),
            'transaction_status' => 'PENDING',
            'room_types_id' => $request->roomTypes,
            // 'code' => $code
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            // 'avatar' =>  $user = auth()->user(),
            'username' => Auth::user()->username,
            'nationality' => Auth::user()->phone,
            'job' => 'Belum diisi',
            'checkin' => date('Y-m-d', strtotime($request->checkInDate)),
            // 'code' => $code
        ]);

        return redirect()->route('checkout', $transaction->id);
    }

    public function remove(Request $request, $detail_id)
    {
        $item = TransactionDetail::findOrFail($detail_id);

        $transaction = Transaction::with(['details', 'room_package'])
            ->findOrFail($item->transactions_id);

        $transaction->transaction_total -= $transaction->room_package->price;

        $transaction->save();
        $item->delete();

        return redirect()->route('checkout', $item->transactions_id);
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'checkin' => 'required'
        ]);

        $data = $request->all();
        $data['transactions_id'] = $id;

        TransactionDetail::create($data);
        $transaction = Transaction::with(['room_package'])->find($id);

        $transaction->transaction_total += $transaction->room_package->price;


        $transaction->save();

        return redirect()->route('checkout', $id);
    }



    public function success(Request $request, $id)
    {
        $transaction = Transaction::with([
            'details', 'room_package.galleries',
            'user'
        ])->findOrFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();

        //set konfigurasi midtrans
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        //Buat array untuk di kirim ke midtrans
        $midtrans_param = [
        'transaction_details' => [
          'order_id' => 'MIDTRANS-' . $transaction->id,
         'gross_amount' => (int) $transaction->transaction_total+$transaction->kode_unik
        ],
        'customer_details' => [
           'first_name' => $transaction->user->name,
           'email' => $transaction->user->email
        ],
        'enabled_payments' => [
            'gopay', 'bank_transfer', 'indomaret'],
        'vtweb' => []
        ];

         try {
             //Ambil Halman Payment di midtrans
            $paymentUrl = Snap::createTransaction($midtrans_param)->redirect_url;

        //Redirect ke halaman midtrans
           header('Location: ' . $paymentUrl);
          }
          catch (Exception $e) {
            echo $e->getMessage();
         }



        //return $transaction;

        //Kirim email ke user e-bookingnya
        // Mail::to($transaction->user)->send(
        //     new TransactionSuccess($transaction)
        // );

        // return view('pages.success');
    }
}
