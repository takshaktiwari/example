<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        #return $request->all(); // return all data
        #return $request->post('message'); // return specific field data

        // Create Modal
        Contact::create([
            'name'  =>  $request->post('name'),
            'email'  =>  $request->post('email'),
            'mobile'  =>  $request->post('mobile'),
            'message'  =>  $request->post('message'),
        ]);

        return redirect()->route('contact')->withSuccess('Your data has been saved');
    }
}
