<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $violations = Violation::with('student')->latest()->get();
        return view('dashboard', compact('violations'));
    }
}