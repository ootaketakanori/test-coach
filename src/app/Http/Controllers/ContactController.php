<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();

        return view('index', compact('contacts', 'categories'));
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail']);
        return view('confirm', compact('contact'));
    }
    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail', 'category_id']);
        Contact::create($contact);
        return view('/confirm');
    }
}
