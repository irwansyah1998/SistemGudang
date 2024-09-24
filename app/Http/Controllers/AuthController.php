<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Metode login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari pengguna berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Cek apakah pengguna ada dan password benar
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Tidak diizinkan'], 401);
        }

        // Buat token
        $token = $user->createToken('token')->plainTextToken;

        // Kembalikan token dan informasi pengguna (jika diperlukan)
        return response()->json([
            'token' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                // tambahkan data pengguna lain jika diperlukan
            ],
        ]);
    }

    // Metode logout
    public function logout(Request $request)
    {
        // Cabut token yang sedang digunakan untuk otentikasi
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logout berhasil']);
    }
}
