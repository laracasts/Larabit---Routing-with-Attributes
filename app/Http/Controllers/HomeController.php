<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Defaults;
use Spatie\RouteAttributes\Attributes\Get;

class HomeController extends Controller
{
    #[Get('/')]
    public function index() {
        return view('welcome');
    }

    #[Get('/greet/{personName?}')]
    #[Defaults('personName', 'jeremy')]
    public function greet($personName) {
        return $personName;
    }
}
