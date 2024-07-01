<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Hibah;
use Laililmahfud\Adminportal\Services\AdminService;

class HibahsService extends AdminService
{
    public function __construct(
        public $model = Hibah::class,
    ) {
    }

    public function datatable(Request $request, $perPage = 10)
    {
        $search = $request->get('search', '');

        return $this->model::where(function ($query) use ($search) {
            $query->orWhere("lembaga", "like", "%" . $search . "%");
            $query->orWhere("alamat_lembaga", "like", "%" . $search . "%");
            $query->orWhere("rekening", "like", "%" . $search . "%");
            $query->orWhere("nominal", "like", "%" . $search . "%");
            $query->orWhere("keterangan", "like", "%" . $search . "%");
            $query->orWhere("catatan", "like", "%" . $search . "%");
        })
            ->select("*")
            ->orderBy("hibahs.created_at")
            ->paginate($perPage);
    }

    public function store(Request $request)
    {
        return $this->model::create([
            "lembaga" => $request->lembaga,
            "alamat_lembaga" => $request->alamat_lembaga,
            "rekening" => $request->rekening,
            "nominal" => $request->nominal,
            "keterangan" => $request->keterangan,
            "catatan" => $request->catatan,
        ]);
    }

    public function update(Request $request, $uuid)
    {
        $data =  $request->only(['lembaga', 'alamat_lembaga', 'rekening', 'nominal', 'keterangan', 'catatan']);

        return $this->model::whereUuid($uuid)->update($data);
    }
}
