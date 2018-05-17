<?php
/**
 * Created by PhpStorm.
 * User: olivier.menuel
 * Date: 15/05/2018
 * Time: 15:06
 */

namespace Tests\Feature;
use Tests\InternalTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Faker;
use App\User;
use App\Project;
class UserTest extends InternalTestCase
{


    public function test_it_creates_at_least_hundred_fake_projects()
    {
        $users = factory(User::class, 100)->make();

        $this->assertTrue(count($users) >= 100);

        }
//        $users = [];
//        $faker = Faker\Factory::create();
//
//        for ($i = 0; $i < mt_rand(100, 1000); $i++) {
//            $users[] =User::create([
//                'firstName' => $faker->userName,
//                'email' => $faker->email,
//                'name' => $faker->name,
//                'password'=>$faker->password(6,20)
//            ]);
//        }

//    public function run()
//    {
//        $faker = Faker\Factory::create();
//
//        for ($i = 0; $i < 100; $i++) {
//            Project::create([
//                'firstName' => $faker->userName,
//                'name' => $faker->name,
//                'email' => $faker->email
//            ]);
//        }
//    }
}