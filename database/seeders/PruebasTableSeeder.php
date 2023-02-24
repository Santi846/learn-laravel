<?php

namespace Database\Seeders;
namespace App\Models;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models;

class PruebasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pruebas = [
            [
                'title' => 'Prueba Uno',
                'expert' => 'Resumen de prueba uno',
                'body' => 'Cuerpo de Prueba Uno',
                'image_path' => 'Vacia',
                'is_published' => false,
                'min_to_read' => 2
            ],
            [
                'title' => 'Prueba Dos',
                'expert' => 'Resumen de prueba Dos',
                'body' => 'Cuerpo de Prueba Dos',
                'image_path' => 'Vacia',
                'is_published' => false,
                'min_to_read' => 2
            ]
        ];

        foreach ($pruebas as $key => $value) {
            Pruebas::create($value);
        }
    }
}
