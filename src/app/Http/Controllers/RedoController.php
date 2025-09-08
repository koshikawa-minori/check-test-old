<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use App\Http\Requests\RedoRequest;

class RedoController extends Controller
{
  //入力画面(get/redo)
    public function index()
    {
      return view('redo.index');
    }

    public function confirm(RedoRequest $request)
    {
      $validated = $request->validated();
      return view('redo.confirm', ['input' =>  $validated]);
    }

    public function store(RedoRequest $request)
    {

      if ($request->has('_back')) {
        return redirect('/redo')->withInput();
      }

      $validated = $request->validated();
      Contact::create($validated);
      return  redirect('/redo')->with('status', '保存しました');
    }

}
