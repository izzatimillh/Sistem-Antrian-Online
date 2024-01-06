<?php

namespace App\Http\Controllers\backsite;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // dd($user->foto_profil);

        return view('pages.backsite.setting.index', [
            "user" => $user
        ]);
    }

    public function updateProfile(Request $request, $id)
    {

        $pegawai = User::find($id);
;
        $validatedData = $request->validate(
            [
                "nama_lengkap" => "required|max:255",
                "foto_profil" => "image|file|max:1024",
                // 'oldPassword' => 'required|min:6|max:255',
                // 'newPassword' => 'required|min:6|max:255',
            ]
        );

        if ($request->username != auth()->user()->username) {
            $rules['username'] = 'required|unique:users|max:255';
        }


        if ($request->file('foto_profil')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['foto_profil'] = $request->file('foto_profil')->store('user-images');
        }

        if($request->filled('newPassword')){
            if (Hash::check($request->input('oldPassword'), $pegawai->password)) {
                // Jika password lama sesuai, maka lakukan update password baru
                $pegawai->password = Hash::make($request->input('newPassword'));
            } else {
                // Jika password lama tidak sesuai, tampilkan pesan error
    
                return back()->with('loginError', 'Incorrect current password.');
            }
        }
       


        $pegawai->update($validatedData);

        return redirect('/settings')->with('success', 'Profil has been updated!');
    }
}
