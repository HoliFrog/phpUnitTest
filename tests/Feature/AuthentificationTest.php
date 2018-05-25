<?php
/**
 * Created by PhpStorm.
 * User: olivier.menuel
 * Date: 15/05/2018
 * Time: 15:06
 */

namespace Tests\Feature;

use Dotenv\Exception\InvalidCallbackException;
use Mockery\Exception;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Faker;
use App\User;
use App\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Access\AuthorizationException;

class AuthentificationTest extends TestCase
{
    use RefreshDatabase;

    public function testLogout()
    {
        $user = factory(User::class)->create();
        // Authentification
        $this->be($user);
        $this->assertTrue(Auth::check());
        // Requête

        $response = $this->call('post', route('logout'));
        // Assertions
        $this->assertTrue(Auth::guest());

    }

    public function test_a_user_is_redirected_to_login_page_if_not_logged_in_and_trying_to_project_creation()
    {
        $tabi = [
            'projectName' => 'BullShit',
            'projectDetail' => 'mesCouilles',
            'author' => 'Crow',
            '_method' => 'Post',
        ];
        $this->expectException(AuthenticationException::class);

       $this->post(route('storeProject'), $tabi);
    }

        function testAutorisedUpdate()
        {
            $project = factory(Project::class)->create();
            $user = $project->user;
            $expected = 'Tarace';

            $urine = route('updateProject', $project->id);
            $tab = [
                'projectName' => $expected,
                'projectDetail' => 'mesCouilles',
                'author' => $user->name,
                '_method' => 'PUT',
            ];

            $this->actingAs($user)->put($urine, $tab);
            $updatedProject = Project::find($project->id);
            $actual = $updatedProject->projectName;
            $this->assertEquals($expected, $actual);

        }
        function testUnautorisedUpdate()
        {
            $project = factory(Project::class)->create();
            $user = factory(User::class)->create();
            $expected = 'Tarace';

            $urine = route('updateProject', $project->id);
            $tab = [
                'projectName' => $expected,
                'projectDetail' => 'mesCouilles',
                'author' => $user->name,
                '_method' => 'PUT',
            ];
            $this->expectException(AuthorizationException::class);

            $response = $this->actingAs($user)->put($urine, $tab);

            $updatedProject = Project::find($project->id);
            $actual = $updatedProject->projectName;
            $this->assertEquals($expected, $actual);
        }
    }