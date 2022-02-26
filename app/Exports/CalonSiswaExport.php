<?php

namespace App\Exports;

use App\CalonSiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CalonSiswaExport implements FromCollection, WithHeadings
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return collect($this->data);
    }

    public function headings() :array
    {
        return [
            'Nama',
            'Jenis Kelamin',
            'NIK',
            'Tempat Tanggal Lahir',
            'Agama',
            'Tinggal Bersama',
            'Pendaftaran'
        ];

    }

}
