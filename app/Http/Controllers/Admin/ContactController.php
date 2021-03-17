<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.show', compact('contact'));
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        Toastr::success('Contact message has been successfully deleted !', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

}
