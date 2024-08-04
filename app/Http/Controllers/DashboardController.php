<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\RouteAttributes\Attributes\Get;

class DashboardController extends Controller
{
    #[Get('/dashboard', middleware: ['auth', 'verified'], name: 'dashboard')]
    public function index() {
        return view('dashboard');
    }
}
