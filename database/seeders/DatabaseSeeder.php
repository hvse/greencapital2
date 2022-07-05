<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Medida;
use App\Models\Moneda;
use App\Models\Operacion;
use Illuminate\Database\Seeder;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::insert([
            'name' => 'Admin',
            'email' => 'admin@greencapital.com.py',
            'rol' => 9,
            'phone' => '',
            'password' => Hash::make('admin@123'),
          ]);
        Operacion::insert([
            "id" => 1,
            "name_es" => "VENTA",
            "name_en" => "FOR SALE",
        ]);
        Operacion::insert([
            "id" => 2,
            "name_es" => "ALQUILER",
            "name_en" => "FOR RENT",
        ]);
        Operacion::insert([
            "id" => 3,
            "name_es" => "VENTA/ALQUILER",
            "name_en" => "FOR SALE / FOR RENT",
        ]);

        Categoria::insert([
            "id" => 1,
            "name_es" => "CASA",
            "name_en" => "URBAN HOUSES",
        ]);

        Categoria::insert([
            "id" => 2,
            "name_es" => "DUPLEX",
            "name_en" => "DUPLEX",
        ]);

        Categoria::insert([
            "id" => 3,
            "name_es" => "DEPARTAMENTO",
            "name_en" => "APARTMENT",
        ]);

        Categoria::insert([
            "id" => 4,
            "name_es" => "LOTE",
            "name_en" => "PLOT",
        ]);

        Categoria::insert([
            "id" => 5,
            "name_es" => "ESTANCIA I CHACRA",
            "name_en" => "RANCH",
        ]);

        Categoria::insert([
            "id" => 6,
            "name_es" => "EDIFICIO",
            "name_en" => "BUILDING",
        ]);

        Categoria::insert([
            "id" => 7,
            "name_es" => "CASA RURAL",
            "name_en" => "RURAL HOUSE",
        ]);

        Categoria::insert([
            "id" => 8,
            "name_es" => "OFICINA",
            "name_en" => "OFFICE",
        ]);

        Medida::insert([
            "id" => 1,
            "name" => "hectareas"
        ]);
        Medida::insert([
            "id" => 2,
            "name" => "m²"
        ]);

        Moneda::insert([
            "id" => 1,
            "name" => "₲"
        ]);

        Moneda::insert([
            "id" => 2,
            "name" => "USD"
        ]);

    }
}
