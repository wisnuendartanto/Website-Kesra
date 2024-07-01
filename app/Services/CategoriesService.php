<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Category;
use Laililmahfud\Adminportal\Services\AdminService;
use Illuminate\Support\Str;

class CategoriesService extends AdminService
{
    public function __construct(
        public $model = Category::class,
    ) {
    }

    public function datatable(Request $request, $perPage = 10)
    {
        $search = $request->get('search', '');

        return $this->model::where(function ($query) use ($search) {
            $query->orWhere("name", "like", "%" . $search . "%");;
        })
            ->select("*")
            ->datatable($perPage, "categories.created_at");
    }

    public function store(Request $request)
    {
        return $this->model::create([
            "name" => $request->name,
            "slug" => Str::slug($request->name)
        ]);
    }

    public function update(Request $request, $uuid)
    {
        $data =  $request->only(['name']);
        $data['slug'] = Str::slug($request->name);
        return $this->model::whereUuid($uuid)->update($data);
    }
}
