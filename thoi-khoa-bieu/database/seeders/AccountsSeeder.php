<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsSeeder extends Seeder
{
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'username' => 'admin',
                'password' => bcrypt('123'), // Mã hóa mật khẩu
                'role' => 'pdt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'department_user',
                'password' => bcrypt('123'),
                'role' => 'department',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'professor_user',
                'password' => bcrypt('123'),
                'role' => 'professor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
