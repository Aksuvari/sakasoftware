<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PackageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types=['Small','Medium','Large'];
        foreach ($types as $type){
            DB::table('package_type')->insert([
                'name'=>$type,
                'slug'=>Str::slug($type),
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }
    }
}
