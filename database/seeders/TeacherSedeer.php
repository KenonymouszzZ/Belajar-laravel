<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Teacher;


class TeacherSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teachers::insert([
            'NIK' => '1234',
            'nama' => 'Farhan',
            'alamat'=> 'depok',
            'umur'=>'20',
            'kodemapel'=>'1234',
            'walikelas'=>'PPLG 2',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);  

        $data[
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 2']
            ['NIK'=>'2414241','nama'=>'tatang','alamat'=> 'ciputat', 'kodemapel'=>'4567','walikelas'=>'PPLG 3']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 4']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 5']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 6']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 7']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 8']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 9']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 10']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 11']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 12']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 13']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 14']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 15']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 16']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 17']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 18']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 2']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 2']
            ['NIK'=>'2414241','nama'=>'Farhan','alamat'=> 'depok', 'kodemapel'=>'1234','walikelas'=>'PPLG 2']
        ];
    }   
}
