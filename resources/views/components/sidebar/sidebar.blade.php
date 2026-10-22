<header class="sidebar sidebar-nav-container">
    <h1 class="sro" role="heading" aria-level="1">
        Jiri
    </h1>
    <nav class="nav__header sidebar-nav" role="navigation" aria-label="Main">
        <div>
            <h2 class="sro" aria-level="2" role="heading">
                {{--Navigation principale--}}
                {{__('navigation.main_navigation')}}
            </h2>

            <a href="{{ route('pages::home.index') }}"
               lang="{{app()->getLocale()}}"
               hreflang="{{app()->getLocale()}}"
               class="logo-link"
               title="{{__('navigation.logo_go_home')}}"
               aria-label="{{__('navigation.logo_go_home')}}">
                <span>
                    <svg class="logo-svg" width="75" height="42">
                    <use href="#logo-svg"></use>
                    </svg>
                </span>
            </a>


            <a href="#dashboard-top" class="sro skip" title="{{__('navigation.go_to_main_content')}}" aria-label="{{__('navigation.go_to_main_content')}}">
                {{--Aller vers le contenu principal--}}
                {{__('navigation.go_to_main_content')}}
            </a>

        </div>
        <input type="checkbox" id="burger_menu" name="burger_menu">
        <label for="burger_menu" class="burger_menu">
            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 2H22" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                <path d="M2 11H22" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                <path d="M2 20H22" stroke="#000" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </label>

        <ul class="flex flex-col sidebar-nav-links nav__container__header l-height-32 medium">
            <li class="nav__item__header">
                <a href="{{route('pages::home.index')}}" class="nav__link__header {{ request()->routeIs('pages::home.index') ? 'active' : '' }}" aria-label="{{__('navigation.go_home')}}" title="{{__('navigation.go_home')}}">
                    <span>
                    <svg class="home-icon"  width="15" height="14">
                    <use href="#home-icon"></use>
                    </svg>
                    </span><span><!--Accueil-->
                    {{__('navigation.homepage')}}</span>
                </a>
            </li>
            <li class="nav__item__header">
                <a href="#exams" class="nav__link__header {{ request()->routeIs('pages::home.index'.'/exams') ? 'active' : '' }}" aria-label="{{__('navigation.go_exams')}}" title="{{__('navigation.go_exams')}}">
                    <span>
                        <span>
                            <svg class="exams-icon"  width="12" height="16">
                            <use href="#exams-icon"></use>
                            </svg>
                        </span>
                    </span><span>{{__('navigation.exams')}}</span>
                </a>
            </li>
            <li class="nav__item__header">
                <a href="#contacts" class="nav__link__header {{ request()->routeIs('/#contacts') ? 'active' : '' }}" aria-label="{{__('admin/sidebar.go_contacts')}}" title="{{__('navigation.go_contacts')}}">
                    <span>
                        <svg class="contacts-icon" width="16" height="16">
                        <use href="#contacts-icon"></use>
                        </svg>
                    </span>
                    <span>{{__('navigation.contacts')}}</span>
                </a>
            </li>
            <li class="">
                <a href="#projects" class="nav__link__header {{ request()->routeIs('pages::home.index'.'/projects') ? 'active' : '' }}" aria-label="{{__('navigation.go_projects')}}" title="{{__('navigation.go_projects')}}">
                    <span>
                        <svg class="projects-icon" width="14" height="17" >
                        <use href="#projects-icon"></use>
                        </svg>
                    </span><span>{{__('navigation.projects')}}</span>
                </a>
            </li>
        </ul>

        <div class="nav__container__header profile-disconnect-link medium">
            <a href="{{route('pages::home.index', ['locale' => __('general.currentLocale')])}}" class="nav__link__header {{ request()->routeIs('pages::products.index') ? 'active' : '' }}" title="{{__('navigation.go_profile')}}" aria-label="{{__('navigation.go_profile')}}">
                <span>
                    <svg class="profile-icon"  width="11" height="12">
                    <use href="#profile-icon"></use>
                    </svg>
                </span><span>{{__('navigation.profile')}}</span>
            </a>
            <form action="{{route('logout')}}" method="POST" class="nav__item__header">
                @csrf
                <button type="submit" class="d-flex flex-row gap-8">
                    <span>
                        <svg class="logout-icon"  width="12" height="12">
                        <use href="#logout-icon"></use>
                        </svg>
                    </span><span>{{__('navigation.logout')}}</span>
                </button>
            </form>
        </div>
    </nav>

</header>
