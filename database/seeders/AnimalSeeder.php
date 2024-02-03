<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $animals = [
            [
                'name' => 'Bolinha',
                'gender' => 0,
                'breed' => 'Corgi',
                'size' => 1,
                'age' => 6,
                'adoption' => 1,
                'img' => 'assets/img/dog1.webp',
                'type' => 1,
            ],
            [
                'name' => 'Manhosa',
                'gender' => 1,
                'breed' => 'Buldog',
                'size' => 1,
                'age' => 12,
                'adoption' => 1,
                'img' => 'assets/img/dog2.webp',
                'type' => 1,
            ],
            [
                'name' => 'Mingau',
                'gender' => 1,
                'breed' => 'Raça',
                'size' => 1,
                'age' => 6,
                'adoption' => 1,
                'img' => 'assets/img/cat1.webp',
                'type' => 2,
            ],
            [
                'name' => 'Pelúcio',
                'gender' => 0,
                'breed' => 'Raça',
                'size' => 1,
                'age' => 8,
                'adoption' => 1,
                'img' => 'assets/img/cat2.webp',
                'type' => 2,
            ],
        ];

        // Inserir dados na tabela
        foreach ($animals as $animal) {
            DB::table('animals')->insert($animal);
        }
    }
}
