<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = auth()->user();

        if ($user->role_user == '1') {
            return redirect()->route('dashboard');
        }

        // Menampilkan halaman profile
        return view("profile", compact(["user"]));
    }

    public function storeProfile(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'namaLengkap' => 'required',
            'alamatKTP' => 'required',
            'alamatSkrg' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'noTel' => 'required',
            'noHp' => 'required',
            'email' => 'required',
            'kewarganegaraan' => 'required',
            'asalWNA' => 'required',
            'tgl_lahir' => 'required',
            'tmpt_lahir' => 'required',
            'jk' => 'required',
            'statusMenikah' => 'required',
            'agama' => 'required',
            'imgProfile'=> 'required',
        ]);

        Profile::create($data);
        // dd($request->all());
        return redirect()->back()->with("success", "Berhasil mengubah data diri");
    }

    public function updateProfile($id, Request $request)
    {
        $data = Profile::find($id);
        $data->update($request->all());
        // dd($request->all());
        return redirect()->back();

    }
}

