<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'email' => 'luki.mtnspg@gmail.com',
            'instagram' => 'https://www.instagram.com/mtnspring_japan.official/',
        ]);
    }
}

