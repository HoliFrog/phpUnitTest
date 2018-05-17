<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            App\Project::create([
                'firstName' => $faker->userName,
                'name' => $faker->name,
                'email' => $faker->email
            ]);
        }
    }
}
