<?php

use App\Models\Contact;
use App\Models\Jiri;
use App\Models\Project;
use App\Models\User;
use Livewire\Livewire;


beforeEach(function(){
    $this->user = User::factory()-> create();
    \Pest\Laravel\actingAs($this-> user);});


it('renders successfully', function () {
    Livewire::test('pages::home.index')
        ->assertStatus(200);
});

it('verifies that the home page is showing content elements in the right order', function () {
    Livewire::test('pages::home.index')
        ->assertStatus(200)
        ->assertSeeInOrder(['Dashboard', 'Épreuves', 'Ajouter une épreuve', 'Contacts', 'Contacts', 'Contacts archivés', 'Projets', 'Ajouter un projet' ]);
});

it('shows a message when there is no current jiri', function () {
    Livewire::test('pages::home.index')
        ->assertSee(__('pages/home.no_exam'))
        ->assertStatus(200);
});

it('shows a message when there is a current jiri', function () {
    Jiri::factory()->create([
        'user_id'=>$this->user->id,
        'name'=>'Projets web',
        'state'=>true,
    ]);

    Livewire::test('pages::home.index')
        ->assertSee(__('pages/home.current_exam'))
        ->assertSee('Projets web')
        ->assertDontSee(__('pages/home.no_exam'))
        ->assertStatus(200);
});

it('shows the projects of my logged in user', function () {
    $second_user = User::factory()->create();

    Project::factory()->create([
        'user_id'=>$this->user->id,
        'name'=>'Good Project',
    ]);

    Project::factory()->create([
        'user_id'=>$second_user->id,
        'name'=>'Other user Project',
    ]);

    Livewire::test('pages::home.index')
        ->assertSee('Good Project')
        ->assertDontSee('Other user Project')
        ->assertStatus(200);
});

it('shows the jiris of my logged in user', function () {
    $second_user = User::factory()->create();

    Jiri::factory()->create([
        'user_id'=>$this->user->id,
        'name'=>'Good Jiri',
    ]);

    Jiri::factory()->create([
        'user_id'=>$second_user->id,
        'name'=>'Other user Jiri',
    ]);

    Livewire::test('pages::home.index')
        ->assertSee('Good Jiri')
        ->assertDontSee('Other user Jiri')
        ->assertStatus(200);
});

it('shows the contacts of my logged in user', function () {
    $second_user = User::factory()->create();

    Contact::factory()->create([
        'user_id'=>$this->user->id,
        'first_name'=>'Halleluja',
    ]);

    Contact::factory()->create([
        'user_id'=>$second_user->id,
        'first_name'=>'Dumdum',
    ]);

    Livewire::test('pages::home.index')
        ->assertSee('Halleluja')
        ->assertDontSee('Dumdum')
        ->assertStatus(200);
});
