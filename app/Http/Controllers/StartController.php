<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $url_data = [
            [
                'title' => 'DKA-DEVELOP',
                'url' => 'https://dka-develop.ru'
            ],
            [
                'title' => 'Youtube',
                'url' => 'https://youtube.com'
            ]
        ];

        return view('start', [
            'url_data' => $url_data
        ]);
    }
}
