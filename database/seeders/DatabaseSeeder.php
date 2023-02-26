<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pruebas;

class DatabaseSeeder extends Seeder
{   
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([PruebasTableSeeder::class]);

        Pruebas::factory(10)->create([
            'body' => 'Descubriendo nuevos orizontes'
        ]);

        // DB::table('pruebas')->insert(
        //     [
        //             [
        //                 'title' => 'Post One',
        //                 'expert' => 'Summary of Post One',
        //                 'body' => 'Body of Post One',
        //                 'image_path' => 'Empty',
        //                 'is_published' => false,
        //                 'min_to_read' => 2
        //             ],
        //             [
        //                 'title' => 'Post Two',
        //                 'expert' => 'Summary of Post Two',
        //                 'body' => 'Body of Post Two',
        //                 'image_path' => 'Empty',
        //                 'is_published' => false,
        //                 'min_to_read' => 2
        //             ]
        //         ]
            
        // );
    }
}
