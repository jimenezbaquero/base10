<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            DB::beginTransaction();
            $this->call([
                RoleSeeder::class,
                UserSeeder::class,
            ]);
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            LOG::error($e->getMessage());

        }
    }
}
