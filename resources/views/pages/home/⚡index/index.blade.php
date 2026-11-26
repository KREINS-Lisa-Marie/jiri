<main class="" id="dashboard-top">
<x-topbar.topbar>{{__('pages/home.dashboard')}}</x-topbar.topbar>
    <div class="main-container">
        <x-cards.current-exam-card :currentexams="$currentexams">
        </x-cards.current-exam-card>

        <section id="exams" class="m-b-80">

         <x-titles.h2>
             {{__('pages/home.exams')}}
         </x-titles.h2>
            <div class="dashboard-actions-container d-flex flex-row space-between">
                <x-buttons.add-btn icon="add" href="{{route('pages::exams.create',  ['locale' => app()->getLocale()])}}">
                    {{__('pages/home.add_exam')}}
                </x-buttons.add-btn>
                <x-inputs.search model="jiri_search"></x-inputs.search>
            </div>

            <table class="table max-w-admin-web">
                <thead>
                <tr>
                    <x-table.table-th scope="col" sortable wire:click="sortJirisBy('name')" :direction="$sortJiriField === 'name'? $sortJiriDirection : null" class="{{$sortJiriField === 'name'? 'active-sort': ''}}">
                        {{__('pages/home.exam')}}
                    </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortJirisBy('date')"  :direction="$sortJiriField === 'date'? $sortJiriDirection : null" class="{{$sortJiriField === 'date'? 'active-sort': ''}}">
                            {{__('pages/home.date')}}
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable="" direction="" class="">
                        {{__('pages/home.duration')}}
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortJirisBy('state')"  :direction="$sortJiriField === 'state'? $sortJiriDirection : null" class="{{$sortJiriField === 'state'? 'active-sort': ''}}">
                        {{__('pages/home.state')}}
                    </x-table.table-th>
                </tr>
                </thead>
                <tbody>
                @forelse($jiris as $jiri)
                    <tr class="table-row position-relative">
                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{__('pages/home.exam')}}</span>
                            {{$jiri->name}}
                        </x-table.table-td>
                        <x-table.table-td class="table-name fw-medium">
                            <span
                                class="show-web">{{__('pages/home.date')}}</span>
                            {{\Carbon\Carbon::parse($jiri->date)->format('d.m.Y')}}
                        </x-table.table-td>
                        <x-table.table-td class="table-state">
                            <span
                                class="show-web">{{__('pages/home.duration')}}</span>
                            {{$jiri->time}}
                        </x-table.table-td>
                        <x-table.table-td class="table-species">
                            <span
                                class="show-web">{{__('pages/home.state')}}</span>
                            {{$jiri->state ? __('pages/home.jiri_state_activ') : __('pages/home.jiri_state_not_activ')}}
                            <a href="{{route('pages::exams.show',  ['locale' => app()->getLocale(),  'jiri' => $jiri->id])}}" title="{{__('pages/home.go_to_current_exam')}}" class="card-link">
                            </a>
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
                {{ $jiris->links() }}
            </div>
        </section>
        <section id="contacts" class="m-b-80">
            <x-titles.h2>
                {{__('pages/home.contacts')}}
            </x-titles.h2>
            <div class="d-flex flex-row space-between dashboard-actions-container">
                <x-buttons.add-btn wire:click="openContactModal()" title="{{__('pages/home.add_contact')}}" icon="add">
                    {{__('pages/home.add_contact')}}
                </x-buttons.add-btn>
                <x-inputs.search model="contact_search"></x-inputs.search>
            </div>
            <article class="m-b-80">
                <x-titles.h3>
                    {{__('pages/home.available_contacts')}}
                </x-titles.h3>
                <table class="table max-w-admin-web">
                    <thead>
                    <tr>
                        <x-table.table-th scope="col" sortable="" direction="" class="">
                            {{__('pages/home.contact_image')}}
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortContactsBy('last_name')"  :direction="$sortContactField === 'last_name'? $sortContactDirection : null" class="{{$sortContactField === 'last_name'? 'active-sort': ''}}">
                            {{__('pages/home.contact_name')}}
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortContactsBy('email')"  :direction="$sortContactField === 'email'? $sortContactDirection : null" class="{{$sortContactField === 'email'? 'active-sort': ''}}">
                            {{__('pages/home.contact_email')}}
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable="" direction="" class="">
                            {{__('pages/home.actions')}}
                        </x-table.table-th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($available_contacts as $available_contact)
                        <tr class="table-row position-relative">
                            <x-table.table-td class="table-full_name">
                                <span class="show-web">{{__('pages/home.contact_image')}}</span>

                                @if($available_contact->profile_img)
                                    <img src="{{Storage::disk('s3')->url('images/products/variants/288x288/'.basename($available_contact->profile_img))}}"
                                         {{--{!! asset('storage/images/products/variants/288x288/'.basename($product->product_image)) !!}"--}} alt="{{__('admin/products.the_product_image')}}"
                                         class=" small_contact-img">
                                @else
                                    <img src="{!! asset('assets/default/default.jpg') !!}" alt="{{__('pages/home.contact_img')}}"
                                         class=" small_contact-img">
                                @endif
                            </x-table.table-td>
                            <x-table.table-td class="table-name fw-medium">
                            <span class="show-web">{{__('pages/home.contact_name')}}</span>
                                {{$available_contact->last_name}} {{$available_contact->first_name}}

                            </x-table.table-td>
                            <x-table.table-td class="table-state">
                            <span class="show-web">{{__('pages/home.email')}}</span>
                                {{$available_contact->email}}
                            </x-table.table-td>
                            <x-table.table-td class="table-species ">
                            <span class="show-web">{{__('pages/home.actions')}}</span>
                                <div class="d-flex flex-row gap-12 wrap">
                                    <x-buttons.icon-btn icon="archive" class="eye-btn" wire:click="archiveContact('{{ $available_contact->id }}')" title="{{__('pages/home.archive')}}">
                                        {{__('pages/home.archive')}}
                                    </x-buttons.icon-btn>
                                    <x-buttons.icon-btn icon="edit" class="primary-btn" wire:click="openContactModal('{{ $available_contact->id }}')" title="{{__('pages/home.edit_contact')}}">
                                        {{__('pages/home.edit')}}
                                    </x-buttons.icon-btn>
                                </div>
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
                    {{ $available_contacts->links() }}
                </div>
            </article>
            <article>
                <div class="d-flex flex-row space-between a-i-center archived-article">
                    <x-titles.h3>
                        {{__('pages/home.not_available_contacts')}}
                    </x-titles.h3>
                    <x-inputs.search model="contact_search"></x-inputs.search>
                </div>

                <table class="table max-w-admin-web">
                    <thead>
                    <tr>
                        <x-table.table-th scope="col" sortable="" direction="" class="">
                            {{__('pages/home.contact_image')}}
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortContactsBy('last_name')"  :direction="$sortContactField === 'last_name'? $sortContactDirection : null" class="{{$sortContactField === 'last_name'? 'active-sort': ''}}">
                            {{__('pages/home.contact_name')}}
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable wire:click="sortContactsBy('email')"  :direction="$sortContactField === 'email'? $sortContactDirection : null" class="{{$sortContactField === 'email'? 'active-sort': ''}}">
                            {{__('pages/home.contact_email')}}
                        </x-table.table-th>
                        <x-table.table-th scope="col" sortable="" direction="" class="">
                            {{__('pages/home.actions')}}
                        </x-table.table-th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($archived_contacts as $archived_contact)
                        <tr class="table-row position-relative">
                            <x-table.table-td class="table-full_name">
                                <span class="show-web">{{__('pages/home.contact_image')}}</span>
                                @if($archived_contact->profile_img)
                                    <img src="{{Storage::disk('s3')->url('images/products/variants/288x288/'.basename($archived_contact->profile_img))}}"
                                         {{--{!! asset('storage/images/products/variants/288x288/'.basename($product->product_image)) !!}"--}} alt="{{__('admin/products.the_product_image')}}"
                                         class=" small_contact-img">
                                @else
                                    <img src="{!! asset('assets/default/default.jpg') !!}" alt="{{__('pages/home.contact_img')}}"
                                         class=" small_contact-img">
                                @endif
                            </x-table.table-td>
                            <x-table.table-td class="table-name fw-medium">
                            <span
                                class="show-web">{{__('pages/home.contact_name')}}</span>
                                {{$archived_contact->last_name}} {{$archived_contact->first_name}}
                            </x-table.table-td>
                            <x-table.table-td class="table-state">
                            <span
                                class="show-web">{{__('pages/home.contact_email')}}</span>
                                {{$archived_contact->email}}
                            </x-table.table-td>
                            <x-table.table-td class="table-species">
                            <span
                                class="show-web">{{__('pages/home.actions')}}</span>
                                <div class="d-flex flex-row gap-12 wrap">
                                    <x-buttons.icon-btn icon="disarchive" class="eye-btn" wire:click="disarchiveContact('{{ $archived_contact->id}}')" title="{{__('pages/home.disarchive')}}">
                                        {{__('pages/home.disarchive')}}
                                    </x-buttons.icon-btn>
                                    <x-buttons.icon-btn icon="edit" class="primary-btn"
                                                        wire:click="openContactModal('{{ $archived_contact->id }}')"
                                                        title="{{__('pages/home.edit_contact')}}">
                                        {{__('pages/home.edit')}}
                                    </x-buttons.icon-btn>
                                </div>
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
                    {{ $archived_contacts->links() }}
                </div>
            </article>
        </section>

        <section id="projects" class="m-b-80">
            <x-titles.h2>
                {{__('pages/home.projects')}}
            </x-titles.h2>
            <div class="d-flex flex-row space-between dashboard-actions-container">
                <x-buttons.add-btn wire:click="openProjectCreateModal" title="{{__('pages/home.add_project')}}" icon="add">
                    {{__('pages/home.add_project')}}
                </x-buttons.add-btn>

                <x-inputs.search model="project_search"></x-inputs.search>
            </div>

            <table class="table max-w-admin-web">
                <thead>
                <tr>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('name')" :direction="$sortField === 'name'? $sortDirection : null" class="{{$sortField === 'name'? 'active-sort': ''}}">
                        {{__('pages/home.project_name')}}
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('state')"  :direction="$sortField === 'state'? $sortDirection : null" class="{{$sortField === 'state'? 'active-sort': ''}}">
                        {{__('pages/home.project_state')}}
                    </x-table.table-th>
                    <x-table.table-th scope="col"  direction="" sortable="" class="">
                        {{__('pages/home.project_specifications')}}
                    </x-table.table-th>
                    <x-table.table-th scope="col" class="" direction="" sortable="">
                            {{__('pages/home.action')}}
                    </x-table.table-th>
                </tr>
                </thead>
                <tbody>
                @forelse($projects as $project)
                    <tr class="table-row position-relative">
                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{__('pages/home.project_name')}}</span>
                            {{$project->name}}
                        </x-table.table-td>
                        <x-table.table-td class="table-name fw-medium">
                            <span
                                class="show-web">{{__('pages/home.project_state')}}</span>
                            {{$project->state}}
                        </x-table.table-td>
                        <x-table.table-td class="table-state">
                            <span
                                class="show-web">{{__('pages/home.project_specifications')}}</span>

                            <x-buttons.icon-btn class="eye-btn" href="{{$project->specifications}}" icon="eye">Voir</x-buttons.icon-btn>
                        </x-table.table-td>
                        <x-table.table-td class="table-species">
                            <span
                                class="show-web">{{__('pages/home.action')}}</span>
                            <x-buttons.icon-btn icon="edit" class="primary-btn" wire:click="openProjectUpdateModal('{{ $project->id }}')" title="{{__('pages/home.edit_project')}}" >
                                {{__('pages/home.edit')}}
                            </x-buttons.icon-btn>
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
                {{ $projects->links() }}
            </div>
        </section>

        {{--        Contact     --}}
        @if($isopenContactModal)
                <x-modals.contact.contact-update-modal :success-message="$successMessage"/>
        @endif

        {{--        Project     --}}
        @if($isopenProjectUpdateModal)
                <x-modals.project-update-modal :project-information="$project_information" :project-success-message="$projectSuccessMessage"/>
        @endif
        @if($isopenProjectCreateModal)
                <x-modals.project-create-modal :project-success-message="$projectSuccessMessage"/>
        @endif
    </div>
</main>

