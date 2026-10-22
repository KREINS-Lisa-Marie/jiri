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
        <x-topbar.topbar>{{__('pages/evaluator.dashboard')}}</x-topbar.topbar>
    <div class="main-container">
        <section>
            <x-titles.h2>{{__('pages/evaluator.evaluations')}}</x-titles.h2>
            <p class="m-b-32">
                {{__('pages/evaluator.modify_info')}}
            </p>
            <table class="table max-w-admin-web table-3">
                <thead>
                <tr>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        {{__('pages/evaluator.students_to_evaluate')}}

                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        {{__('pages/evaluator.evaluations')}}
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')" :direction="$sortField === 'jiri'? $sortDirection : null" class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        {{__('pages/evaluator.action')}}

                    </x-table.table-th>
                </tr>
                </thead>
                <tbody>
                @for($i=0; $i<=6; $i++)
                    <tr class="table-row position-relative">
                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{__('pages/evaluator.students_to_evaluate')}}</span>
                            <span>{{__('pages/evaluator.student_to_evaluate')}}
                            </span>
                            John Doe
                        </x-table.table-td>
                        <x-table.table-td class="table-name fw-medium">
                            <span
                                class="show-web">{{__('pages/evaluator.evaluations')}}</span>

                            <x-fields.select select_name="evaluated"
                                                              label="{{--{{__('admin/orders.for_who')}}<!--Évaluations-->--}}"
                                                              :options="$evaluation_options" wire="user_id">
                            </x-fields.select>
                        </x-table.table-td>
                        <x-table.table-td class="table-state">
                            <span
                                class="show-web">{{__('pages/evaluator.action')}}</span>
                            <a href="" class="table-btn">
                            <span>
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                                     fill="none">
  <path d="M4 13L0.5 14L1.5 10.5L11.5 0.5L14 3L4 13ZM1.5 10.5L4 13M9.5 2.5L12 5" stroke-linecap="round"
        stroke-linejoin="round" stroke="black"/>
</svg>--}}
                            <svg class="evaluate-btn-icon" width="15" height="15">
                            <use href="#evaluate-btn-icon"></use>
                            </svg>
                            </span>
                                <span>
                                {{__('pages/evaluator.evaluate')}}
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
