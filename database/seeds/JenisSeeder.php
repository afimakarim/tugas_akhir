<?php

use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Jenis::create
        ([
            'name' => "Skuter Matik"
        ]);
        \App\Jenis::create
        ([
            'name' => "Bebek"
        ]);
        \App\Jenis::create
        ([
            'name' => "Sport"
        ]);
    }
}
