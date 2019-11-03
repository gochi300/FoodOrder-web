<?php

namespace App\Http\Controllers;

use App\User;
use App\UserAndroid;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function index()
    {
        $users = UserAndroid::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.users.index', compact('users'));
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
