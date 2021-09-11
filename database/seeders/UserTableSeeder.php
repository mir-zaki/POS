<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'type'=>'Admin',
            'username'=>'admin',
            'fullname'=>'admin',
            'password'=>bcrypt('admin'),
            'phone'=>'01771858887',

        ]);
    }
}
