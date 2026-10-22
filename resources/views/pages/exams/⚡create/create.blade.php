@php
    $currentexam = '';
    $direction = '';
    $sortable = '';
    $exams = [];
@endphp

<main class="main-content" id="dashboard-top">
    <x-topbar.topbar>{{__('pages/exams.create_evaluation')}}</x-topbar.topbar>
    <div class="main-container">

    <form action="" class="create-form">
        <fieldset class="formfield m-b-32">
            <div class="d-flex flex-row wrap space-between a-i-center">
                <legend class="h2-title bold">
                    {{__('pages/exams.evaluation')}}
                </legend>
                <p class="caption">
                    {{__('pages/exams.mandatory_fields')}}
                </p>
            </div>

            <div class="fields-container">
                <x-fields.text name="exam-name" id="exam-name" wire="exam-name" placeholder="CV" value="">
                    {{__('pages/exams.exam_name')}}
                </x-fields.text>
                <x-fields.date>
                    {{__('pages/exams.date_mandatory')}}
                </x-fields.date>
                <x-fields.text name="exam-time" id="exam-time" wire="exam-time" placeholder="08-12 et 12-17h" value="">
                    {{__('pages/exams.time_mandatory')}}
                </x-fields.text>
            </div>

        </fieldset>

        <fieldset class="formfield m-b-32">
            <div class="d-flex flex-row wrap space-between a-i-center">
                <legend class="h2-title bold">
                    {{__('pages/exams.contacts')}}
                </legend>
                <p class="caption">
                    {{__('pages/exams.mandatory_fields')}}
                </p>
            </div>

            <div class="d-flex flex-row gap-32 wrap">
                <div class="container-left">
                    <p class="m-b-20">
                        {{__('pages/exams.contact_info')}}
                    </p>
                    <div class="fields-container">
                        <div class="search">
                            <x-fields.show-search>
                                {{__('pages/exams.evaluator_mandatory')}}
                            </x-fields.show-search>
                   {{--         <div>
                                <label for="exam-name">
                                    Évaluateurs*
                                </label>
                                --}}{{--SEARCH--}}{{--
                            </div>
                            <div>
                                    <!--....-->
                            </div>--}}
                        </div>
                        <div>
                            <p class="medium m-b-16">
                                {{__('pages/exams.selected_evaluators')}}
                            </p>
                            <ul class="d-flex flex-c gap-12">
                                <li class="d-flex flex-row space-between a-i-center">
                                    <span>
                                        John Doe
                                    </span>
                                    <span class="trash-btn">
                                    <svg class="trash-icon" width="18" height="18">
                                    <use href="#trash-icon"></use>
                                    </svg>
                                    </span>
                                </li>

                                <li class="d-flex flex-row space-between a-i-center">
                                    <span>
                                        John Doe
                                    </span>
                                    <span class="trash-btn">
                                    <svg class="trash-icon" width="18" height="18">
                                    <use href="#trash-icon"></use>
                                    </svg>
                                    </span>
                                </li>

                                <li class="d-flex flex-row space-between a-i-center">
                                    <span>
                                        John Doe
                                    </span>
                                    <span class="trash-btn">
                                    <svg class="trash-icon" width="18" height="18">
                                    <use href="#trash-icon"></use>
                                    </svg>
                                    </span>
                                </li>

                                <li class="d-flex flex-row space-between a-i-center">
                                    <span>
                                        John Doe
                                    </span>
                                    <span class="trash-btn">
                                    <svg class="trash-icon" width="18" height="18">
                                    <use href="#trash-icon"></use>
                                    </svg>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-right">
                    <p class="m-b-20">
                        {{__('pages/exams.contact_info_student')}}
                    </p>
                    <div class="fields-container">
                        <div class="search">
                            <x-fields.show-search>
                                {{__('pages/exams.student_mandatory')}}
                            </x-fields.show-search>
                        </div>
                        <div>
                            <p class="medium m-b-16">
                                {{__('pages/exams.selected_students')}}
                            </p>
                            <ul class="d-flex flex-c gap-24 ">
                                @for($i = 0; $i<=4; $i++)
                                <li>
                                <div>
                                    <p class="d-flex flex-row space-between a-i-center m-b-8 italic">
                                        John Doe <span class="trash-btn">
                                    <svg class="trash-icon" width="18" height="18">
                                    <use href="#trash-icon"></use>
                                    </svg>
                                    </span>
                                    </p>
                                    <div class="m-l-12">
                                        <p class="m-b-12 medium">
                                            {{__('pages/exams.projects_mandatory')}}
                                        </p>
                                        <div class="d-flex flex-row gap-12 a-i-center m-b-12">
                                            <div class=" d-flex flex-row gap-8 a-i-center checkbox-projects">
                                                <label for="projects" class="field__label">
                                                    CV
                                                </label>
                                                <input type="checkbox" name="projects" id="projects"
                                                       class="field__input">
                                                @error('projects')
                                                {{$message}}
                                                @enderror
                                            </div>
                                            <span class="trash-btn">
                                       <svg class="trash-icon" width="18" height="18">
                                    <use href="#trash-icon"></use>
                                    </svg>
                                    </span>
                                        </div>
                                        <div class="d-flex flex-row gap-12 a-i-center m-b-12">
                                            <div class="d-flex flex-row gap-8 a-i-center checkbox-projects">
                                                <label for="projects" class="field__label">
                                                    PF
                                                </label>
                                                <input type="checkbox" name="projects" id="projects"
                                                       class="field__input">
                                                @error('projects')
                                                {{$message}}
                                                @enderror
                                            </div>
                                            <span class="trash-btn">
                                      <svg class="trash-icon" width="18" height="18">
                                    <use href="#trash-icon"></use>
                                    </svg>
                                    </span>
                                        </div>
                                        <div class="d-flex flex-row  gap-12 a-i-center">
                                            <div class="d-flex flex-row gap-8 a-i-center checkbox-projects">
                                                <label for="projects" class="field__label">
                                                    ART
                                                </label>
                                                <input type="checkbox" name="projects" id="projects"
                                                       class="field__input">
                                                @error('projects')
                                                {{$message}}
                                                @enderror
                                            </div>
                                            <span class="trash-btn">
                                    <svg class="trash-icon" width="18" height="18">
                                    <use href="#trash-icon"></use>
                                    </svg>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>

        <fieldset class="formfield m-b-32">
                <div class="d-flex flex-row wrap space-between a-i-center">
                    <legend class="h2-title bold">
                        {{__('pages/exams.category_projects')}}
                    </legend>
                    <p class="caption">
                        {{__('pages/exams.mandatory_fields')}}
                    </p>
                </div>

                <p class="m-b-20">
                    {{__('pages/exams.projects_info')}}
                </p>

            <div class="m-b-24">
                <div class="two-columns m-b-24">
                    <div class="search">
                        <x-fields.show-search>
                            {{__('pages/exams.mandatory_projects')}}
                        </x-fields.show-search>
                    </div>
                    <x-buttons.add-btn-secondary>
                        {{__('pages/exams.create_project')}}
                    </x-buttons.add-btn-secondary>
                </div>
                <div>
                    <p class="medium m-b-16">
                        {{__('pages/exams.selected_projects')}}
                    </p>
                    <ul class="d-flex flex-c gap-24 ">
                        @for($j =0; $j<=4; $j++)
                            <li>
                                <div>
                                    <p class="d-flex flex-row  a-i-center gap-24 m-b-8 italic">
                                        CV<span class="trash-btn">
                                    <svg class="trash-icon" width="18" height="18">
                                    <use href="#trash-icon"></use>
                                    </svg>
                                    </span>
                                    </p>
                                    <div class="two-columns">
                                        <div class="m-l-12">
                                            <p class="m-b-12 medium">
                                                {{__('pages/exams.criterias_mandatory')}}
                                            </p>
                                            <ul class="d-flex flex-row wrap criteria-list gap-8">
                                                @for($i =0; $i<4; $i++)
                                                    <li>
                                                        <x-fields.text-no-label name="criteria" id="criteria" value="" placeholder="Headingsmap" wire="criteria">
                                                            {{__('pages/exams.criteria_mandatory')}}
                                                        </x-fields.text-no-label>
                                                    </li>
                                                @endfor
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="text-field">
                                                <label for="percent" class="">
                                                    {{__('pages/exams.weighting')}}
                                                </label>
                                                <div class="d-flex flex-row gap-8 a-i-center">
                                                    <input wire:model.blur="weighting" type="text" name="weighting"
                                                             id="weighting" value=""
                                                             class="field__input small-input" placeholder="16"
                                                             aria-required="true">
                                                    @error('percent')
                                                    <p class="mb-32 error">{{$message}}</p>
                                                    @enderror
                                                    <span>
                                                        %
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>


            <div class="two-columns">
                <p>
                    {{__('pages/exams.criteria_info')}}
                </p>
                <p>
                   {{__('pages/exams.weighting_info')}}
                </p>
            </div>

        </fieldset>

        <x-buttons.submit-btn class="">
            {{__('pages/exams.save_exam')}}
        </x-buttons.submit-btn>
    </form>
    </div>
</main>

