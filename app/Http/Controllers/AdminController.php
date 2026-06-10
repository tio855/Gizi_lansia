<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Prediksi; // sesuaikan kalau beda
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(){
        $totalUser = User::count();
        $totalPrediksi = Prediksi::count();

        return view('admin.dashboard',compact('totalUser','totalPrediksi'));
    }
    public function redirectDashboard(){

        if(auth()->user()->role == 'admin'){
            return $this->dashboard(); // dashboard admin
        }

        return view('dashboard'); // dashboard user
    }

    // ================= USER =================
    public function users(){
        $users = User::all();
        return view('admin.users',compact('users'));
    }

    public function updateUser(Request $request,$id){
        $user = User::find($id);
        $user->role = $request->role;
        $user->save();

        return back();
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return back()->with('error', 'Data pengguna tidak ditemukan');
        }

        $user->delete();

        return back()->with('success', 'Pengguna berhasil dihapus');
    }

    public function deleteRiwayat($id)
    {
        $prediksi = Prediksi::find($id);

        if (!$prediksi) {
            return back()->with('error', 'Data riwayat tidak ditemukan');
        }

        $prediksi->delete();

        return back()->with('success', 'Riwayat berhasil dihapus');
    }

    public function riwayat(){
        $data = Prediksi::latest()->get();
        return view('admin.riwayat',compact('data'));
    }
}
