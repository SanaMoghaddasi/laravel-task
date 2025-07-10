<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Email;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = Admin::find(2);
        dd($data->emails);

        $data = Email::find(1);
        dd($data->admins);
    }
}
