<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usernew;

class UserController extends Controller
{
    function register(Request $r)
    {
        // return 'test'; die();
        // return $r->input(); die();
        $u = new Usernew;
        $u->name=$r->name;
        $u->email=$r->email;
        $u->type=$r->type;
        $u->password=Hash::make($r->password);
        $u->save();
        return $u;
    }
}
