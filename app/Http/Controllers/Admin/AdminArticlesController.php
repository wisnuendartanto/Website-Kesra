<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Laililmahfud\Adminportal\Controllers\AdminController;
use App\Services\ArticlesService;

class AdminArticlesController extends AdminController
{
    protected $routePath = "admin.articles";
    protected $pageTitle = "Articles";
    protected $resourcePath = "admin.articles";
    protected $moduleService = ArticlesService::class;
    protected $bulkAction = false;

    protected $tableColumns = [
        ["label" => "Kategori", "name" => "categories_id"],
        ["label" => "Judul", "name" => "title"],
        ["label" => "Image", "name" => "image"],
    ];

    protected $rules = [
        "categories_id" => "required",
        "title" => "required|min:3|max:150",
        "content" => "required",
        "description" => "required",
        "image" => "required|image|mimes:jpeg,png,jpg,gif",
    ];

    public function create(Request $request)
    {
        $this->data = [
            'categories' => Category::all()
        ];
        return parent::create($request); // TODO: Change the autogenerated stub
    }

    public function edit(Request $request, $uuid)
    {
        $this->data = [
            'categories' => Category::all()
        ];
        return parent::edit($request, $uuid); // TODO: Change the autogenerated stub
    }
}
