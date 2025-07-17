<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidNameException;
use App\Exceptions\NotFoundException;
use App\Http\Requests\Auth\RegisterPostRequest;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{


    public function index()
    {
//        $datetime2 = Carbon::parse('2025-09-09 15:15');
//        $datetime = Carbon::now();
//        $datetime3 = $datetime->toDateString();
//        $add = $datetime2->addWeeks(2)->subDays(3);
//        $month = $datetime->month;
//        $firstWeek = $datetime2->startOfWeek();
//        $isBefore = $datetime2 ->isAfter($datetime);
//        $humanise = $datetime->diffForHumans($datetime2);
//        $subWeek  = $datetime->diffInWeeks($datetime2);
//        $formatted = $datetime->format('Y-m-d H:i');
//        dd($month);
//        dd(trimUp('sana'));
//        try {
//            $this->test(11);
//        } catch (NotFoundException) {
//            abort(404);
//        } catch (InvalidNameException $exception) {
//            dd($exception->getMessage());
//        }


        return view('auth.register');
    }
//
//    protected function test(string $username)
//    {
//
//        if ($username == 'sana123') {
//            throw new InvalidNameException('نام معتبر نیست');
//        }
//        throw new NotFoundException();
//    }

    public function post(RegisterPostRequest $request)
    {

        $input = $request->validated();
        $input['password'] = Hash::make($input['password']);


        try {
            User::create($input);
            Log::channel('custom-log')->info('ثبت', $input);
        } catch (Exception $exception) {
            Log::error($exception);
            return backWithError('اشتباه');
        }

        return redirect()->route('auth.login.index');
    }
}
