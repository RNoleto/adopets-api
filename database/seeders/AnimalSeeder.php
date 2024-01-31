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
                'breed' => 'Corgi',
                'size' => 'Pequeno',
                'age' => '6 meses',
                'img' => 'assets/img/dog1.webp',
                'type' => 'dog',
            ],
            [
                'name' => 'Manhosa',
                'breed' => 'Buldog',
                'size' => 'Porte',
                'age' => 'Idade',
                'img' => 'assets/img/dog2.webp',
                'type' => 'dog',
            ],
            [
                'name' => 'Mingau',
                'breed' => 'Raça',
                'size' => 'Porte',
                'age' => 'Idade',
                'img' => 'assets/img/cat1.webp',
                'type' => 'cat',
            ],
            [
                'name' => 'Pelúcio',
                'breed' => 'Raça',
                'size' => 'Porte',
                'age' => 'Idade',
                'img' => 'assets/img/cat2.webp',
                'type' => 'cat',
            ],
        ];

        // Inserir dados na tabela
        foreach ($animals as $animal) {
            DB::table('animals')->insert($animal);
        }
    }
}
