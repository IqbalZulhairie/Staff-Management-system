<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testing extends Controller
{
    public function home()
    {
        echo 'This Is Testing - home';
    }

    public function view($id)
    {
        echo 'This Is Testing - method view with id'.$id;
    }

    public function form()
    {
        return view('test.form');
    }
}
