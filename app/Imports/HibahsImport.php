<?php

namespace App\Imports;

use App\Models\Hibah;
use Illuminate\Contracts\Queue\ShouldQueue;
use Laililmahfud\Adminportal\Helpers\ImportExcel;

class HibahsImport extends ImportExcel implements ShouldQueue
{
    /**
     *  You can add your initial variable here
     */
    public function __init()
    {
    }
    public function handle(array $row)
    {
        /**
         *  usage $row :: $row['name'],
         *  $this->importStatus for handle import log status
         */
        if (
            $row['nama_lembaga'] &&
            $row['alamat_lembaga'] &&
            $row['rekening'] &&
            $row['nominal_hibah'] &&
            $row['keterangan'] &&
            $row['catatan']
        ) {
            Hibah::updateOrCreate([
                'rekening' => $row['rekening'],
            ], [
                'lembaga' => $row['nama_lembaga'],
                'alamat_lembaga' => $row['alamat_lembaga'],
                'rekening' => $row['rekening'],
                'nominal' => $row['nominal_hibah'],
                'keterangan' => $row['keterangan'],
                'catatan' => $row['catatan'],
            ]);
        }

        $this->importStatus = "success";
    }
}
