<?php

namespace Devhiren\Welcome;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome::welcome');
    }
}
