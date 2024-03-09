<?php

namespace Database\Seeders;

use App\Models\Clients;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create()->each(function ($user) {
           Clients::factory(['user_id' => $user->id])->create();
        });
    }
}
