@php
    $currentexam = null;
    $direction = '';
    $sortable = '';
    $exams = [];
    $sortField = 'name';
    $contacts = [];
@endphp

<main class="" id="dashboard-top">
<x-topbar.topbar>{{__('pages/home.dashboard')}}</x-topbar.topbar>
    <div class="main-container">
        <x-cards.current-exam-card :currentexam="$currentexam">
        </x-cards.current-exam-card>

        <section id="exams" class="m-b-80">

         <x-titles.h2>
             {{__('pages/home.exams')}}
         </x-titles.h2>
            <div class="dashboard-actions-container d-flex flex-row space-between">
                <x-buttons.add-btn>
                    {{__('pages/home.add_exam')}}
                </x-buttons.add-btn>
                <x-inputs.search></x-inputs.search>
            </div>

            <table class="table max-w-admin-web">
                <thead>
                <tr>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        {{__('pages/home.exam')}}
                    </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('date')"  :direction="$sortField === 'date'? $sortDirection : null" class="{{$sortField === 'date'? 'active-sort': ''}}">
                            {{__('pages/home.date')}}
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('duration')"  :direction="$sortField === 'duration'? $sortDirection : null" class="{{$sortField === 'duration'? 'active-sort': ''}}">
                        {{__('pages/home.duration')}}
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('state')"  :direction="$sortField === 'state'? $sortDirection : null" class="{{$sortField === 'state'? 'active-sort': ''}}">
                        {{__('pages/home.state')}}
                    </x-table.table-th>
                </tr>
                </thead>
                <tbody>
                @forelse($contacts as $contact)
                    <tr class="table-row position-relative">
                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{__('pages/home.exam')}}</span>
                            Projets web 2026
                        </x-table.table-td>
                        <x-table.table-td class="table-name fw-medium">
                            <span
                                class="show-web">{{__('pages/home.date')}}</span>
                            24.05.26
                        </x-table.table-td>
                        <x-table.table-td class="table-state">
                            <span
                                class="show-web">{{__('pages/home.duration')}}</span>
                            10-12 et 13-17h
                        </x-table.table-td>
                        <x-table.table-td class="table-species">
                            <span
                                class="show-web">{{__('pages/home.state')}}</span>
                          {{--  <a href="{{route('pages::contacts.show',  ['locale' => __('general.currentLocale'),  'contact' => $contact->id])}}"
                               title="{{__('admin/contacts.go_to_contact')}}" class="card-link">
                            </a>--}}
                            Terminé
                        </x-table.table-td>
                    </tr>
                @empty
                    <tr class="table-row position-relative">
                        <x-table.table-td class="table-full_name">
                            {{__('pages/home.no_result')}}
                        </x-table.table-td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <div class="pagination max-w-admin-web">
                {{--{{ $contacts->links() }}--}}
            </div>
        </section>
        <section id="contacts" class="m-b-80">
            <x-titles.h2>
                {{__('pages/home.contacts')}}
            </x-titles.h2>
            <div class="d-flex flex-row space-between dashboard-actions-container">
                <x-buttons.add-btn>
                    {{__('pages/home.add_contact')}}
                </x-buttons.add-btn>
                <x-inputs.search></x-inputs.search>
            </div>
            <article class="m-b-80">
                <x-titles.h3>
                    {{__('pages/home.available_contacts')}}
                </x-titles.h3>
                <table class="table max-w-admin-web">
                    <thead>
                    <tr>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                            {{__('pages/home.exam')}}
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('date')"  :direction="$sortField === 'date'? $sortDirection : null" class="{{$sortField === 'date'? 'active-sort': ''}}">
                            {{__('pages/home.date')}}
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('duration')"  :direction="$sortField === 'duration'? $sortDirection : null" class="{{$sortField === 'duration'? 'active-sort': ''}}">
                            {{__('pages/home.duration')}}
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('state')"  :direction="$sortField === 'state'? $sortDirection : null" class="{{$sortField === 'state'? 'active-sort': ''}}">
                            {{__('pages/home.state')}}
                        </x-table.table-th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($contacts as $contact)
                        <tr class="table-row position-relative">
                            <x-table.table-td class="table-full_name">
                                <span class="show-web">{{__('pages/home.exam')}}</span>
                                Projets web 2026
                            </x-table.table-td>
                            <x-table.table-td class="table-name fw-medium">
                            <span
                                class="show-web">{{__('pages/home.date')}}</span>
                                24.05.26
                            </x-table.table-td>
                            <x-table.table-td class="table-state">
                            <span
                                class="show-web">{{__('pages/home.duration')}}</span>
                                10-12 et 13-17h
                            </x-table.table-td>
                            <x-table.table-td class="table-species">
                            <span
                                class="show-web">{{__('pages/home.state')}}</span>
                                {{--  <a href="{{route('pages::contacts.show',  ['locale' => __('general.currentLocale'),  'contact' => $contact->id])}}"
                                     title="{{__('admin/contacts.go_to_contact')}}" class="card-link">
                                  </a>--}}
                                Terminé
                            </x-table.table-td>
                        </tr>
                    @empty
                        <tr class="table-row position-relative">
                            <x-table.table-td class="table-full_name">
                                {{--{{__('admin/contacts.no_result')}}--}}
                                {{__('pages/home.no_result')}}
                            </x-table.table-td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div class="pagination max-w-admin-web">
                    {{--{{ $contacts->links() }}--}}
                </div>
            </article>
            <article>
                <div class="d-flex flex-row space-between a-i-center archived-article">
                    <x-titles.h3>
                        {{__('pages/home.not_available_contacts')}}
                    </x-titles.h3>
                    <x-inputs.search></x-inputs.search>
                </div>

                <table class="table max-w-admin-web">
                    <thead>
                    <tr>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                            {{__('pages/home.exam')}}
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('date')"  :direction="$sortField === 'date'? $sortDirection : null" class="{{$sortField === 'date'? 'active-sort': ''}}">
                            {{__('pages/home.date')}}
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('duration')"  :direction="$sortField === 'duration'? $sortDirection : null" class="{{$sortField === 'duration'? 'active-sort': ''}}">
                            {{__('pages/home.duration')}}
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('state')"  :direction="$sortField === 'state'? $sortDirection : null" class="{{$sortField === 'state'? 'active-sort': ''}}">
                            {{__('pages/home.state')}}
                        </x-table.table-th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($contacts as $contact)
                        <tr class="table-row position-relative">
                            <x-table.table-td class="table-full_name">
                                <span class="show-web">{{__('pages/home.exam')}}</span>
                                Projets web 2026
                            </x-table.table-td>
                            <x-table.table-td class="table-name fw-medium">
                            <span
                                class="show-web">{{__('pages/home.date')}}</span>
                                24.05.26
                            </x-table.table-td>
                            <x-table.table-td class="table-state">
                            <span
                                class="show-web">{{__('pages/home.duration')}}</span>
                                10-12 et 13-17h
                            </x-table.table-td>
                            <x-table.table-td class="table-species">
                            <span
                                class="show-web">{{__('pages/home.state')}}</span>
                                {{--  <a href="{{route('pages::contacts.show',  ['locale' => __('general.currentLocale'),  'contact' => $contact->id])}}"
                                     title="{{__('admin/contacts.go_to_contact')}}" class="card-link">
                                  </a>--}}
                                Terminé
                            </x-table.table-td>
                        </tr>
                    @empty
                        <tr class="table-row position-relative">
                            <x-table.table-td class="table-full_name">
                                {{__('pages/home.no_result')}}
                            </x-table.table-td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div class="pagination max-w-admin-web">
                    {{--{{ $contacts->links() }}--}}
                </div>
            </article>
        </section>

        <section id="projects" class="m-b-80">
            <x-titles.h2>
                {{__('pages/home.projects')}}
            </x-titles.h2>
            <div class="d-flex flex-row space-between dashboard-actions-container">
                <x-buttons.add-btn>
                    {{__('pages/home.add_project')}}
                </x-buttons.add-btn>

                <x-inputs.search></x-inputs.search>
            </div>

            <table class="table max-w-admin-web">
                <thead>
                <tr>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        {{__('pages/home.exam')}}
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('date')"  :direction="$sortField === 'date'? $sortDirection : null" class="{{$sortField === 'date'? 'active-sort': ''}}">
                        {{__('pages/home.date')}}
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('duration')"  :direction="$sortField === 'duration'? $sortDirection : null" class="{{$sortField === 'duration'? 'active-sort': ''}}">
                        {{__('pages/home.duration')}}
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('state')"  :direction="$sortField === 'state'? $sortDirection : null" class="{{$sortField === 'state'? 'active-sort': ''}}">
                        {{__('pages/home.state')}}
                    </x-table.table-th>
                </tr>
                </thead>
                <tbody>
                @forelse($contacts as $contact)
                    <tr class="table-row position-relative">
                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{__('pages/home.exam')}}</span>
                            Projets web 2026
                        </x-table.table-td>
                        <x-table.table-td class="table-name fw-medium">
                            <span
                                class="show-web">{{__('pages/home.date')}}</span>
                            24.05.26
                        </x-table.table-td>
                        <x-table.table-td class="table-state">
                            <span
                                class="show-web">{{__('pages/home.duration')}}</span>
                            10-12 et 13-17h
                        </x-table.table-td>
                        <x-table.table-td class="table-species">
                            <span
                                class="show-web">{{__('pages/home.state')}}</span>
                            {{--  <a href="{{route('pages::contacts.show',  ['locale' => __('general.currentLocale'),  'contact' => $contact->id])}}"
                                 title="{{__('admin/contacts.go_to_contact')}}" class="card-link">
                              </a>--}}
                            Terminé
                        </x-table.table-td>
                    </tr>
                @empty
                    <tr class="table-row position-relative">
                        <x-table.table-td class="table-full_name">
                            {{__('pages/home.no_result')}}
                        </x-table.table-td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <div class="pagination max-w-admin-web">
                {{--{{ $contacts->links() }}--}}
            </div>
        </section>
    </div>
</main>

