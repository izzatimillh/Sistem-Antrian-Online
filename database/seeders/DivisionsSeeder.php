<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $divisions = [
            [
                'nama_bidang' => 'Ruang Yankes Rujukan',
                'no_ruang' => '12',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'nama_bidang' => 'Ruang Sumsel Tanggap',
                'no_ruang' => '15',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'nama_bidang' => 'Ruang 1',
                'no_ruang' => '11',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'nama_bidang' => 'Ruang 2',
                'no_ruang' => '1',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'nama_bidang' => 'Ruang 3',
                'no_ruang' => '3',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'nama_bidang' => 'Ruang 5S',
                'no_ruang' => '5',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'nama_bidang' => 'Ruang 5',
                'no_ruang' => '7',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'nama_bidang' => 'Ruang Admin',
                'no_ruang' => '99',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
        ];

        Division::insert($divisions);
    }
}
