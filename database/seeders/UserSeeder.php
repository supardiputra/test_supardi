<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'roles' => 'Admin',
                'password' => bcrypt('12345'),
                'status' => 'Aktif',
            ],
            
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
