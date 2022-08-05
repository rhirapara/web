<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>'12345678',
        ]);
    }
}
