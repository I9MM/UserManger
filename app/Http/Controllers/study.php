<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class study extends Controller
{
    public function my_data(){
        return view('user');
    }
}
