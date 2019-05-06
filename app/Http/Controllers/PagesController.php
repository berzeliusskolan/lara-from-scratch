<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'Gör 1',
            'Sak 2',
            '3an'
        ];
        return view('welcome', [
            'tasks' => $tasks
        ]);
    }

    //

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

}
