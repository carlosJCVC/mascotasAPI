<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $item= [];
        $item['nombre'] = 'TEST';
        $item['raza'] = 'TEST';
        $item['especie'] = 'TEST';
        $item['edad'] = 'TEST';
        $item['sexo'] = 'TEST';
        $item['estado'] = 1;
        $item['imagen'] = 'TEST';
        $item['enfermedades'] = 'TEST';
        $item['procedencia'] = 'TEST';
        $item['descripcion'] = 'TEST';
        App\models\Mascota::create($item);
        // $this->call(UsersTableSeeder::class);
    }
}
