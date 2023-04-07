<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\DaftarHarga;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function order()
    {
        $daftar = DaftarHarga::all();
        return view('user.order-user', ["daftar" => $daftar]);
    }
    public function checkout(Request $request)
    {
        $jenis = DB::table('daftar_hargas')->where('harga', $request->jenis_id)->first();
        $jenisId = $jenis->id;
        //dd($jenisId);
        DB::table('pemesanans')->insert([
            "jenis_id" => $jenisId,
            "user_id" => $request->user_id,
            "satuan" => $request->satuan,
            "harga_pemesanan" => $request->harga,
            "status" => "Pending",

        ]);

        $pemesanan = DB::table('pemesanans')
            ->join('daftar_hargas', 'pemesanans.jenis_id', '=', 'daftar_hargas.id')
            ->join('users', 'pemesanans.user_id', '=', 'users.id')->get();
        $total = 0;
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        foreach ($pemesanan as $p) {
            $id = $p->user_id;
            $status_pemb = $p->status;
            if ($p->user_id == Auth::user()->id) {
                # code...
                if ($p->status == "Pending") {
                    # code...
                    $total += $p->harga_pemesanan;
                }
            }
        }

        if($status_pemb == "Pending")
        {
            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(20,100),
                    'gross_amount' => $total,
                ),
                'customer_details' => array(
                    'name' => $request->name,
                    'email' => Auth::user()->email,
                    'phone' => $request->nomor_telp,
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);

        }
        return view('user.dashboard', ["pemesanan" => $pemesanan,"snapToken"=>$snapToken]);
    }
   public function callback(Request $request)
   {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512',$request->signature_key.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $order = Pemesanan::find($request->order_id);
                $order->update(['status'=>"Sudah"]);
            }
        }
   }
   public function profile($id)
    {
        $profile = User::with('profile')->where('id', $id)->first();
        $profileku = Profile::count();
        //dd($profile->profile);
        return view("user.profile", ["profile" => $profile,"profileku"=>$profileku]);
    }
    public function profile_image(Request $request)
    {
        $validateProfile = $request->validate([
            'user_id' => 'required',
            'foto' => 'image|file',
        ]);
        if ($request->file('foto')) {
            $validateProfile['foto'] = $request->file('foto')->store('profile-images');
            //dd($request->file('foto'));
        }
        Profile::create($validateProfile);
        return redirect()->route('user_profile', ["id" => $request->id]);
    }
    public function edit_profile_foto(Request $request, Profile $profile)
    {
        if ($request->file('oldFoto') == null) {
            $file = $request->oldFoto;
        } else {
            $file = $request->file('oldFoto')->store('profile-images');
        }
        if ($request->file('foto')) {
            $file = $request->file('foto')->store('profile-images');
        }
        $validateProfile = [
            'foto' => $file,
        ];
        DB::table('profiles')->where('user_id', $request->id)->update($validateProfile);
        if ($request->file('foto')) {
            if ($request->oldFoto) {
                Storage::delete($request->oldFoto);
            }
            //$file = $request->file('foto')->store('profile-images');
        }
        //dd($request->file('foto'));
        return redirect()->route('user_profile', ["id" => $request->id]);
    }
    // public function edit_profile(Request $request)
    // {
    //     User::where('id',$request->id_profile)->update($validateUser);
    //     return redirect()->route('user_profile', ["id" => $request->id_profile]);
    // }

}
