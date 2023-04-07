<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    //register
    public function registerView()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $validateUser = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|max:255',
            'password_confirmation' => 'required',
            'alamat' => 'required',
            'nomor_telp' => 'required',
        ]);
        $validateUser['password'] = bcrypt($validateUser['password']);
        // if ($validateUser['username'] == $validateUser['in:kry']) {
        //     User::create($validateUser)->assignRole('karyawan');
        // }
        // $karyawan = $request->validate([
        //     'username' => 'required|in:kry',
        // ]);
        // if ($karyawan == true) {
        //     // DB::table('users')->insert([
        //     //     'auth' => 'karyawan'
        //     // ]);
        //     User::create($validateUser['auth'] === 'karyawan')->assignRole('karyawan');
        // }
        User::create($validateUser)->assignRole('pelanggan');

        return redirect('/login')->with('success', 'Berhasil Terdaftar');
    }
}
