<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.contacts.list', [
            'data' => $contacts
        ]);
    }
}
