<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Laililmahfud\Adminportal\Controllers\AdminController;
use App\Services\CategoriesService;

class AdminCategoriesController extends AdminController
{
    protected $routePath = "admin.categories";
    protected $pageTitle = "Categories";
    protected $resourcePath = "admin.categories";
    protected $moduleService = CategoriesService::class;
    protected $bulkAction = false;

    protected $tableColumns = [
        ["label" => "Name", "name" => "name"],
    ];

    protected $rules = [
        "name" => "required|min:3|max:150",
    ];
    
    
}
