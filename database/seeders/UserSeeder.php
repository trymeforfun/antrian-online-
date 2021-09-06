<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
            'name' => 'super admin',
            'email' => 'superadmin@mail.com',
            'password' => Hash::make('123123123'),
        ]);
        $superadmin->assignRole('super admin');
        
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('123123123')
        ]);
        $admin->assignRole('admin');
    }
}
