<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getAllArticles(){

    $articles = Article::all();
    return view('index', ['articles' => $articles]);
    }
}
