<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
       return view("contact");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'service' => 'required',
            'description' => 'nullable',
        ]);

        $contact = new Contact;
        $contact -> nama = $request->nama;
        $contact -> email = $request->email;
        $contact -> service = $request->service;
        $contact -> description = $request->description;
        if($contact -> save()){
        return redirect('contact/')->with('status', 'Data berhasil disimpan');
        }
        else {
            return redirect('contact/')->with('status', 'Data gagal disimpan');
        }
    }
}
