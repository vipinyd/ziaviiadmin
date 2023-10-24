<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index(Request $request)
    {

         if ($request->ajax()) {
            $user = User::all();
            return datatables()->of($user)->make(true);
        }

        return view('admin.user.index');

    }
}
