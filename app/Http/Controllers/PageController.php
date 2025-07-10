<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index()
    {

        return view('pages.index');

    }
    public function show(int $page_id){
        return view('pages.show', compact('page_id'));

    }
}
// ->name(user.sample)
