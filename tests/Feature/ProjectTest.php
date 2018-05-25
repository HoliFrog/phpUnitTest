<?php
/**
 * Created by PhpStorm.
 * User: olivier.menuel
 * Date: 15/05/2018
 * Time: 15:06
 */

namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Faker;
use App\User;
use App\Project;

class ProjectTest extends TestCase
{
    use RefreshDatabase;
    public function testStatus()
    {
        $response = $this->get('/Projects');

        $response->assertStatus(200);

    }
    public function testString()
    {
        $response = $this->get('/Projects');

        $response->assertSee("Liste des Projets");
    }
    public function test_it_creates_at_least_hundred_fake_projects()
    {
        $project = factory(Project::class)->create();
        $response = $this->get('/projectDetails/'.$project->id);
        $response->assertSee($project->projectName);




    }

}
