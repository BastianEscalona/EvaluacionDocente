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
        $usuario = new User();
        $usuario->name = 'Carlos';
        $usuario->email = 'Carlos@ucm.cl';
        $usuario->password = '12345678';
        $usuario->save();

        $usuario = new User();
        $usuario->name = 'Octavio';
        $usuario->email = 'Octavio@ucm.cl';
        $usuario->password = '12345678';
        $usuario->save();

        $usuario = new User();
        $usuario->name = 'Bastian';
        $usuario->email = 'Bastian@ucm.cl';
        $usuario->password = '12345678';
        $usuario->save();

    }
}
