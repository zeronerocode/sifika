<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AsesiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('asesi.dashboard');
    }

    public function profile()
    {
        $profile = User::findOrFail(auth()->user()->id);
        return view('asesi.profile', compact('profile'));
    }

    public function editProfile()
    {
        $profile = User::findOrFail(auth()->user()->id);
        return view('asesi.editprofile',compact('profile'));
    }

    public function updateProfile(Request $request)
    {
        $profile = User::findOrFail(auth()->user()->id);
        $profile -> update([
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'hp' => $request->hp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat'=>$request->alamat,
            'jurusan' => $request->jurusan,
            'skema'=>$request->skema
        ]);

        return redirect()->route('asesi.profile');
    }
}
