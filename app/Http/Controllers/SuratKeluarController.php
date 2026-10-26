<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index(){
        $suratKeluar = [
            [
                "id" => 1,
                "nomor_surat" => "001/FT/SK/X/2026",
                "tanggal" => "05-10-2026",
                "penerima" => "Dinas Pendidikan",
                "perihal" => "Permohonan Kerja Sama"
            ],
            [
                "id" => 2,
                "nomor_surat" => "002/FT/SK/X/2026",
                "tanggal" => "06-10-2026",
                "penerima" => "Universitas Jember",
                "perihal" => "Undangan Seminar"
            ],
            [
                "id" => 3,
                "nomor_surat" => "003/FT/SK/X/2026",
                "tanggal" => "07-10-2026",
                "penerima" => "PT Maju Jaya",
                "perihal" => "Pengajuan Magang"
            ]
        ];

        return view("surat-keluar.index", compact("suratKeluar"));
    }

    public function show($id){
        $surat = [
            1 => [
                "id" => 1,
                "nomor_surat" => "001/FT/SK/X/2026",
                "tanggal" => "05-10-2026",
                "penerima" => "Dinas Pendidikan",
                "perihal" => "Permohonan Kerja Sama"
            ],
            2 => [
                "id" => 2,
                "nomor_surat" => "002/FT/SK/X/2026",
                "tanggal" => "06-10-2026",
                "penerima" => "Universitas Jember",
                "perihal" => "Undangan Seminar"
            ],
            3 => [
                "id" => 3,
                "nomor_surat" => "003/FT/SK/X/2026",
                "tanggal" => "07-10-2026",
                "penerima" => "PT Maju Jaya",
                "perihal" => "Pengajuan Magang"
            ]
        ];

        $surat = $surat[$id] ?? null;

        return view("surat-keluar.show", compact("surat"));
    }
}
