<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IncomingLetter;

class IncomingLetterSeeder extends Seeder
{
    public function run(): void
    {
        IncomingLetter::create([
            'nomor_surat' => '001/SMK/2026',
            'tanggal' => '2026-11-02',
            'pengirim' => 'SMK Negeri 1',
            'perihal' => 'Surat Undangan',
            'keterangan' => 'Surat undangan rapat',
        ]);
    }
}