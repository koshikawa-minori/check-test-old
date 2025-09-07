<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class RedoController extends Controller
{
  //入力画面(get/redo)
    public function index()
    {
      return view('redo.index');
    }

    public function confirm(Request $request)
    {
      $data = $request->all();
      return view('redo.confirm', ['input' => $data]);
    }

    public function store(Request $request)
    {
      $data = $request->all();
      Contact::create($data);
      return  redirect('/redo')->with('status', '保存しました');
    }

}
