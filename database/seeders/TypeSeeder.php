<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $typesName = [
            "Web development",
            "Gaming",
            "Internet Security",
            "Informatics",
            "Curiosity",
            "News",
            "Networks"
        ];

        foreach ($typesName as $typeName){
            $type = new Type();
            $type->name = $typeName;
            $type->color = $faker->unique()->safeHexColor();
            $type->save();
        }
    }
}
