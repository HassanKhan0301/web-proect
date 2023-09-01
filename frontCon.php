<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontCon extends Controller
{
    public function for()
    {
        return view('admin.index');

    }
}
