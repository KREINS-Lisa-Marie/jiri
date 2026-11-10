<?php

use App\Models\User;
use Livewire\Component;

new class extends Component
{
    public User $user;

    public function mount(): void
    {
        $this->user = \Auth::user();
    }

    public function render()  {
        return view('pages.profil.⚡index.index',)->title(__('general.profil'));
    }
};
