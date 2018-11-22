<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'remember_token' => '',
            ],
        ];

        foreach ($items as $item) {
            $user = User::create($item);
        }

//        $user->assignRole(['Administrator', 'Teacher']);

        $this->command->info('Admin User created with username admin@admin.com and password admin');
    }
}
