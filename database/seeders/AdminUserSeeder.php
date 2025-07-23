<?php



namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // <-- Taruh di sini

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Frans',
            'email' => 'admin2@example.com',
            'password' => bcrypt('Annette08'),
        ]);
    }
}

