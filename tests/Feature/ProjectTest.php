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
class ProjectTest extends InternalTestCase
{
    public function testStatus()
    {
        $response = $this->get('/Projects');

        $response->assertStatus(200);
    }
    public function testString()
    {
        $response = $this->get('/Projects');

        $response->assertSee("Liste des projets");
    }
    public function test_it_creates_at_least_hundred_fake_projects()
    {
        $projects = factory(Project::class, 15)->create();

        foreach ($projects as $project){

            $this->assertEquals($project->user->name,$project->author);
    }

        $this->assertTrue(count($projects) >= 15);


    }

}
