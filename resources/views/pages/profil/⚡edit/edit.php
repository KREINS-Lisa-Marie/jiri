<?php

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;


new class extends Component
{
    use PasswordValidationRules;

    public User $user;
    public string $password = '';
    public string $password_confirmation = '';

    public function mount(User $user): void
    {
        $this->user = \Auth::user();
    }

    public function save(): void
    {
        if ($this->password == '' || $this->password == ' '){
            $this->addError('not_good_password', __('pages/profil.password_not_empty'));
            return;
        }

        $validated_data = $this->validate([
            'password'=>$this->updatePasswordRules(),
        ]);

        $this->user->update([
            'password'=>Hash::make($validated_data['password']),
        ]);

        $this->redirect(route('pages::profil.index', ['locale' => app()->getLocale()]));
    }

    public function render()  {
        return view('pages.profil.⚡edit.edit')->title(__('general.profile_edit'));
    }
};
