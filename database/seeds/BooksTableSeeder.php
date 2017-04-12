<?php

use App\Books;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // llamamos al factory previamente creado en la carpeta de ModelFactory y le enviamos el modelo
        // y la cantidad de registros que va a registrar
        factory(Books::class, 20)->create();
    }
}
