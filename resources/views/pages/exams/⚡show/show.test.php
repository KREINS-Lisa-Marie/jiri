<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('pages::dashboar.index')
        ->assertStatus(200);
});
