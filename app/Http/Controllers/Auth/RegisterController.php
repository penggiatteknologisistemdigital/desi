<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Instansi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $instansi = Instansi::all();
        return view('auth.register', compact('instansi'));
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:users,email',
            'telepon'     => 'required|string|max:20',
            'instansi_id' => 'required|uuid|exists:tbl_instansi,id',
            'password'    => 'required|string|min:6|confirmed',
            'foto_profil' => 'nullable|image|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('foto_profil')) {
            $path = $request->file('foto_profil')->store('profil', 'public');
        }

        $user = User::create([
            'name'        => $validated['name'],
            'email'       => $validated['email'],
            'telepon'     => $validated['telepon'],
            'instansi_id' => $validated['instansi_id'],
            'password'    => Hash::make($validated['password']),
            'foto_profil' => $path,
        ]);

        // Role default = Rakyat
        $user->assignRole('Rakyat');

        event(new Registered($user)); // kirim email verifikasi otomatis

        return redirect()->route('verification.notice')
            ->with('status', 'Silakan verifikasi email Anda untuk melanjutkan.');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'telepon' => ['required', 'string', 'max:20'],
            'instansi_id' => ['required', 'exists:instansis,id'],
            'foto_profil' => ['nullable', 'image', 'max:2048'],
            'password' => [
                'required',
                'confirmed',
                'min:6',
                'regex:/[A-Z]/',   // Huruf besar
                'regex:/[a-z]/',   // Huruf kecil
                'regex:/[0-9]/',   // Angka
                'regex:/[@$!%*?&]/', // Simbol
            ],
        ],
        [
            'password.regex' => 'Password harus mengandung huruf besar, huruf kecil, angka, dan simbol.',
        ]);

        $fotoProfil = null;
        if ($request->hasFile('foto_profil')) {
            $fotoProfil = $request->file('foto_profil')->store('profil', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'instansi_id' => $request->instansi_id,
            'foto_profil' => basename($fotoProfil),
            'password' => Hash::make($request->password),
        ]);

        // Role default
        $user->assignRole('Rakyat');

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
