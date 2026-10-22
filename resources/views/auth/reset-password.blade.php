<x-layouts::app>
{{--    <header>
        <h1 class="sro" role="heading" aria-level="1" data-element-id="headingsMap-0-0">
            --}}{{--{{__('auth/reset_password.powerbase')}}--}}{{--
            Réinitialiser le mot de passe
        </h1>
    </header>--}}
    <main class="main-content" id="dashboard-top">
        <section class="login-section">
            <div class="login-container">
                <div class="d-flex flex-cr">
                    <x-titles.h2>
                        {{__('auth/reset_password.reset_password')}}
                    </x-titles.h2>

                    <a href="{{ route('pages::dashboard.index', ['locale' => __('general.currentLocale')]) }}"
                       lang="{{app()->getLocale()}}"
                       hreflang="{{app()->getLocale()}}"
                       class="logo-link d-flex flex-a-i-center auth-logo"
                       title="{{__('navigation.logo_go_home')}}"
                       aria-label="{{__('navigation.go_home')}}">
                        <svg width="111" height="62" viewBox="0 0 111 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M30.8984 28.6758C31.4323 29.6133 31.8294 30.5898 32.0898 31.6055C32.3503 32.6211 32.487 33.6693 32.5 34.75V36.7617L20 43.0312L7.5 36.7617C7.5 35.9805 7.50651 35.2513 7.51953 34.5742C7.53255 33.8971 7.59115 33.2396 7.69531 32.6016C7.79948 31.9635 7.95573 31.3255 8.16406 30.6875C8.3724 30.0495 8.6849 29.3789 9.10156 28.6758L5 26.625V38.0898C5.3776 38.2201 5.71615 38.4023 6.01562 38.6367C6.3151 38.8711 6.58203 39.1445 6.81641 39.457C7.05078 39.7695 7.22005 40.1081 7.32422 40.4727C7.42839 40.8372 7.48698 41.2214 7.5 41.625V47.875H0V41.625C0 41.2344 0.0585938 40.8568 0.175781 40.4922C0.292969 40.1276 0.46224 39.7826 0.683594 39.457C0.904948 39.1315 1.16536 38.8581 1.46484 38.6367C1.76432 38.4154 2.10938 38.2331 2.5 38.0898V25.375L0 24.125L20 14.125L40 24.125L30.8984 28.6758ZM5 41.625C5 41.2865 4.8763 40.9935 4.62891 40.7461C4.38151 40.4987 4.08854 40.375 3.75 40.375C3.41146 40.375 3.11849 40.4987 2.87109 40.7461C2.6237 40.9935 2.5 41.2865 2.5 41.625V45.375H5V41.625ZM5.58594 24.125L20 31.332L34.4141 24.125L20 16.918L5.58594 24.125ZM30 35.2188C30 34.2161 29.9023 33.2852 29.707 32.4258C29.5117 31.5664 29.1667 30.6875 28.6719 29.7891L20 34.125L11.3281 29.7891C10.8984 30.5443 10.5729 31.3385 10.3516 32.1719C10.1302 33.0052 10.013 33.8646 10 34.75V35.2188L20 40.2188L30 35.2188Z"
                                fill="black"/>
                            <path
                                d="M46.16 48.048V42.816C47.568 42.72 48.944 42.48 50.288 42.096C51.632 41.712 52.848 41.12 53.936 40.32C55.056 39.52 55.936 38.448 56.576 37.104C57.248 35.728 57.584 34.016 57.584 31.968V14.4H63.152V32.016C63.056 34.96 62.496 37.44 61.472 39.456C60.48 41.44 59.168 43.056 57.536 44.304C55.904 45.52 54.096 46.416 52.112 46.992C50.16 47.568 48.176 47.92 46.16 48.048ZM68.9705 17.04V11.808H74.2025V17.04H68.9705ZM68.9225 48V22.32H74.2985V48H68.9225ZM80.9203 48V35.76C80.9203 32.976 81.3843 30.704 82.3123 28.944C83.2723 27.184 84.5363 25.824 86.1043 24.864C87.6723 23.872 89.4003 23.168 91.2883 22.752C93.2083 22.304 95.1123 22.016 97.0003 21.888V26.832C95.6883 26.928 94.3923 27.104 93.1123 27.36C91.8323 27.584 90.6643 27.984 89.6083 28.56C88.5843 29.136 87.7523 30 87.1123 31.152C86.5043 32.304 86.2003 33.856 86.2003 35.808V48H80.9203ZM101.361 17.04V11.808H106.593V17.04H101.361ZM101.313 48V22.32H106.689V48H101.313Z"
                                fill="black"/>
                        </svg>
                    </a>
                </div>
                <form action="{{route('password.update')}}" method="post" class="login-form reset-form">
                    @csrf
                    <input type="hidden" name="token" value="{{ request('token') }}">
                    <x-auth.form.email-input></x-auth.form.email-input>
                    <div class="text-field d-flex flex-col m-t-20">
                        <label for="password" class="field__label">
                            {{__('auth/login.password')}}
                        </label>
                        @error('password')
                        <p class="error">
                            {{$message}}
                        </p>
                        @enderror
                        <input type="password" id="password" name="password" class="field__input"
                               value="{{old('password')}}" aria-required="true" placeholder="{{__('auth/login.enter_password')}}">
                    </div>
                    <div class="text-field d-flex flex-col m-t-20 m-b-32">
                        <label for="password_confirmation" class="field__label">
                            {{__('auth/reset_password.rewrite_password')}}
                        </label>
                        @error('password_confirmation')
                        <p class="error">
                            {{$message}}
                        </p>
                        @enderror
                        <input type="password" id="password_confirmation" name="password_confirmation" class="field__input" value="" aria-required="true" placeholder="{{__('auth/reset_password.rewrite_password')}}">
                    </div>

                    <x-auth.form.submit-button>
                        {{__('auth/forgot_password.reset')}}
                    </x-auth.form.submit-button>
                </form>


                @if (session('status'))
                    <div class="">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </section>
    </main>
</x-layouts::app>
