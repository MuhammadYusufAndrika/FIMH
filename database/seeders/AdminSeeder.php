<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'username' => 'adm1n@hmif.com',
            'password' => Hash::make('@adm1nwebhmif1010'),
        ]);
    }
}
