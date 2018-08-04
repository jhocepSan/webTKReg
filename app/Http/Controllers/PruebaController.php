<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    function sumar($a,$b){
    	$result=$this->suma1($b);
    	$res=$a+$result;
    	return view('contenido')->with('resultado',$res);
    }
    function suma1($a){
    	return $a+1;
    }
    function saludar(){
    	return view('contenido')->with('resultado','juan jose');
    }
}

