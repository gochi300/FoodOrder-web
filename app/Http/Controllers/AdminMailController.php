<?php

namespace App\Http\Controllers;

use App\Mail;
use Illuminate\Http\Request;

class AdminMailController extends Controller
{
    public function index()
    {
        $mails = Mail::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.mail.index', compact('mails'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function save()
    {

    }

    public function view()
    {
        return view('admin.news.view');
    }

    public function delete()
    {

    }

    public function destroy()
    {

    }
}
