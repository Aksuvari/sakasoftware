<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class projectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types=['Tanıtım','Mobil Uygulama','E-ticaret Uygulamaları','Otomasyon Sistemleri'];
        foreach ($types as $type){
            DB::table('project_type')->insert([
                'name'=>$type,
                'slug'=>Str::slug($type),
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }
    }
}
