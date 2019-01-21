<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        $notas = App\Nota::all();
        return view('inicio', compact('notas'));
    }
    public function fotos(){
        return view('fotos');
    }
    public function blog(){
        return view('blog');
    }
    public function nosotros($nombre = null){
        $equipo = ['Juanito', 'Pedrito', 'Ignacio'];
        //return view('nosotros', ['conjunto'=>$equipo]);
        return view('nosotros', compact('equipo','nombre'));
    }
}
