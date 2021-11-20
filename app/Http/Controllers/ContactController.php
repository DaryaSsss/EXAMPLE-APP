<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $name=['adress'=>'Большая Семеновская',
        'tel'=>'64975475047',
        'email'=>'crs@mospolytech'];
        return view('contact', ['name'=>$name]);
    }
}
