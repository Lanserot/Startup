<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $resume = Posts::limit(10)->orderBy('id', 'DESC')->where('category', 'resume')->get();
        $vacancy = Posts::limit(10)->orderBy('id', 'DESC')->where('category', 'vacancy')->get();

        $resumeCount = Posts::where('category', 'resume')->count();
        $vacancyCount = Posts::where('category', 'vacancy')->count();

        return view('home.index', compact(['vacancy', 'resume', 'resumeCount', 'vacancyCount']));
    }

    public function posts()
    {
        $category =  \Request::route()->getName();

        $page = $category == 'resume' ? 'Резюме' : 'Вакансии';

        $posts = Posts::where('category', $category)->get();

        return view('posts.index', compact(['posts', 'page']));
    }

    public function view($id)
    {
        $post = Posts::where('id', $id)->first();

        if (empty($post)) {
            return redirect('/');
        }

        return view('posts.view', compact(['post']));
    }

    public function new()
    {
        return view('posts.new');
    }

    public function create(Request $request)
    {
        $category = explode('.', \Request::route()->getName());

        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
        ]);

        $pay = $request['price'] == 0 ? 0 : 1;

        $post = [
            'title' => $request['title'],
            'description' => trim($request['description']),
            'price' => $request['price'],
            'category' => $category[1],
            'pay' => $pay,
            'user_id' => 1
        ];

        Posts::insert($post);

        return redirect($category[1] . '/' . DB::getPdo()->lastInsertId());
    }
}
