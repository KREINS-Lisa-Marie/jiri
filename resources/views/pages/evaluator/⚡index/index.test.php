<?php

use Livewire\Livewire;



it('renders successfully', function () {
    Livewire::test('pages::evaluator.index')
        ->assertStatus(200);
});



it('verifies that the evaluator page is showing content elements in the right order', function () {
    Livewire::test('pages::evaluator.index')
        ->assertStatus(200)
        ->assertSee(['Dashboard', 'Évaluations', 'détails', 'cellule souhaitée', 'Etudiants à évaluer', 'Action', 'Évaluer']);
});
