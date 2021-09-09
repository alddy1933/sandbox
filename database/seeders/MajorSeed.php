<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;

class MajorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Major::create(
            [
                'name' => 'SIJA',
                'slug' => 'sija',
                'info' => 'ini info sija',
            ]
        );
        Major::create(
            [
                'name' => 'IOP',
                'slug' => 'iop',
                'info' => 'ini info iop',
            ]
        );
        Major::create(
            [
                'name' => 'RPL',
                'slug' => 'rpl',
                'info' => 'ini info rpl',
            ]
        );
    }
}
