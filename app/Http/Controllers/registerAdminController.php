<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterAdminRequest;

class registerAdminController extends Controller
{
    public function show()
    {
        return view('pages.register-admin');
    }

    public function registerAdmin(RegisterAdminRequest $registerAdminRequest)
    {
        return view('pages.admin');
    }
}
