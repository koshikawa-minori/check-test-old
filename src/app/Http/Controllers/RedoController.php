<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedoController extends Controller
{
    // GET /redo
    public function index()
    {
        return 'redo index (controller)';
    }

    // POST /redo/confirm
    public function confirm(Request $request)
    {
        return 'redo confirm (controller)';
    }

    // POST /redo
    public function store(Request $request)
    {
        return 'redo store (controller)';
    }
}
