<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Samplecontroller extends Controller
{

    public function index()
    {
        $products = [
            0 => ['name' => 'mobile',
                'cost' => 123,
                'created' => '1400/12/16',
                'off' => 'yes',
                'statues' => 'active'],
            1 => ['name' => 'camera',
                'cost' => 150,
                'created' => '1407/12/7',
                'off' => 'yes',
                'statues' => 'not active'],
            2 => ['name' => 'car',
                'cost' => 123,
                'created' => '1404/12/3',
                'statues' => 'not active']
        ];
        $published_at = '1404/10/12';
        return view('sample.index', compact('products', 'published_at'));
//        dd('salam');
    }

    public function show(int $sampleId)
    {
        dd('sample id :' . $sampleId);
    }
}
// ->name(user.sample)
