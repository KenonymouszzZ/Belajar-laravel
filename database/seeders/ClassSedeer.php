<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassRoom;
use Carbon\Carbon;

class ClassSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassRoom::insert([
            'name' => 'PPLG2',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);
    }
}
