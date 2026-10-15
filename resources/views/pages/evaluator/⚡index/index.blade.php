@php
    $currentexam = null;
    $direction = '';
    $sortable = '';
    $exams = [];
    $sortField = 'name';
    $contacts = [];
    $evaluation_options = [
               [
                    'name' => "Non-évalué",
                    'value' => false,
                ],
                [
                    'name' => "Évalué",
                    'value' => true,
                ],
]
@endphp
<main class="" id="dashboard-top">
        <x-topbar.topbar>Dashboard</x-topbar.topbar>
    <div class="main-container">
        <section>
            <x-titles.h2>Évaluations</x-titles.h2>
            <p class="m-b-32">
                Pour modifier les détails d’une évaluation, cliquez sur la cellule souhaitée
            </p>
            <table class="table max-w-admin-web table-3">
                <thead>
                <tr>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        Etudiants à évaluer
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        Evaluations
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        Action
                    </x-table.table-th>
                </tr>
                </thead>
                <tbody>
                @for($i=0; $i<=6; $i++)
                    <tr class="table-row position-relative">
                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Étudiants à évaluer</span>
                            <span>
                                Évalué
                            </span>
                            John Doe
                        </x-table.table-td>
                        <x-table.table-td class="table-name fw-medium">
                            <span
                                class="show-web">{{--{{__('admin/contacts.email_title')}}--}}Évaluations</span>

                            <x-fields.select select_name="evaluated"
                                                              label="{{--{{__('admin/orders.for_who')}}<!--Évaluations-->--}}"
                                                              :options="$evaluation_options" wire="user_id">
                            </x-fields.select>
                        </x-table.table-td>
                        <x-table.table-td class="table-state">
                            <span
                                class="show-web">{{--{{__('admin/contacts.phone_number_title')}}--}}Action</span>
                            <a href="" class="table-btn">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                                     fill="none">
  <path d="M4 13L0.5 14L1.5 10.5L11.5 0.5L14 3L4 13ZM1.5 10.5L4 13M9.5 2.5L12 5" stroke-linecap="round"
        stroke-linejoin="round" stroke="black"/>
</svg>
                            </span>
                                <span>
                                Évaluer
                            </span>
                            </a>
                        </x-table.table-td>

                    </tr>
                @endfor
                </tbody>
            </table>


        </section>
    </div>
</main>
