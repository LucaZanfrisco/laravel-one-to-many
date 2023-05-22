<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Project::truncate();
        for($i = 0; $i < 20; $i++){
            $project = new Project();
            $project->nome = $faker->sentence(3);
            $project->descrizione = $faker->text(1000);
            $project->data_di_creazione = $faker->date();
            $project->slug = Str::slug($project->nome);
            $project->completato = $faker->boolean();
            $project->riscosso = $faker->boolean();
            $project->save();
        }
    }
}
