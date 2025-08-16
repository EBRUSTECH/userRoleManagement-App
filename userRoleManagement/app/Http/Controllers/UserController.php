<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $input = $request->validate([
            'name' => 'name:required',
            'email' =>'email:unique,required',
            'department' =>'department:exists'
        ]);
        $input = $request->all();
        $input->create();
        return view('');
    }
}
