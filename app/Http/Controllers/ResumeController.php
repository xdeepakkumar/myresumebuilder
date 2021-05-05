<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;

class ResumeController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('resume', compact('user'));
    }
    public function download(){
        $user = auth()->user();
        $pdf = PDF::loadView('resume', compact('user'));
        return $pdf->download('invoice.pdf');
    }
}
