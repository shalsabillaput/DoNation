<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
            'judul' => 'Bantuan Bencana Banjir Desa Asmo Harjo',
            'tglAwal' => '2023-04-01',
            'tglAkhir'=>'2023-05-01',
            'targetDana'=>'5000000',
            'currentDana'=>'300000',
            'deskripsi'=>'Desa Asmo Harjo trawan terkena bencana',
            'gambar'=>'asmo.png'
        ]);
        Program::create([
            'judul' => 'Bantuan Bencana Banjir Desa Asmo Harjo',
            'tglAwal' => '2023-04-01',
            'tglAkhir'=>'2023-05-01',
            'targetDana'=>'5000000',
            'currentDana'=>'300000',
            'deskripsi'=>'Desa Asmo Harjo trawan terkena bencana',
            'gambar'=>'asmo.png'
        ]);
        Program::create([
            'judul' => 'Bantuan Bencana Banjir Desa Asmo Harjo',
            'tglAwal' => '2023-04-01',
            'tglAkhir'=>'2023-05-01',
            'targetDana'=>'5000000',
            'currentDana'=>'300000',
            'deskripsi'=>'Desa Asmo Harjo trawan terkena bencana',
            'gambar'=>'asmo.png'
        ]);
        Program::create([
            'judul' => 'Bantuan Bencana Banjir Desa Asmo Harjo',
            'tglAwal' => '2023-04-01',
            'tglAkhir'=>'2023-05-01',
            'targetDana'=>'5000000',
            'currentDana'=>'300000',
            'deskripsi'=>'Desa Asmo Harjo trawan terkena bencana',
            'gambar'=>'asmo.png'
        ]);
    }
}
