<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function prime()
    {
        $data['heading'] = "Prime Numbers 1 to 100";
        return view('prime', $data);
    }

}
