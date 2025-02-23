<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($id,$nama){
        return 'Menampilkan profil pengguna dengan id ' . $id . 'dan bernama ' . $nama;
    }
}
