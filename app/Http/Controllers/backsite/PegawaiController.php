<?php

namespace App\Http\Controllers\backsite;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');

        $pegawai = User::all();

        return view('pages.backsite.pegawai.index', [
            "list_pegawai" => $pegawai,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $division = Division::all();

        return view('pages.backsite.pegawai.create', [
            "divisions" => $division
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate(
            [
                "nama_lengkap" => "required|max:255",
                "username" => "required|unique:users|max:255",
                "password" => "required|min:6|max:255",
                "level" => "required",
                "division_id" => "required",
                "foto_profil" => "image|file|max:1024",
            ]
        );

        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($request->file('foto_profil')) {
            //simpan gambarnya 
            $validatedData['foto_profil'] = $request->file('foto_profil')->store('user-images');
        }

        User::create($validatedData);

        return redirect('/pegawai')->with('success', 'New user has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $pegawai = User::find($id);

        return view('pages.backsite.pegawai.edit', [
            "pegawai" => $pegawai,
            "divisions" => Division::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($id);

        $pegawai = User::find($id);
        if (!$pegawai) {
            return redirect()->route('/pegawai')->with('error', 'Data pegawai tidak ditemukan.');
        }

        $rules = 
            [
                "nama_lengkap" => "required|max:255",
                // 'newPassword' => 'min:6|max:255',
                "level" => "required",
                "division_id" => "required",
                "foto_profil" => "image|file|max:1024",
            ];

        if ($request->username != $pegawai->username) {
            $rules['username'] = 'required|unique:users|max:255';
        }

        if ($request->file('foto_profil')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['foto_profil'] = $request->file('foto_profil')->store('user-images');
        }

        if($request->filled('newPassword')){
            $pegawai->password = Hash::make($request->input('newPassword'));
         
        }

        $validatedData = $request->validate($rules);

        
        $pegawai->update($validatedData);

        return redirect('/pegawai')->with('success', 'Pegawai has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pegawai = User::find($id);

        if (!$pegawai) {
            return redirect()->route('/pegawai')->with('error', 'Data pegawai tidak ditemukan.');
        }

        if ($pegawai->foto_profil) {
            Storage::delete($pegawai->foto_profil);
        }

        //kode untuk menghapus data post berdasarkan id
        $pegawai->delete();

        return redirect('/pegawai')->with('success', 'User has been deleted!');
    }
}
