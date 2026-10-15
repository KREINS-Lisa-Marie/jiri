@php
    $currentexam = null;
    $direction = '';
    $sortable = '';
    $exams = [];
    $sortField = 'name';
    $contacts = [];
    $weighting_options = [
               [
                    'name' => "Pas de deuxième pondération",
                    'value' => false,
                ],
                [
                    'name' => "Fixer une deuxième pondération",
                    'value' => true,
                ],
]
@endphp
<main class="main-content" id="dashboard-top">
    <x-topbar.topbar>Dashboard Projet web 2026 - 2027</x-topbar.topbar>
    <div class="main-container">
    <x-buttons.return-button></x-buttons.return-button>
    <section class="m-b-80">
        <x-titles.h2>Évaluations</x-titles.h2>
        <p class="m-b-32">
            Pour visualiser les détails de chaque évaluation, clickuez sur la cellule souhaitée
        </p>

        <div class="scrollable-table">
            <table class="table max-w-admin-web big-table">
                <thead>
                <tr>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')"
                                      :direction="$sortField === 'jiri'? $sortDirection : null"
                                      class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        Contacts
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')"
                                      :direction="$sortField === 'jiri'? $sortDirection : null"
                                      class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        Mes évaluations
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')"
                                      :direction="$sortField === 'jiri'? $sortDirection : null"
                                      class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                            <span class="d-block">
                                Evaluateur
                            </span>
                        <span>
                                John Doe
                            </span>
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')"
                                      :direction="$sortField === 'jiri'? $sortDirection : null"
                                      class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                            <span class="d-block">
                                Evaluateur
                            </span>
                        <span>
                                John Doe
                            </span>
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')"
                                      :direction="$sortField === 'jiri'? $sortDirection : null"
                                      class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                            <span class="d-block">
                                Evaluateur
                            </span>
                        <span>
                                John Doe
                            </span>
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')"
                                      :direction="$sortField === 'jiri'? $sortDirection : null"
                                      class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                            <span class="d-block">
                                Evaluateur
                            </span>
                        <span>
                                John Doe
                            </span>
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')"
                                      :direction="$sortField === 'jiri'? $sortDirection : null"
                                      class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                            <span class="d-block">
                                Evaluateur
                            </span>
                        <span>
                                John Doe
                            </span>
                    </x-table.table-th>
                </tr>
                </thead>
                <tbody>
                @for($i=0; $i <=4; $i++)
                    <tr class="table-row position-relative">
                        <x-table.table-th-no-sort scope="row" class="">
                            <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Contact</span>
                            <div class="td-container">
                                <span class="">Evalué</span>
                                <span class="">John Doe</span>
                            </div>
                        </x-table.table-th-no-sort>
                        {{--<x-table.table-td class="table-full_name">
                            <span class="show-web">--}}{{--{{__('admin/contacts.name_title')}}--}}{{--Contact</span>
                            <div class="td-container">
                                <span class="">
                                                    Evalué
                                                </span>
                                <span class="">
                                                    John Doe
                                                </span>
                            </div>
                        </x-table.table-td>--}}

                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Mes évaluations</span>
                            <span>
                                <x-buttons.not-evaluated></x-buttons.not-evaluated>
                            </span>
                        </x-table.table-td>

                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Evaluateur</span>
                            <span class="show-web">John Doe</span>
                            <x-visuals.evaluated></x-visuals.evaluated>
                        </x-table.table-td>
                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Evaluateur</span>
                            <span class="show-web">John Doe</span>
                            <x-visuals.not-evaluated></x-visuals.not-evaluated>
                        </x-table.table-td>
                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Evaluateur</span>
                            <span class="show-web">John Doe</span>
                            <x-visuals.not-evaluated></x-visuals.not-evaluated>
                        </x-table.table-td>
                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Evaluateur</span>
                            <span class="show-web">John Doe</span>
                            <x-visuals.not-evaluated></x-visuals.not-evaluated>
                        </x-table.table-td>
                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Evaluateur</span>
                            <span class="show-web">John Doe</span>
                            <x-visuals.not-evaluated></x-visuals.not-evaluated>
                        </x-table.table-td>
                    </tr>
                @endfor


                </tbody>
            </table>
        </div>
    </section>

    <section>
        <x-titles.h2>Résultats de l’épreuve</x-titles.h2>

        <div class="scrollable-table">
            <table class="table big-table">
                <thead>
                <tr>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')"
                                      :direction="$sortField === 'jiri'? $sortDirection : null"
                                      class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        Contacts
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')"
                                      :direction="$sortField === 'jiri'? $sortDirection : null"
                                      class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        Projet CV
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')"
                                      :direction="$sortField === 'jiri'? $sortDirection : null"
                                      class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        Projet ART
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')"
                                      :direction="$sortField === 'jiri'? $sortDirection : null"
                                      class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        Cote 1ère pondération
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')"
                                      :direction="$sortField === 'jiri'? $sortDirection : null"
                                      class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        Cote 2ème pondération
                    </x-table.table-th>
                    <x-table.table-th scope="col" sortable wire:click="sortBy('jiri')"
                                      :direction="$sortField === 'jiri'? $sortDirection : null"
                                      class="{{$sortField === 'jiri'? 'active-sort': ''}}">
                        Cote finale
                    </x-table.table-th>
                </tr>
                </thead>

                <tbody>

                @for($i=0; $i <=12; $i++)
                    <tr class="table-row position-relative">
                        <x-table.table-th-no-sort scope="row" class="">
                            <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Contact</span>
                            <div class="td-container">
                                <span class="">Evalué</span>
                                <span class="">John Doe</span>
                            </div>
                        </x-table.table-th-no-sort>
                        {{--         <x-table.table-th-no-sort scope="row" class="">
                                     <span>Evalué</span>
                                     <span >John Doe</span>
                                 </x-table.table-th-no-sort>--}}
                        {{--                    <x-table.table-td class="table-full_name">
                                                <span class="show-web">--}}{{--{{__('admin/contacts.name_title')}}--}}{{--Contact</span>
                                                <div class="td-container">
                                                    <span>Evalué</span>
                                                    <span >John Doe</span>
                                                </div>
                                            </x-table.table-td>--}}

                        <x-table.table-td class="table-full_name">

                            <div class="td-container">
                                <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Projet</span>
                                <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}CV</span>
                            </div>
                            <div class="points-container">
                                <span>Cote</span>
                                <span>16/20</span>
                            </div>
                        </x-table.table-td>

                        <x-table.table-td class="table-full_name">

                            <div class="td-container">
                                <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Projet</span>
                                <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}CV</span>
                            </div>
                            <div class="points-container">
                                <span>Cote</span>
                                <span>16/20</span>
                            </div>
                        </x-table.table-td>

                        <x-table.table-td class="table-full_name">
                            <span
                                class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Cote 1ere pondération</span>
                            <div class="points-container">
                                <span>Note Moyenne</span>
                                <span>16/20</span>
                            </div>
                        </x-table.table-td>
                        <x-table.table-td class="table-full_name">
                            <span
                                class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Cote 2ème pondération</span>
                            <div class="points-container">
                                <span>Note Moyenne</span>
                                <span>16/20</span>
                            </div>
                        </x-table.table-td>
                        <x-table.table-td class="table-full_name">
                            <span class="show-web">{{--{{__('admin/contacts.name_title')}}--}}Note finale</span>
                            <div class=" a-i-center">
                                {{--     <x-fields.text id="points" name="points" placeholder="15" wire="points" value=""></x-fields.text>
                                     <span>/20</span>--}}

                                <label for="percent" class="sro">
                                    Note finale
                                </label>
                                <input wire:model.blur="percent" type="text" name="percent" id="percent" value=""
                                       class="field__input small-input" placeholder="16"
                                       aria-required="true">
                                @error('percent')
                                <p class="mb-32 error">{{$message}}</p>
                                @enderror
                                <span>/20</span>
                            </div>
                        </x-table.table-td>
                    </tr>
                @endfor

                <tr class="table-row position-relative">
                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                            <span class="bold m-b-24 d-block">
                                Première pondération
                            </span>
                        <div>
                            <div class="d-flex flex-c gap-32 p-b-24 m-b-16 border-b-black">
                                <div class="d-flex space-between flex-row">
                                        <span>
                                            CV
                                        </span>
                                    <span>
                                            25%
                                        </span>
                                </div>
                                <div class="d-flex space-between flex-row">
                                        <span>
                                            ART
                                        </span>
                                    <span>
                                            25%
                                        </span>
                                </div>
                                <div class="d-flex space-between flex-row">
                                        <span>
                                            PF
                                        </span>
                                    <span>
                                            25%
                                        </span>
                                </div>
                                <div class="d-flex space-between flex-row">
                                        <span>
                                            PW
                                        </span>
                                    <span>
                                            25%
                                        </span>
                                </div>
                            </div>
                            <div class="d-flex space-between flex-row">
                                    <span>
                                        TOTAL
                                    </span>
                                <span>
                                        100%
                                    </span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <x-fields.select select_name="weighting"
                                         label="{{--{{__('admin/orders.for_who')}}<!--Évaluations-->--}}"
                                         :options="$weighting_options" wire="user_id">
                        </x-fields.select>

                        <form action="">
                            <div>
                                <div class="d-flex flex-c gap-8 p-b-24 m-b-16 border-b-black">
                                    <div class="d-flex space-between flex-row a-i-center">
                                        <span>
                                            CV
                                        </span>
                                        <div class="d-flex space-between flex-row a-i-center gap-8">
                                            <label for="percent" class="sro">
                                                Pourcentage pondération
                                            </label>
                                            <input wire:model.blur="percent" type="text" name="percent" id="percent"
                                                   value="" class="field__input small-input" placeholder="16"
                                                   aria-required="true">
                                            @error('percent')
                                            <p class="mb-32 error">{{$message}}</p>
                                            @enderror
                                            <span>
                                                %
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex space-between flex-row a-i-center">
                                        <span>
                                            ART
                                        </span>
                                        <div class="d-flex space-between flex-row a-i-center gap-8">
                                            <label for="percent" class="sro">
                                                Pourcentage pondération
                                            </label>
                                            <input wire:model.blur="percent" type="text" name="percent" id="percent"
                                                   value="" class="field__input small-input" placeholder="16"
                                                   aria-required="true">
                                            @error('percent')
                                            <p class="mb-32 error">{{$message}}</p>
                                            @enderror
                                            <span>
                                                %
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex space-between flex-row a-i-center">
                                        <span>
                                            PF
                                        </span>
                                        <div class="d-flex space-between flex-row a-i-center gap-8">
                                            <label for="percent" class="sro">
                                                Pourcentage pondération
                                            </label>
                                            <input wire:model.blur="percent" type="text" name="percent" id="percent"
                                                   value="" class="field__input small-input" placeholder="16"
                                                   aria-required="true">
                                            @error('percent')
                                            <p class="mb-32 error">{{$message}}</p>
                                            @enderror
                                            <span>
                                                %
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex space-between flex-row a-i-center">
                                        <span>
                                            PW
                                        </span>
                                        <div class="d-flex space-between flex-row a-i-center gap-8">
                                            <label for="percent" class="sro">
                                                Pourcentage pondération
                                            </label>
                                            <input wire:model.blur="percent" type="text" name="percent" id="percent"
                                                   value="" class="field__input small-input" placeholder="16"
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
                                <div class="d-flex space-between flex-row a-i-center">
                                    <span>
                                        TOTAL
                                    </span>
                                    <span>
                                        100%
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="primary-btn">
                                Enregistrer
                            </button>
                        </form>
                    </td>
                    <td>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </section>
    </div>
</main>
