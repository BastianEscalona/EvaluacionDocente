<?php
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Soy Admin
        $user = User::create(['id' => '1', 'name' =>'Bastian', 'email' => 'bastian@ucm.cl','password' => bcrypt('12345678')]);
        $user->roles()->sync([1,1]);

        
        $user = User::create(['id' => '2', 'name' =>'Carlos', 'email' => 'carlos@ucm.cl','password' => bcrypt('12345678')]);
        $user->roles()->sync([1,1]);

        $user = User::create(['id' => '3', 'name' =>'Octavio', 'email' => 'octavio@ucm.cl','password' => bcrypt('12345678')]);
        $user->roles()->sync([1,1]);


        //Secretarias
        $user = User::create(['id' => '4', 'name' =>'Secretaria 1', 'email' => 'secretaria1@ucm.cl','password' => bcrypt('12345678')]);
        $user->roles()->sync([2,2]);

        $user = User::create(['id' => '5', 'name' =>'Secretaria 2', 'email' => 'secretaria2@ucm.cl','password' => bcrypt('12345678')]);
        $user->roles()->sync([2,2]);

    }
}
