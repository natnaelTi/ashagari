<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        //
        User::create([
            'firstname' => 'Admin',
            'lastname' => 'Ashagari',
            'email' => 'admin@ashagari.org',
            'password' => Hash::make('admin.secret'),
            'filepath' => 'Admin.Ashagari.profile.png',
            // 'organisation_id' => '1',
            'role' => 'admin'
        ]);

        User::create([
            'firstname' => 'Mekdes',
            'lastname' => 'Gebrewold',
            'email' => 'mekdes2birhane@gmail.com',
            'password' => Hash::make('secret'),
            'filepath' => 'Mekdes.Gebrewold.profile.png',
            // 'organisation_id' => '1',
            'role' => 'ceo'
        ]);
    }
}
