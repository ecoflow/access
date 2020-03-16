<?php

namespace Ecoflow\Access\Database\seeds;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Ecoflow\Access\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    protected $faker;

    public function __construct()
    {
        $this->faker = Faker::create('Ecoflow\Access\Models\User');
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Jrb",
            'email' => "jrb.youssef@gmail.com",
            'role_id' => 1,
            'password' => Hash::make('123456'),
            'created_at' => Carbon::now(),
        ]);

        for ($i = 0; $i < 120; $i++) {

            $role = Role::inRandomOrder()->limit(1)->first();

            DB::table('users')->insert([
                'name' => $this->faker->name,
                'email' => $this->faker->email,
                'role_id' => $role->id,
                'password' => Hash::make('12345678'),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
