<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class UserController extends Controller
{
    public function avater()
    {
        return view('users.avatar');
    }

    public function changeAvater(Request $request)
    {
        $path = $request->file('img')->store('avatars');

        Storage::setVisibility($path, 'public');

        user()->avatar = 'https://s3-us-west-1.amazonaws.com/haofrank/'.$path;
        user()->save();

        return ['url' => user()->avatar];
    }
}
