<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Perkesmas;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PerkesmasExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function headings(): array
    {
        return [
            'id_perkesmas',
            'id_register',
            'pasien_id',
            'nama_pasien',
            'nik',
            'tanggal_lahir',
            'jenis_kelamin',
            'alamat',
            'no_bpjs',
            'kepala_keluarga',
            'pendidikan',
            'tanggal_kunjungan',
            'kunjungan',
            'pekerjaan',
            'intervensi_keperawatan',
            'diagnosa_keperawatan',
            'implementasi_keperawatan',
            'keterangan',
        ];
    }

    public function collection()
    {
        return Perkesmas::all();
    }
}
