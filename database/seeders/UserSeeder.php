<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Victor Arana Flores',
        //     'email' => 'victor.aranaf92@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        $user = User::create([
            'name' => 'Marcus Moreira',
            'email' => 'marcus.moreira@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole('Admin');

        User::factory(99)->create();
    }
}
