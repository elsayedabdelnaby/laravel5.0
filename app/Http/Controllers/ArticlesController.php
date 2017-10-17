<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ArticlesController extends Controller {

	public function index(){
		$articles = Article::all();
		return view('articles.index', compact('articles'));
	}

	public function show($id)
	{
		$article = Article::findOrFail($id);
		return view('articles.show', compact('article'));
	}

	public function create(){
		return view('articles.create');
	}

	public function store(Request $request)
	{
		$article = new Article();
		$article->title = $request->get('title');
		$article->body = $request->get('body');
		$article->published_at = Carbon::now();
		$article->save();
		return $article;
	}

}
