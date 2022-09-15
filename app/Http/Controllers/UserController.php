<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pajak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'role' => "user",
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('home')->with('success', 'Registration success. Please login!');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Logged-in');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function dashboard()
    {
        if (Auth::check() && Auth::user()->role === "admin") {
            $jenis_pajak = Pajak::count();
            $pbb = Pajak::where('jenis_pajak', 'pbb')->count();
            $hotel = Pajak::where('jenis_pajak', 'hotel')->count();
            $bpthb = Pajak::where('jenis_pajak', 'bpthb')->count();
            $parkir = Pajak::where('jenis_pajak', 'parkir')->count();
            $hiburan = Pajak::where('jenis_pajak', 'hiburan')->count();
            $penerangan = Pajak::where('jenis_pajak', 'penerangan')->count();
            $restoran = Pajak::where('jenis_pajak', 'restoran')->count();

            return view('dashboard.index', [
                'jenis_pajak' => $jenis_pajak,
                'pbb' => $pbb,
                'hotel' => $hotel,
                'bpthb' => $bpthb,
                'parkir' => $parkir,
                'hiburan' => $hiburan,
                'penerangan' => $penerangan,
                'restoran' => $restoran,
            ]);
        }

        if (Auth::check() && Auth::user()->role === "user") {
            $user_id = Auth::user()->id;
            $jenis_pajak = Pajak::where('user_id', $user_id)->count();
            $pbb = Pajak::where('user_id', $user_id)->where('jenis_pajak', 'pbb')->count();
            $hotel = Pajak::where('user_id', $user_id)->where('jenis_pajak', 'hotel')->count();
            $bpthb = Pajak::where('user_id', $user_id)->where('jenis_pajak', 'bpthb')->count();
            $parkir = Pajak::where('user_id', $user_id)->where('jenis_pajak', 'parkir')->count();
            $hiburan = Pajak::where('user_id', $user_id)->where('jenis_pajak', 'hiburan')->count();
            $penerangan = Pajak::where('user_id', $user_id)->where('jenis_pajak', 'penerangan')->count();
            $restoran = Pajak::where('user_id', $user_id)->where('jenis_pajak', 'restoran')->count();

            return view('dashboard.index', [
                'jenis_pajak' => $jenis_pajak,
                'pbb' => $pbb,
                'hotel' => $hotel,
                'bpthb' => $bpthb,
                'parkir' => $parkir,
                'hiburan' => $hiburan,
                'penerangan' => $penerangan,
                'restoran' => $restoran,
            ]);
        }
        return redirect("login")->withSuccess('Access is not permitted');
    }

    public function profile(Request $request, $user_id)
    {
        if (Auth::check()) {
            $user = User::find($user_id);
            return view('dashboard.profile', ['user' => $user]);
        }

        return redirect("/")->withSuccess('Access is not permitted');
    }

    public function profile_update(Request $request, $user_id)
    {
        $user = User::find($user_id);
        if ($user) {
            if ($request->input('name')) {
                $user->name = $request->input('name');
            }

            if ($request->input('username')) {
                $user->username = $request->input('username');
            }
            
            $user->save();
            return redirect('dashboard')->with('success', 'Profil berhasil diperbaharui!');
        }

        return back()->with('fail', 'Profil gagal diperbaharui!');
    }

    public function riwayat_pajak($user_id)
    {
        if (Auth::check()) {
            $pajaks = Pajak::where('user_id', '=', $user_id)->get();
            return view('dashboard.history_pajak', ['pajaks' => $pajaks]);
        }
    }

    public function pembayaran()
    {
        if (Auth::check()) {
            return view('dashboard.pembayaran');
        }
    }

    public function pembayaran_add(Request $request, $user_id)
    {
        $request->validate([
            'perusahaan' => 'required',
            'penanggung_jawab' => 'required',
            'jenis_pajak' => 'required',
            'pembayaran' => 'required',
            'bukti_pembayaran' => 'required|image|mimes:jpg,png,jpeg',
        ]);
        
        
        $tambahan = $request->pembayaran * (5 / 100);
        $total_pembayaran = $request->pembayaran + $tambahan;
        
        $path = $request->bukti_pembayaran->store('proof');

        $pajak = Pajak::create([
            'perusahaan' => $request->perusahaan,
            'user_id' => $user_id,
            'penanggung_jawab' => $request->penanggung_jawab,
            'jenis_pajak' => $request->jenis_pajak,
            'pembayaran' => $request->pembayaran,
            'bukti_pembayaran' => $path,
            'total_pembayaran' => $total_pembayaran,
        ]);

        return redirect('dashboard')->with('success', 'Pembayaran telah terkirim, selanjutnya menunggu verifikasi dari admin!');
    }

    public function detail_pembayaran($pajak_id)
    {
        if(Auth::check())
        {
            $pajak = Pajak::find($pajak_id);
            return view('dashboard.detail_pembayaran', ['pajak' => $pajak]);
        }
    }

    public function manajemen_pembayaran()
    {
        if(Auth::check() && Auth::user()->role === "admin")
        {
            $pajaks = Pajak::paginate(10);
            return view('dashboard.manajemen_pembayaran', ['pajaks' => $pajaks]);
        }
    }

    public function approved($pajak_id)
    {
        $pajak = Pajak::find($pajak_id);
        $pajak->status = "approved";
        $pajak->update();

        return redirect('/dashboard')->with('success', 'Status pembayaran berhasil diubah!');
    }

    public function rejected($pajak_id)
    {
        $pajak = Pajak::find($pajak_id);
        $pajak->status = "rejected";
        $pajak->update();

        return redirect('/dashboard')->with('success', 'Status pembayaran berhasil diubah!');
    }
// delete data
    public function delete($pajak_id)
    {
        $pajak = Pajak::find($pajak_id);
        $pajak->delete();

        return redirect('/dashboard')->with('success', 'Data berhasil dihapus!');
    }
    public function proof(Request $request)
    {
        if(Auth::check())
        {
            $image_url = $request->input('image_url');
            
            return view('dashboard.show_image', ['image_url' => $image_url]);
        }
    }
}