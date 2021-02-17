<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function listTitle()
    {
        $articles = Article::paginate(4);

        return view('users.list_blog', compact('articles'));
    }

    public function listArticle()
    {
        $articles = Article::paginate(6);
        $categories = Category::all();

        return view('home', compact('articles', 'categories'));
    }

    public function delete($id)
    {
        $articles = Article::where('id', $id)->first();
        if ($articles != null) {
            File::delete('images/' . $articles->image);
            $articles->delete();
            return redirect('/list_blog');
        }

        return redirect('/list_blog');
    }
    
    public function fullStory($id)
    {
        $articles = Article::findOrFail($id);
        return view('full_Story', compact('articles'));
    }

    public function create(Request $request)
    {
        echo Auth::user()->id;
        error_log('start create');
        $request->validate([
            'title' => ['required', 'string', 'unique:App\Article,title'],
            'category_id' => ['required'],
            'description' => ['required'],
            'image' => ['required', 'file', 'mimes:jpg, png, jpeg', 'max:10000']
        ]);

        error_log('request validated');

        $photo = $request->file('image');
        $filename = now()->timestamp . now()->microsecond . '.' . $photo->getClientOriginalExtension();
        $photo->move(base_path('public/images/'), $filename);

        $user_id = Session::has('user_id') ? Session::get('user_id') : null;

        $article = new Article;
        $article->title = $request->input('title');
        $article->user_id = Auth::user()->id;
        $article->category_id = $request->input('category_id');
        $article->image = $filename;
        $article->description = $request->input('description');

        $article->save();

        return redirect('/create_blog');
    }
}
