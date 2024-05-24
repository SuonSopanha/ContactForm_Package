<?php

namespace Nharavel\Contactform\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Nharavel\Contactform\Models\Contact;

class ContactFormController extends BaseController
{

    public function create()
    {
        return view('contactform::create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'message' => 'required|max:255',
        ]);

        Contact::create($validatedData);

        return view('contactform::thank');
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('contactform::index', compact('contacts'));
    }
}
