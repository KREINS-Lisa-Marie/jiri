@php
    $currentexam = '';
    $direction = '';
    $sortable = '';
    $exams = [];
@endphp

<main class="main-content" id="dashboard-top">
    <x-topbar.topbar>{{__('pages/exams.evaluation_details')}}</x-topbar.topbar>
    <div class="main-container">
        <section>
            <div class="exam-container m-b-32">
                <x-titles.h2>
                    {{__('pages/exams.evaluation')}}
                </x-titles.h2>
                <dl class="d-flex flex-row wrap gap-32 space-between a-i-center">
                    <div>
                        <x-lists.definition-term>
                            {{__('pages/exams.evaluation_name')}}
                        </x-lists.definition-term>
                        <x-lists.definition>
                            Projet web 2026 - 2027
                        </x-lists.definition>
                    </div>

                    <div>
                        <x-lists.definition-term>
                            {{__('pages/exams.date')}}
                        </x-lists.definition-term>
                        <x-lists.definition>
                            12.08.26
                        </x-lists.definition>
                    </div>

                    <div>
                        <x-lists.definition-term>
                            {{__('pages/exams.time')}}
                        </x-lists.definition-term>
                        <x-lists.definition>
                            13h00 - 17h00
                        </x-lists.definition>
                    </div>

                    <div class="btn-dd">
                        <x-lists.definition-term>
                            {{__('pages/exams.state')}}
                        </x-lists.definition-term>
                        <x-lists.definition>
                            <x-buttons.btn-btn class="" wire="">
                                Non terminé {{--Terminé--}}
                            </x-buttons.btn-btn>
                        </x-lists.definition>
                    </div>
                </dl>

                <x-buttons.simple-pirmary-btn>
                    {{__('pages/exams.edit_details')}}
                </x-buttons.simple-pirmary-btn>
            </div>
        </section>

        <section class="exam-container m-b-32">
            <x-titles.h2>
                {{__('pages/exams.contacts')}}
            </x-titles.h2>
            <div class="d-flex flex-row gap-32 wrap m-b-32" >
                <div class="evaluator-container container-left">
                    <x-titles.h3>
                        {{__('pages/exams.evaluator')}}
                    </x-titles.h3>
                    <ul class="two-columns contacts-grid">
                        @for($i=0; $i<=5; $i++)
                        <li class="d-flex flex-row space-between a-i-center">
                            <p>
                                Jane Mitchell
                            </p>
                            <div class="d-flex flex-row gap-4 wrap a-i-center">
                                   <span class="trash-btn">
                                    <svg class="trash-icon" width="18" height="18">
                                    <use href="#trash-icon"></use>
                                    </svg>
                                   </span>
                                <span class="direction-switch-btn">
                                <svg class="right-arrow-icon" width="17" height="15">
                                <use href="#right-arrow-icon"></use>
                                </svg>
                                </span>
                            </div>
                        </li>
                        @endfor
                    </ul>
                </div>
                <div class="student-container container-right">
                    <x-titles.h3>
                        {{__('pages/exams.student')}}
                    </x-titles.h3>

                    <ul class="two-columns contacts-grid">
                        @for($i=0; $i<=5; $i++)
                            <li class="d-flex flex-row space-between a-i-center">
                                <p>
                                    Jane Mitchell
                                </p>
                                <div class="d-flex flex-row gap-4 wrap a-i-center">
                                   <span class="trash-btn">
                                    <svg class="trash-icon" width="18" height="18">
                                    <use href="#trash-icon"></use>
                                    </svg>
                                   </span>
                                    <span class="direction-switch-btn">
                                    <svg class="left-arrow-icon" width="17" height="15">
                                    <use href="#left-arrow-icon"></use>
                                    </svg>
                                </span>

                                </div>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>

            <x-buttons.btn-btn class="medium contacts-show-btn" wire="">
                {{__('pages/exams.edit_contacts')}}
            </x-buttons.btn-btn>
        </section>

        <section class="exam-container m-b-32">
            <x-titles.h2>
                {{__('pages/exams.projects')}}
            </x-titles.h2>

            <ul>
                @for($k=0; $k<=4; $k++)
                <li class="project-items">
                    <p class="d-flex flex-row  a-i-center gap-24 m-b-8 italic">
                        CV
                        <span class="trash-btn">
                           <svg class="trash-icon" width="18" height="18">
                           <use href="#trash-icon"></use>
                           </svg>
                        </span>
                    </p>
                    <div class="two-columns">
                        <div class="m-l-12">
                            <p class="m-b-12 medium">
                                {{__('pages/exams.criterias')}}
                            </p>
                            <ul class="d-flex flex-row wrap criteria-list gap-8 m-b-32">
                                @for($i =0; $i<4; $i++)
                                    <li >
                                        <div class="d-flex gap-4 flex-row a-i-center">
                                        <x-fields.text-no-label name="criteria" id="criteria" value="" placeholder="Headingsmap" wire="criteria">
                                            {{__('pages/exams.criteria')}}
                                        </x-fields.text-no-label>

                                            <span class="trash-btn">
                                            <svg class="trash-icon" width="18" height="18">
                                            <use href="#trash-icon"></use>
                                            </svg>
                                    </span>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>

                        <dl>
                            <x-lists.definition-term>
                                {{__('pages/exams.weighting')}}
                            </x-lists.definition-term>
                            <x-lists.definition>
                                30%
                            </x-lists.definition>
                        </dl>
                    </div>

                </li>
                @endfor
            </ul>
            <x-buttons.simple-pirmary-btn>
                {{__('pages/exams.edit_projects')}}
            </x-buttons.simple-pirmary-btn>

        </section>
        <div class="btn-container">
            <x-buttons.simple-pirmary-btn>
                {{__('pages/exams.see_dashboard')}}
            </x-buttons.simple-pirmary-btn>
        </div>
    </div>
</main>

