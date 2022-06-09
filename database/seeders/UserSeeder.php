<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
        User::create([
            'name' => 'Vinicius Pereira',
            'email' => 'viniciusp.diogo@hotmail.com',
            'password' => bcrypt('Rammstein@1994'),
        ]);
        
    }
}
