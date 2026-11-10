<main class="" id="dashboard-top">
    <x-topbar.topbar>{{__('pages/profil.my_profile')}}</x-topbar.topbar>
    <div class="main-container">

        <div class="split-row">
            <section class="admin-profile admin-profile-buttons">
                <h2 class="sro">
                    {{__('pages/profil.profile')}}
                </h2>
                <div class="change-lang medium border-radius-16 secondary-btn m-b-32">
                    <input type="checkbox" id="lang-switch"
                           class="change-lang--input sro">
                    <label class="change-lang--label" for="lang-switch" itemprop="name">
                        {{__('pages/profil.change_language')}}
                    </label>
                    <div class="text__container">
                        <a href="{{route('pages::profil.index', ['locale' => 'en'])}}" title="{{__('pages/profil.change_language_to_english')}}" class="d-block">{{__('pages/profil.english')}}</a>
                        <a href="{{route('pages::profil.index', ['locale' => 'de'])}}" title="{{__('pages/profil.change_language_to_german')}}" class="d-block">{{__('pages/profil.german')}}</a>
                        <a href="{{route('pages::profil.index', ['locale' => 'fr'])}}" title="{{__('pages/profil.change_language_to_french')}}" class="d-block">{{__('pages/profil.french')}}</a>
                    </div>
                </div>
                <x-buttons.icon-btn href="{{route('pages::profil.edit', ['locale' => app()->getLocale(), 'profil' => $user->id])}}" title="{{__('pages/profil.go_to_change_password')}}" icon="edit" class="primary-btn">
                    {{__('pages/profil.change_password')}}
                </x-buttons.icon-btn>
                <form action="{{route('logout')}}" method="POST"
                      class="text-white admin-logout-button border-radius-16 bold">
                    @csrf
                    <button type="submit">
                        {{__('pages/profil.logout')}}
                    </button>
                </form>
            </section>

            <section class="admin-profile-info small-section ">
                <x-titles.h2>
                    {{__('pages/profil.my_information')}}
                </x-titles.h2>
                <div class="project-information-list ">
                    <dl>
                        {{--<div>
                            <x-lists.definition-term>
                                {{__('pages/profil.profile_img')}}
                            </x-lists.definition-term>
                            <x-lists.definition>
                                {{$user->profile_img}}
                                @if($user->profile_img)
                                    <img src="{{Storage::disk('s3')->url('images/contacts/variants/392x392/'.basename($user->profile_img))}}" --}}{{--{!! asset('storage/images/products/variants/392x392/'.basename($user->profile_img)) !!}"--}}{{-- alt="{{__('pages/profil.profil_img')}}"
                                         class="border-radius-16 profil-img" width="392" height="392">
                                @else
                                    <img src="{!! asset('assets/default/default.jpg') !!}" alt="{{__('pages/profil.profil_img')}}"
                                         class="border-radius-16 profil-img">
                                @endif
                            </x-lists.definition>
                        </div>--}}
                        <div>
                            <x-lists.definition-term>
                                {{__('pages/profil.my_name')}}
                            </x-lists.definition-term>
                            <x-lists.definition>
                                {{$user->first_name}} {{$user->last_name}}
                            </x-lists.definition>
                        </div>
                        <div>
                            <x-lists.definition-term>
                                {{__('pages/profil.email')}}
                            </x-lists.definition-term>
                            <x-lists.definition>
                                {{$user->email}}
                            </x-lists.definition>
                        </div>

                    </dl>
                </div>
            </section>
        </div>
    </div>
</main>
