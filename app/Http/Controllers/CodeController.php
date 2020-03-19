<?php

namespace App\Http\Controllers;


use App\Code;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            // validation
            $name = $request->input('name');
            $secretCode = $request->input('secretCode');

            /** @var Code $code */
            $code = new Code();
            $code->user_id = Auth::user()->id;
            $code->name = $name;
            $code->secretCode = $secretCode;
            $code->save();
        }
    }

}