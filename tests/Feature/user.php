<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class user extends TestCase
{
    // use WithoutMiddleware;
    public function testBasicExample()
    {
        $this->disableExceptionHandling();
        $this->testSuccessfulLoginWithDefaultCredentials();

        $urls = [
            route('admin.admins.get_index')
            // route('voyager.media.index'),
            // route('voyager.settings.index'),

            // route('voyager.roles.index'),
            // route('voyager.roles.create'),
            // route('voyager.roles.show', ['role' => 1]),
            // route('voyager.roles.edit', ['role' => 1]),

            // route('voyager.users.index'),
            // route('voyager.users.create'),
            // route('voyager.users.show', ['user' => 1]),
            // route('voyager.users.edit', ['user' => 1]),

            // route('voyager.posts.index'),
            // route('voyager.posts.create'),
            // route('voyager.posts.show', ['post' => 1]),
            // route('voyager.posts.edit', ['post' => 1]),
            // route('voyager.pages.index'),
            // route('voyager.pages.create'),
            // route('voyager.pages.show', ['page' => 1]),
            // route('voyager.pages.edit', ['page' => 1]),

            // route('voyager.categories.index'),
            // route('voyager.categories.create'),
            // route('voyager.categories.show', ['category' => 1]),
            // route('voyager.categories.edit', ['category' => 1]),

            // route('voyager.menus.index'),
            // route('voyager.menus.create'),
            // route('voyager.menus.show', ['menu' => 1]),
            // route('voyager.menus.edit', ['menu' => 1]),

            // route('voyager.database.index'),
            // route('voyager.database.bread.edit', ['table' => 'categories']),
            // route('voyager.database.edit', ['table' => 'categories']),
            // route('voyager.database.create'),
        ];

        foreach ($urls as $url) {
            // $response = $this->withSession(['foo' => 'bar'])->get('/');
            $response = $this->call('GET', $url);
            // $this->client->request('GET', $url);
            $this->assertEquals(200, $response->status(), $url.' did not return a 200');
            // $this->assertTrue($this->client->getResponse()->isOk());
        }
    }

    // public function testPOST()
    //    {
    //    	$this->withoutMiddleware();

    //        $response = $this->json('POST', 'http://test.dev/admin/posts/store', ['Title' => 'test']);

    //        $response
    //            ->assertStatus(200)
    //            ->assertJson([
    //                'created' => true,
    //            ]);
    //    }
}
