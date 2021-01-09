<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; 
use App\Models\Tag;

class ArticlesController extends Controller

{

    public function index () {
        // render a list of resource
        if (request('tag')){
               $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }
        return view('articles.index', [
            'articles' => $articles
        ]);

   }

    public function show (Article $article) {
        return view('articles.show', ['article' => $article]);
    }

    public function create ()
    {
        // shows a view to create a new resource
        return view('articles.create');
    }

    public function store () {
        // persists the new resource
        Article::create($this->validateArticle());
        return redirect('/articles');
    } 

    public function edit (Article $article) {
        // show a view to edit an existing resource
        return view('articles.edit', [
            'article' => $article
        ]);
    }
    
    public function update (Article $article) {
        // persist changes to an edited resource
        $article->update($this->validateArticle());
        return redirect(route("articles.show", $article));
    }

    public function destroy ($id) {
       // delete a resource 
        return redirect('/articles');
    }
    
    protected function validateArticle () {
        return request() -> validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
