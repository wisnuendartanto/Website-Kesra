<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Article;
use Laililmahfud\Adminportal\Services\AdminService;

class ArticlesService extends AdminService
{
    public function __construct(
        public $model = Article::class,
    ) {
    }

    public function datatable(Request $request, $perPage = 10)
    {
        $search = $request->get('search', '');

       return $this->model::where(function ($query) use ($search) {
            $query->orWhere("title", "like", "%" . $search . "%");
            $query->orWhere("categories_id", "like", "%" . $search . "%");
            $query->orWhere("image", "like", "%" . $search . "%");;
            $query->orWhere("content", "like", "%" . $search . "%");;
            $query->orWhere("description", "like", "%" . $search . "%");;
            $query->orWhere("slug", "like", "%" . $search . "%");;
        })
            ->select("*")
            ->orderBy("articles.created_at");
            ->paginate($perPage);
    }

    public function store(Request $request)
    {
        return $this->model::create([
            "title" => $request->categories_id,
            "categories_id" => $request->title,
            "image" => AdminPortal::uploadFile($request->image),
            "content" => $request->content,
            "description" => $request->description,
            "slug" => Str::slug($request->title)
        ]);
    }

    public function update(Request $request, $uuid)
    {
        $data =  $request->only(['title', 'categories_id', 'image', 'content', 'description', 'slug']);

        return $this->model::whereUuid($uuid)->update($data);
    }
}

