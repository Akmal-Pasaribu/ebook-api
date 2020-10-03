<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return[ 'nis' => '3103118007',
                'name' => 'Akmal Fikri MP',
                'gender' => 'Laki - laki',
                'phone' => '+62 896-1451-5616',
                'class' => 'XII RPL 1'];
    }
}
