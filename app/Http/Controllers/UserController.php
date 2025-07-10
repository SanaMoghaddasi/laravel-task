<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
//        $user = User::query()
//            ->withSum('orders', 'total_amount')->get();
//
//        $user1 = User::query()
//            ->has('role')  //نساختم ریلیشن زو هنوز
//        ->get();
//
//        $user2 = User::query()
//            ->doesntHave('orders')
//        ->get();

    }
//    public function create(){
//        return view('user-addresses.create');
//    }
    public function store(Request $request){
        $request->validate([
            'state' => 'required|string|min:2|max:32',
            'city' => 'required|string|min:2|max:32',
            'street' => 'required|string|min:2|max:32',
            'code' => 'required|int|min:2|max:32'
        ]);
        dd($request->all());
    }

    public function create()
    {
        return view('user.create');
    }
    public function register(UserStoreRequest $request)
    {
        dd($request->all());
        $user = User::create($request->validated());
        dd('ثبت نام موفق');
    }
}
