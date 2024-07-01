<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laililmahfud\Adminportal\Traits\HasUuid;

class hibah extends Model
{
    use HasFactory, HasUuid;
    protected $fillable = [
        'lembaga',
        'alamat_lembaga',
        'rekening',
        'nominal',
        'keterangan',
        'catatan'
    ];
}
