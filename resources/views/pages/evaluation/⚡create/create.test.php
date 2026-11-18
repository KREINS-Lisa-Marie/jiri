<?php

use App\Models\User;
use Livewire\Livewire;

beforeEach(function(){
    $this-> user = User::factory()->create();
    \Pest\Laravel\actingAs($this-> user);});


it('renders successfully', function () {
    Livewire::test('pages::evaluation.create')
        ->assertStatus(200);
});

it('verifies that the evaluation create page is showing content elements in the right order', function () {
    Livewire::test('pages::evaluation.create')
        ->assertStatus(200)
        ->assertSeeInOrder(['Évaluation de', 'Retour', 'Critères', 'Commentaire sur le projet', 'Cote', 'Commentaire globale de l’évaluation', 'Cote globale', 'Enregistrer']);
});

it('verifies that the evaluation.create route displays a form to create an evaluation',
    function (string $locale, string $main_heading, string $button_text) {

        \Illuminate\Support\Facades\App::setLocale($locale);

        Livewire::test('pages::evaluation.create')
            ->assertSee("$main_heading", false)
            ->assertSeeHtml('<form wire:submit.prevent="store"')
            ->assertSee($button_text, false);
    }
)->with(
    [
        ['fr', 'Évaluation de', 'Enregistrer'],
        ['en', 'Evaluation of', 'Save'],
    ]
);
