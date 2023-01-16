<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Super Admin',
            'email' => 'superadmin@mail.com',
            'email_verified_at' => now(),
            'phone' => '03012345678',
            'password' => bcrypt('superadmin@123'),
            'role' => Admin::ROLE_SUPER_ADMIN,
            'is_active' => Admin::IS_ACTIVE_TRUE,
        ]);
    }
}
