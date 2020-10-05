<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialPlatsController extends Controller
{
    public function instagram() {
        return redirect('https://www.instagram.com/mathushan_21/');
    }

    public function linkedin() {
        return redirect('https://www.linkedin.com/in/mathushan-suthakaran-8441b8195/');
    }

    public function twitter() {
        return redirect('https://twitter.com/Mathush94027479');
    }
}
