<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;

class ContactsController extends Controller
{
    public function submit(ContactsRequest $request){
        /*$validation = $request->validate([
           /* 'massagge'=>'required|min:5|max:50',
            'name' => 'required|min:5|max:15',
            'lastname' => 'required|min:5|max:50'
                    
        ]);*/
    }
}
