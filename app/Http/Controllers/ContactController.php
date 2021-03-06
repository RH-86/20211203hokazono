<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        $this->validate($request,Contact::$rules);
        $form = $request->all();
        Contact::create($form);
        return view('thanks');
    }
}
