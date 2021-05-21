<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class themeController extends Controller
{
    public function index()
    {
        $data['tagline'] = 'We offer modern solutions for growing your business';
        $data['img'] = 'assets/img/hero-img.png';

        return view('theme', $data);
    }}
