<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class PagesController extends Controller
{
    public function index() {
        $data['images'] = Image::all();

        return view('main.index', $data);
    }

    public function services() {
        return view('main.services');
    }

    public function about() {
        return view('main.about');
    }

    public function cv() {
        return view('main.cv');
    }

    public function contact() {
        return view('main.contact');
    }

    public function pg() {
        return view('main.pg');
    }
}
