<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Articles;

class PostController extends Controller
{
    public static function page($slug)
    {
        $article = Articles::where('slug', $slug)->first();
        $data['article'] = $article;
        return view('post.post', $data);
    }
}
