<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    public function index(){
        $bla=['adress'=>'Большая Семеновская',
        'tel'=>'64975475047',
        'email'=>'crs@mospolytech'];
            return view('article', ['name'=>$bla]);
    }
    public function create(){
        $article =new Article();
        $article->name=request('name');
        $article->short_text=request('short_text');
        $article->data_create=request('data_create');
        $article->save();
        return redirect('/')->with('nsg', 'Новость создана' );
}
}