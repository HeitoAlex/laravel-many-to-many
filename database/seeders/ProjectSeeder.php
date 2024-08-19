<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Testing\Fakes\Fake;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = Type::all()->pluck('id');

        for ($i=0; $i < 50 ; $i++) {

            $newProject = new Project();
            $newProject->type_id = $faker->randomElement($types);
            $newProject->title = $faker->realText(50);
            $newProject->author = $faker->name(50);
            $newProject->date = $faker->dateTimeThisYear();
            $newProject->link = $faker->url(50);
            $newProject->image = $faker->imageUrl();
            $newProject->content = $faker->realText(500);
            $newProject->save();
        }
    }
}
