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
        $response = $this->get('/Project');

        $response->assertStatus(200);
    }
    public function testString()
    {
        $response = $this->get('/Project');

        $response->assertSee("Liste des projets");
    }

}
