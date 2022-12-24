<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('user.index');
    }

    public function destinasi(){
        return view('user.destinasi');
    }

    public function blogs(){
        return view('user.blogs');
    }

    public function blog(){
        return view('user.blog');
    }

    public function eventCalendar(){
        return view('user.eventCalendar');
    }

    public function shop(){
        return view('user.shop');
    }

    public function insight(){
        return view('user.insight');
    }
    public function indexAdmin(){
        return view('admin.index');
    }
}
