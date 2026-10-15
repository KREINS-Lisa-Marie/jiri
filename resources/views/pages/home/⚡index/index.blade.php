@php
    $currentexam = null;
    $direction = '';
    $sortable = '';
    $exams = [];
    $sortField = 'name';
    $contacts = [];
@endphp

<main class="" id="dashboard-top">
<x-topbar.topbar>Dashboard</x-topbar.topbar>
    <div class="main-container">
        <x-cards.current-exam-card :currentexam="$currentexam">
        </x-cards.current-exam-card>

        <section id="exams" class="m-b-80">

         <x-titles.h2>
             Épreuves
         </x-titles.h2>
            <div class="dashboard-actions-container d-flex flex-row space-between">
                <x-buttons.add-btn>
                    Ajouter une épreuve
                </x-buttons.add-btn>
                <x-inputs.search></x-inputs.search>
            </div>

            <table class="table max-w-admin-web">
                <thead>
                <tr>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        Épreuve
                    </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('date')"  :direction="$sortField === 'date'? $sortDirection : null" class="{{$sortField === 'date'? 'active-sort': ''}}">
                            Date
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('duration')"  :direction="$sortField === 'duration'? $sortDirection : null" class="{{$sortField === 'duration'? 'active-sort': ''}}">
                        Durée
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('state')"  :direction="$sortField === 'state'? $sortDirection : null" class="{{$sortField === 'state'? 'active-sort': ''}}">
                        Statut
                    </x-table.table-th>
                </tr>
                </thead>
                <tbody>
                @forelse($contacts as $contact)
                    <tr class="table-row position-relative">
                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Épreuve</span>
                            Projets web 2026
                        </x-table.table-td>
                        <x-table.table-td class="table-name fw-medium">
                            <span
                                class="show-web">{{--{{__('admin/contacts.email_title')}}--}}Date</span>
                            24.05.26
                        </x-table.table-td>
                        <x-table.table-td class="table-state">
                            <span
                                class="show-web">{{--{{__('admin/contacts.phone_number_title')}}--}}Durée</span>
                            10-12 et 13-17h
                        </x-table.table-td>
                        <x-table.table-td class="table-species">
                            <span
                                class="show-web">Statut</span>
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
                            Pas de résultat
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
                Contacts
            </x-titles.h2>
            <div class="d-flex flex-row space-between dashboard-actions-container">
                <x-buttons.add-btn>
                    Ajouter un contact
                </x-buttons.add-btn>
                <x-inputs.search></x-inputs.search>
            </div>
            <article class="m-b-80">
                <x-titles.h3>
                    Contacts disponibles
                </x-titles.h3>
                <table class="table max-w-admin-web">
                    <thead>
                    <tr>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                            Épreuve
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('date')"  :direction="$sortField === 'date'? $sortDirection : null" class="{{$sortField === 'date'? 'active-sort': ''}}">
                            Date
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('duration')"  :direction="$sortField === 'duration'? $sortDirection : null" class="{{$sortField === 'duration'? 'active-sort': ''}}">
                            Durée
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('state')"  :direction="$sortField === 'state'? $sortDirection : null" class="{{$sortField === 'state'? 'active-sort': ''}}">
                            Statut
                        </x-table.table-th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($contacts as $contact)
                        <tr class="table-row position-relative">
                            <x-table.table-td class="table-full_name">
                                <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Épreuve</span>
                                Projets web 2026
                            </x-table.table-td>
                            <x-table.table-td class="table-name fw-medium">
                            <span
                                class="show-web">{{--{{__('admin/contacts.email_title')}}--}}Date</span>
                                24.05.26
                            </x-table.table-td>
                            <x-table.table-td class="table-state">
                            <span
                                class="show-web">{{--{{__('admin/contacts.phone_number_title')}}--}}Durée</span>
                                10-12 et 13-17h
                            </x-table.table-td>
                            <x-table.table-td class="table-species">
                            <span
                                class="show-web">Statut</span>
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
                                Pas de résultat
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
                        Contacts indisponibles
                    </x-titles.h3>
                    <x-inputs.search></x-inputs.search>
                </div>

                <table class="table max-w-admin-web">
                    <thead>
                    <tr>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                            Épreuve
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('date')"  :direction="$sortField === 'date'? $sortDirection : null" class="{{$sortField === 'date'? 'active-sort': ''}}">
                            Date
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('duration')"  :direction="$sortField === 'duration'? $sortDirection : null" class="{{$sortField === 'duration'? 'active-sort': ''}}">
                            Durée
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortBy('state')"  :direction="$sortField === 'state'? $sortDirection : null" class="{{$sortField === 'state'? 'active-sort': ''}}">
                            Statut
                        </x-table.table-th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($contacts as $contact)
                        <tr class="table-row position-relative">
                            <x-table.table-td class="table-full_name">
                                <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Épreuve</span>
                                Projets web 2026
                            </x-table.table-td>
                            <x-table.table-td class="table-name fw-medium">
                            <span
                                class="show-web">{{--{{__('admin/contacts.email_title')}}--}}Date</span>
                                24.05.26
                            </x-table.table-td>
                            <x-table.table-td class="table-state">
                            <span
                                class="show-web">{{--{{__('admin/contacts.phone_number_title')}}--}}Durée</span>
                                10-12 et 13-17h
                            </x-table.table-td>
                            <x-table.table-td class="table-species">
                            <span
                                class="show-web">Statut</span>
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
                                Pas de résultat
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
                Projets
            </x-titles.h2>
            <div class="d-flex flex-row space-between dashboard-actions-container">
                <x-buttons.add-btn>
                    Ajouter un projet
                </x-buttons.add-btn>

                <x-inputs.search></x-inputs.search>
            </div>

            <table class="table max-w-admin-web">
                <thead>
                <tr>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        Épreuve
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('date')"  :direction="$sortField === 'date'? $sortDirection : null" class="{{$sortField === 'date'? 'active-sort': ''}}">
                        Date
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('duration')"  :direction="$sortField === 'duration'? $sortDirection : null" class="{{$sortField === 'duration'? 'active-sort': ''}}">
                        Durée
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('state')"  :direction="$sortField === 'state'? $sortDirection : null" class="{{$sortField === 'state'? 'active-sort': ''}}">
                        Statut
                    </x-table.table-th>
                </tr>
                </thead>
                <tbody>
                @forelse($contacts as $contact)
                    <tr class="table-row position-relative">
                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Épreuve</span>
                            Projets web 2026
                        </x-table.table-td>
                        <x-table.table-td class="table-name fw-medium">
                            <span
                                class="show-web">{{--{{__('admin/contacts.email_title')}}--}}Date</span>
                            24.05.26
                        </x-table.table-td>
                        <x-table.table-td class="table-state">
                            <span
                                class="show-web">{{--{{__('admin/contacts.phone_number_title')}}--}}Durée</span>
                            10-12 et 13-17h
                        </x-table.table-td>
                        <x-table.table-td class="table-species">
                            <span
                                class="show-web">Statut</span>
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
                            Pas de résultat
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

