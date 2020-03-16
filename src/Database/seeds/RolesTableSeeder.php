<?php

namespace Ecoflow\Access\Database\seeds;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'desc' => 'Administration',
            'created_at' => Carbon::now(),
        ]);

        DB::table('roles')->insert([
            'name' => 'User',
            'desc' => 'User',
            'created_at' => Carbon::now(),
        ]);

        for ($i = 0; $i < 5; $i++) {
            DB::table('roles')->insert([
                'name' => "role-$i",
                'desc' => "desc-$i",
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
