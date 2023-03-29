<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Mail;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
        session(['url.intended' => url()->previous()]);
        return view('login');
    }

    public function login(Request $request)
    {
        // validasi data
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        try {
            $akun = $request->only('email', 'password');
            if (Auth::attempt($akun)) {
                if(Auth::user()->email_verified_at != null){
                    if(Auth::user()->role == 'ADMIN'){
                        return redirect()->route('dashboardadmin');
                    }else if(Auth::user()->role == 'RESTO'){
                        return redirect()->route('pesanan.index');
                    }else{
                        return redirect('/home');                     
                    }
                }else{
                    Auth::logout();
                    return redirect()->route('login')->with(['error' => 'Email Belum terverifikasi, silahkan cek emaill!']);
                }
            } else {
                return redirect()->route('login')->with(['error' => 'Wrong username or password!']);
            }
        } catch (QueryException $e) {
            // return response()->json([
            //     'message' => "Failed " . $e->errorInfo
            // ]);
            return redirect()->route('login')->with(['error' => $e->errorInfo]);
        }
    }

    public function register(Request $request)
    {
        // Validasi
        $request->validate([
            'name' =>  'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user_id = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // Proses verifikasi email, dan jangan langsung di loginkan
        $this->emailverification($request->email);

        return redirect()->route('activation');
    }

    public function activation()
    {
        $data = "Email Aktivasi telah dikirimkan, silahkan cek email";
        return view('activation',compact('data'));
    }

    /**
     * Method yang akan dipanggil ketika user menekan link verifikasi
     * @param $user_token
     */
    public function verify($user_token) {

        // cari kedalam database
        $user = User::where('remember_token', $user_token) -> first();

        // Jika user tidak ditemukan
        if(!$user) {
            return redirect()->route('login')->with('error','Token verifikasi tidak valid');
        }

        $user->email_verified_at = now();
        $user->remember_token = null;
        $user->update();

        return redirect()->route('login')
                        ->with('success','Verifikasi berhasil silahkan login');
    }

    /**
     * Untuk mengirimkan email verifikasi
     * Prosesnya nanti ditulis disini
     */
    protected function emailverification($email)
    {
        $user = User::where('email', $email) -> first();

        $token = Str::uuid();
        $user->remember_token = $token;
        $user->update();

        $verify_url = route("verifyLink", $token);
        $userEmail = $user->email;

        // Lalu kita kirim link verifikasinya melalui email
        Mail::html("Hello $user->name , please click $verify_url to verify your account. Thanks", function ($message) use ($userEmail) {
            $message
                ->to($userEmail)
                ->subject("Account activation!");
        });
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function forgot()
    {
        return view('forgot');
    }

    public function reset_action(Request $request)
    {
        // validasi data
        $request->validate([
            'email' => 'required',
        ]);

        $data = User::where('email',$request->email)->first();

        if($data != null){
            $this->emailverificationReset($data->email);
            return redirect()->route('confirm_email');
        }else{
            return redirect()->route('forgot')->with('error','Email Tidak ditemukan');
        }
    }

    public function confirm_email()
    {
        $data = "Email Konfirmasi telah terkirim";
        return view('activation',compact('data'));
    }

    protected function emailverificationReset($email)
    {
        $user = User::where('email', $email) -> first();

        $token = Str::uuid();
        $user->remember_token = $token;
        $user->update();

        $verify_url = route("verifyLinkReset", $token);
        $userEmail = $user->email;

        // Lalu kita kirim link verifikasinya melalui email
        Mail::html("Hello $user->name , please click $verify_url to verify your account. Thanks", function ($message) use ($userEmail) {
            $message
                ->to($userEmail)
                ->subject("Account activation!");
        });
    }

    public function verifyReset($user_token) {
        return view('reset',compact('user_token'));
    }

    public function reset_password(Request $request)
    {
        // validasi data
        $request->validate([
            'password' => 'required|confirmed',
        ]);
        // cari kedalam database
        $user = User::where('remember_token', $request->secret) -> first();

        // Jika user tidak ditemukan
        if(!$user) {
            return redirect()->route('login')->with('error','Token verifikasi tidak valid');
        }

        $user->email_verified_at = now();
        $user->remember_token = null;
        $user->password = Hash::make($request->password);
        $user->update();

        return redirect()->route('login')
                        ->with('success','Verifikasi berhasil silahkan login');
    }
}
