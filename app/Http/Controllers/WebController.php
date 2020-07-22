<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function seguroVidatermino()
    {
        return view('seguro-vida-termino');
    }
    public function comparativo()
    {
        return view('comparativo');
    }
    public function contacto()
    {
        return view('contacto');
    }
    public function cita()
    {
        return view('cita');
    }
    public function imprimir(){
     $pdf = \PDF::loadView('pdf');
     return $pdf->download('ejemplo.pdf');
    }
    
}
