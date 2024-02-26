<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id, $name)
    {
        $user = [
            '2241720232' => $id,
            'Eddo Dava' => $name,
        ];

        // Tampilkan view profil pengguna dengan membawa data pengguna
        return view('user.show', $user);
    }
}
