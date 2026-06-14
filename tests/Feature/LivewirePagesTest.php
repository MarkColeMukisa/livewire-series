<?php

use App\Models\Post;

test('the root page links to each livewire component page', function () {
    $this->get('/')
        ->assertSuccessful()
        ->assertSee('/hello')
        ->assertSee('/counter')
        ->assertSee('/todo')
        ->assertSee('/posts');
});

test('the hello page renders the existing hello-world component', function () {
    $this->get('/hello')
        ->assertSuccessful()
        ->assertSee('The current time is')
        ->assertSee('Refresh');
});

test('the counter page renders the existing counter component', function () {
    $this->get('/counter')
        ->assertSuccessful()
        ->assertSee('Count:1')
        ->assertSee('+')
        ->assertSee('-');
});

test('the todo page renders the existing todo component', function () {
    $this->get('/todo')
        ->assertSuccessful()
        ->assertSee('Take out trash')
        ->assertSee('Do dishes')
        ->assertSee('Current todo:');
});

test('the posts page renders posts from the database', function () {
    $posts = Post::factory()->count(3)->create();

    $response = $this->get('/posts')
        ->assertSuccessful()
        ->assertSee('/posts');

    foreach ($posts as $post) {
        $response->assertSeeText($post->title);
        $response->assertSeeText($post->content);
    }
});

test('old home route is no longer exposed', function () {
    $this->get('/home')
        ->assertNotFound();
});
