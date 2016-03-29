<?php
namespace App\Http\Controllers;

use App\Article;
//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Request;
//use App\Services\TestService;
use App\Http\Requests\CreateArticleRequest;

class ArticlesController1 extends Controller
{

    public function __construct()
    {
        /**
         * Only for create page
         */
//        $this->middleware('auth', ['only' => 'create']);
//        $this->middleware('auth', ['except' => 'create']);
        $this->middleware('auth');
    }

    public function index(){


//        dd($testService->getName());
//        $articles = Article::all();
//        $articles = Article::latest('published_at')->published()->get();
        $articles = Article::latest()->get();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article){

//        $article = Article::findOrFail($id);
//        $article = Article::find($id);

//        if(is_null($article)){
//            abort(404);
//        }

        return view('articles.show', compact('article'));
    }

    public function create(){

        return view('articles.create');
    }


    /**
     *  CreateArticleRequest is responsible for validation
     */
    public function store(ArticleRequest $request){
//        $input = Request::all();
//        $input = request()->all();
//        $input = Request::get('title');
//        $input['published_at'] = Carbon::now();
//        dd($input);
//        Article::create($input);

//        $this->validate($request, ['title' => 'required', 'body' => 'required']);

//        Article::create($request->all());

        $article = new Article($request->all());

//        Auth::user()->articles()->save($article);
        Auth::user()->articles()->save($article);

        return redirect('articles');
    }

    public function edit(Article $article){
//        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, ArticleRequest $request)
    {
//        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }

}
