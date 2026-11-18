<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::dashboard.index')
        ->assertStatus(200);
});

it('verifies that the dashboard page is showing content elements in the right order', function () {
    Livewire::test('pages::dashboard.index')
        ->assertStatus(200)
        ->assertSee(['Dashboard', 'Retour', 'Évaluations', 'cellule souhaitée', 'Mes évaluations', 'Résultats de l’épreuve', 'Contacts', 'Cote', 'Note finale', 'TOTAL', 'Enregistrer' ]);
});
