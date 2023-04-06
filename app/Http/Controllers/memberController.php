<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class memberController extends Controller
{
    //
    function insertData(Request $request){
        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->address = $request->address;
        $member->save();
    }
}
