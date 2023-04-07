<?php

namespace App\Http\Controllers;

use App\Models\DaftarHarga;
use App\Models\Pemesanan;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
    public function tambah_jenis()
    {
        return view('admin.tambah_jenis');
    }
    public function daftar_harga()
    {
        $daftar = DaftarHarga::all();
        return view('admin.daftar_harga', ["title" => "Daftar Harga", "daftar" => $daftar]);
    }
    public function store(Request $request)
    {
        $store = $request->validate([
            "jenis" => "required",
            "harga" => "required"
        ]);
        DaftarHarga::create($store);
        return redirect("/daftar-harga");
    }
    public function user()
    {
        $user = User::all();
        return view("admin.pelanggan.index", ["users" => $user]);
    }
    public function detail($id)
    {
        $user = User::all()->where('id', $id)->first();
        return view("admin.pelanggan.detail", ["user" => $user]);
    }
    public function profile($id)
    {
        $profile = User::with('profile')->where('id', $id)->first();
        $profileku = Profile::count();
        return view("admin.profile", ["profile" => $profile,"profileku"=>$profileku]);
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
        return redirect()->route('admin_profile', ["id" => $request->id]);
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
        DB::table('profiles')->where('id', $request->id)->update($validateProfile);
        if ($request->file('foto')) {
            if ($request->oldFoto) {
                Storage::delete($request->oldFoto);
            }
        }
        //dd($request->file('foto'));
        return redirect()->route('admin_profile', ["id" => $request->id]);
    }

    public function order()
    {
        $pemesanan = DB::table('pemesanans')
            ->join('daftar_hargas', 'pemesanans.jenis_id', '=', 'daftar_hargas.id')
            ->join('users', 'pemesanans.user_id', '=', 'users.id')->get();
        return view("admin.order", ["pemesanan" => $pemesanan]);
    }
    public function pemesanan()
    {
        return view("admin.pemesanan");
    }
    public function edit_profile(Request $request)
    {
      $profile = User::find($request->id_profile);
      $profile->update([
        'username'  => $request->username,
        'email'  => $request->email
      ]);

      return $profile;
    }
}
