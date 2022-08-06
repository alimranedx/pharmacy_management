<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function login(){
        return view('admin/login');
    }
    function admin_dashboard(){
        return view('admin.admin_dashboard');
    }
}
