<?php

test('the root page links to each livewire component page', function () {
    $this->get('/')
        ->assertSuccessful()
        ->assertSee('/hello')
        ->assertSee('/counter')
        ->assertSee('/todo');
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

test('old home route is no longer exposed', function () {
    $this->get('/home')
        ->assertNotFound();
});
