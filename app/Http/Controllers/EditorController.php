<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function index(){
        return view('editor.editor_dashboard');
    }
    function create_editor(){
        return view('editor.create_editor');
    }
}
