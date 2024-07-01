<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Laililmahfud\Adminportal\Controllers\AdminController;
use App\Services\HibahsService;
use App\Imports\HibahsImport;

class AdminHibahsController extends AdminController
{
    protected $routePath = "admin.data-hibah";
    protected $pageTitle = "Data Hibah";
    protected $resourcePath = "admin.data-hibah";
    protected $moduleService = HibahsService::class;
    protected $importExcel = HibahsImport::class;
    protected $bulkAction = false;
    protected $import = true;
    protected $add = false;
    protected $tableAction = false;

    protected $tableColumns = [
        ["label" => "Lembaga", "name" => "lembaga"],
        ["label" => "Alamat Lembaga", "name" => "alamat_lembaga"],
        ["label" => "Rekening", "name" => "rekening"], ["label" => "Nominal", "name" => "nominal"],
        ["label" => "Keterangan", "name" => "keterangan"], ["label" => "Catatan", "name" => "catatan"],
    ];

    protected $rules = [
        "lembaga" => "required|min:3|max:150",
        "alamat_lembaga" => "required|min:3|max:150",
        "rekening" => "required|min:3|max:150",
        "nominal" => "required|min:3|max:150",
        "keterangan" => "required|min:3|max:150",
        "catatan" => "required|min:3|max:150",
    ];
}
