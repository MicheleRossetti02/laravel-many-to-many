<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $technologies = ['iphone', 'tablet', 'android', 'computer'];
        foreach ($technologies as $technology) {
            $newTecnology = new Technology();
            $newTecnology->name = $technology;
            $newTecnology->slug = Technology::generateSlag($newTecnology->title);
            $newTecnology->save();
        }
    }
}
