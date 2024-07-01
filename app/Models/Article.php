<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laililmahfud\Adminportal\Traits\HasDatatable;
use Laililmahfud\Adminportal\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, HasUuid, HasDatatable;

    protected $table = "articles";
    protected $fillable = ["categories_id", "title", "slug", "content", "description", "image", "deleted_at"];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'categories_id');
    }
}
