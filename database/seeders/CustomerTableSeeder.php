<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'customer_name'=>'Walk in Customer',
            'email'=>'walk@gmail.com',
            'address'=>'Walk in Customer',
            'phone'=>'017000000',

        ]);

    }
}
