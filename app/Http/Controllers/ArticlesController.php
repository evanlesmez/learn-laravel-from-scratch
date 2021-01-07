<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; 

class ArticlesController extends Controller
{

    public function index () {
        // render a list of resource
        $articles = Article::latest()->get();
        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    public function show ($id) {
        // show a single resource
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    public function create ()
    {
        // shows a view to create a new resource
        return view('articles.create');
    }

    public function store () {
        // persists the new resource
        request() -> validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]); 
        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();
        return redirect('/articles');
    } 

    public function edit ($id) {
        // show a view to edit an existing resource
        $article = Article::find($id);
        return view('articles.edit', [
            'article' => $article
        ]);
    }
    
    public function update ($id) {
        // persist changes to an edited resource
        request() -> validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]); 
        $article = Article::find($id);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();
        return redirect('articles/' . $article->id);
    }

    public function destroy ($id) {
       // delete a resource 
        return redirect('/articles');
    }
}
