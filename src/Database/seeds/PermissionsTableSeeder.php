<?php

namespace Ecoflow\Access\Database\seeds;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        /** User resource */
        DB::table('permissions')->insert([
            'name' => 'can-create-user',
            'desc' => 'Can create a user resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-update-user',
            'desc' => 'Can update a user resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-delete-user',
            'desc' => 'Can delete a user resource',
            'created_at' => Carbon::now(),
        ]);

        /** Role resource */
        DB::table('permissions')->insert([
            'name' => 'can-create-role',
            'desc' => 'Can create a role resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-update-role',
            'desc' => 'Can update a role resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-delete-role',
            'desc' => 'Can delete a role resource',
            'created_at' => Carbon::now(),
        ]);

        /** Permission resource */
        DB::table('permissions')->insert([
            'name' => 'can-create-permission',
            'desc' => 'Can create a permission resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-update-permission',
            'desc' => 'Can update a permission resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-delete-permission',
            'desc' => 'Can delete a permission resource',
            'created_at' => Carbon::now(),
        ]);

        /** Shop resource */
        DB::table('permissions')->insert([
            'name' => 'can-create-shop',
            'desc' => 'Can create a shop resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-update-shop',
            'desc' => 'Can update a shop resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-delete-shop',
            'desc' => 'Can delete a shop resource',
            'created_at' => Carbon::now(),
        ]);

        /** Category resource */
        DB::table('permissions')->insert([
            'name' => 'can-create-category',
            'desc' => 'Can create a category resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-update-category',
            'desc' => 'Can update a category resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-delete-category',
            'desc' => 'Can delete a category resource',
            'created_at' => Carbon::now(),
        ]);

        /** Product resource */
        DB::table('permissions')->insert([
            'name' => 'can-create-product',
            'desc' => 'Can create a product resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-update-product',
            'desc' => 'Can update a product resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-delete-product',
            'desc' => 'Can delete a product resource',
            'created_at' => Carbon::now(),
        ]);

        /** Currency resource */
        DB::table('permissions')->insert([
            'name' => 'can-create-currency',
            'desc' => 'Can create a currency resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-update-currency',
            'desc' => 'Can update a currency resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-delete-currency',
            'desc' => 'Can delete a currency resource',
            'created_at' => Carbon::now(),
        ]);

        /** ProductType resource */
        DB::table('permissions')->insert([
            'name' => 'can-create-productType',
            'desc' => 'Can create a productType resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-update-productType',
            'desc' => 'Can update a productType resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-delete-productType',
            'desc' => 'Can delete a productType resource',
            'created_at' => Carbon::now(),
        ]);

        /** ProductUnit resource */
        DB::table('permissions')->insert([
            'name' => 'can-create-productUnit',
            'desc' => 'Can create a productUnit resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-update-productUnit',
            'desc' => 'Can update a productUnit resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-delete-productUnit',
            'desc' => 'Can delete a productUnit resource',
            'created_at' => Carbon::now(),
        ]);

        /** Address resource */
        DB::table('permissions')->insert([
            'name' => 'can-create-address',
            'desc' => 'Can create a address resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-update-address',
            'desc' => 'Can update a address resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-delete-address',
            'desc' => 'Can delete a address resource',
            'created_at' => Carbon::now(),
        ]);

        /** Email resource */
        DB::table('permissions')->insert([
            'name' => 'can-create-email',
            'desc' => 'Can create a email resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-update-email',
            'desc' => 'Can update a email resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-delete-email',
            'desc' => 'Can delete a email resource',
            'created_at' => Carbon::now(),
        ]);

        /** Phone resource */
        DB::table('permissions')->insert([
            'name' => 'can-create-phone',
            'desc' => 'Can create a phone resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-update-phone',
            'desc' => 'Can update a phone resource',
            'created_at' => Carbon::now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-delete-phone',
            'desc' => 'Can delete a phone resource',
            'created_at' => Carbon::now(),
        ]);
    }
}
