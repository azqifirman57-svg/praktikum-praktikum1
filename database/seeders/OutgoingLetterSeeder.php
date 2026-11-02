<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('outgoing_letters')->insert([
            [
                'nomor_surat' => '001/SK/FT/X/2026',
                'tanggal'     => '2026-10-05',
                'tujuan'      => 'Universitas Jember',
                'perihal'     => 'Permohonan Kerjasama',
                'keterangan'  => 'Berkas fisik dikirim via pos',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nomor_surat' => '002/SK/BAA/X/2026',
                'tanggal'     => '2026-10-10',
                'tujuan'      => 'Dinas Pendidikan',
                'perihal'     => 'Laporan Semester',
                'keterangan'  => 'Sudah disetujui Dekan',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'nomor_surat' => '003/SK/LPPM/X/2026',
                'tanggal'     => '2026-10-12',
                'tujuan'      => 'Kementerian Dikti',
                'perihal'     => 'Pengajuan Hibah Penelitian',
                'keterangan'  => 'Hardcopy menyusul',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
