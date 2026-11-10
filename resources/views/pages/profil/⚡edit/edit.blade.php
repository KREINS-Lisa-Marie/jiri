<main class="profile-edit" id="dashboard-top">
    <x-topbar.topbar>
        {{__('pages/profil.change_my_password')}}
    </x-topbar.topbar>

    <div class="main-container">
        <section>
            <h2 class="sro">
                {{__('pages/profil.my_password')}}
            </h2>
            <form wire:submit.prevent="save"
                  class=" d-flex flex-c gap-32">
                @csrf
                <fieldset class="formfield">
                    <div class="d-flex flex-row flex-end a-i-center m-b-32">

                    <p class="caption">
                        {{__('pages/exams.mandatory_fields')}}
                    </p>
                    </div>
                    <div class="fields-container">
                        <div class="">
                            <x-auth.form.password wire="password" name="user_password" id="user_password" value="" placeholder="{{__('pages/profil.enter_a_password')}}" class="">
                                {{__('pages/profil.user_password')}}
                            </x-auth.form.password>
                            @error('not_good_password')
                            <p class="error m-t-16">
                                {{__('pages/profil.password_not_empty')}}
                            </p>
                            @enderror
                        </div>

                        <div class="">
                            <x-auth.form.password-confirmation wire="password_confirmation" name="user_password_confirmation" id="user_password_confirmation" value="" placeholder="{{__('pages/profil.reenter_a_password')}}" class="">
                                {{__('pages/profil.user_password_confirmation')}}
                            </x-auth.form.password-confirmation>
                        </div>
                    </div>
                </fieldset>
                <x-buttons.submit-btn class="primary-btn">
                    {{__('pages/profil.save')}}
                </x-buttons.submit-btn>
            </form>

        </section>
    </div>
</main>
