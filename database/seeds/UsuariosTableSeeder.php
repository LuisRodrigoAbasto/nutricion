<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre'=>'Luis Rodrigo',
            'apellido'=>'Abasto',
            'fecha_nacimiento'=>'2000/01/01',
            'sexo'=>'MASCULINO',
            'peso'=>80,
            'altura'=>1.70,
            'email'=>'abasto@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
    }
}
