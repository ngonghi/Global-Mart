<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function getIndex() {
        return view('homepage.index');
    }

    public function getAboutService() {
        return view('homepage.about-service');
    }
    
    public function getFee() {
        return view('homepage.fee');
    }
    
    public function getProhibit() {
        return view('homepage.prohibit');
    }
}
