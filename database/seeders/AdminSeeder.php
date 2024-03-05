<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'Admin@email.com',
            'email_verified_at'=> now(),
            'password' => bcrypt('password'),
        ]);
        
        $user->assignRole('Admin');
        Admin::create([
            'Admin_id' => $user->id,
            
        ]);
    }
}
