<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class NewArticleController extends Controller
{
    public function create() {
        return view ('create');
    }

    public function store() {
        $attributes = request()->validate([
            'title' => 'required|min:3|max:255',
            'author' => 'required|min:2|max:255',
            'content' => 'required|min:2|max:1000',
            'publish_date' => 'required',
        ]);

        // $article = Article::create($attributes);
        // TODO Find a way to store everything at the right place in db
        
        return redirect('articles')->with('success', 'Your article has been added successfully.');

    }
}
