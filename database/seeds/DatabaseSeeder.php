<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'           => '11122233344',
            'name'          => 'João',
            'phone'         => '8599999999',
            'birth'         => '1986-09-06',
            'gender'        => 'M',
            'email'         => 'joao@joao.com.br',
            'password'      => bcrypt('123456'),
        ]);
    }
}
