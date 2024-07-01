<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Articles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function page()
    {
        $article = Articles::select('articles.*', 'categories.name as category_name')->leftJoin('categories', 'categories.id', 'articles.categories_id')->orderBy('articles.id', 'desc')->limit(6)->get();
        $Ads = [];
        $data['Ads'] = $Ads;
        $data['article'] = $article;
        return view('home', $data);
    }
}
