<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Support\Facades\Request;

class KegiatanController extends Controller
{
    public static function category_page($slug_category)
    {
        $search = Request::input('search');
        $category = Categories::where('slug', $slug_category)->first();
        $articles = Articles::where('categories_id', $category->id)->orderBy('id', 'desc');
        if ($search) {
            $articles->where('title', 'like', "%$search%");
        }
        $data['category'] = $category;
        $data['articles'] = $articles->paginate(5);
        return view('post.kegiatan', $data);
    }
}
