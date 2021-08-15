<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = User::firstOrCreate([
          'name' => 'Kynn',
          'email' =>'kynn@hospital.com',
          'password' => bcrypt('123456')
      ]);

 
      echo "Usuario criado com Sucesso";
    }
}
