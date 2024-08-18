<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $tagsData = [
            [
                'name' => 'Design',
                'color' => '#FF5733'
            ],
            [
                'name' => 'Sviluppo',
                'color' => '#33FF57'
            ],
            [
                'name' => 'Marketing',
                'color' => '#3357FF'
            ],
            [
                'name' => 'SEO',
                'color' => '#F1C40F'
            ],
            [
                'name' => 'Content',
                'color' => '#E67E22'
            ],
            [
                'name' => 'Social Media',
                'color' => '#8E44AD'
            ],
            [
                'name' => 'Analisi',
                'color' => '#2ECC71'
            ],
            [
                'name' => 'E-commerce',
                'color' => '#3498DB'
            ],
            [
                'name' => 'Sicurezza',
                'color' => '#C0392B'
            ],
            [
                'name' => 'Prototipazione',
                'color' => '#D35400'
            ],
            [
                'name' => 'Testing',
                'color' => '#F39C12'
            ],
            [
                'name' => 'UI/UX',
                'color' => '#2C3E50'
            ],
            [
                'name' => 'Project Management',
                'color' => '#E74C3C'
            ],
            [
                'name' => 'Collaborazione',
                'color' => '#F5B041'
            ],
            [
                'name' => 'Innovazione',
                'color' => '#B3B333'
            ]
        ];

        foreach ($tagsData as $tagData) {

            $tag = New Tag();
            $tag->name = $tagData['name'];
            $tag->color = $tagData['color'];
            $tag->save();

            // o con le $fillable inserite nel model
            // Tag::create($tagData);
        }
    }
}
