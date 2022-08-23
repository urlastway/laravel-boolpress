<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function submit(Request $request){
        $validation = $request->validate([
            'massagge'=>'required|min:5|max:50',
            'name' => 'required|min:5|max:15',
            'lastname' => 'required|min:5|max:50'

        ]);
    }
}
