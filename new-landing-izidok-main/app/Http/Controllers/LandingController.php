<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LandingController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Home'
        ];
        return view('welcome', $data);
    }

    public function newsUpdate(){
        $data = [
            'title' => 'News & Update'
        ];
        return view('landing.others.news-update', $data);
    }

    public function newsUpdateDetail($id){
        $data = [
            'title' => 'News & Update Detail'
        ];
        return view('landing.others.news-detail', $data);
    }

    public function lang($locale){
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
