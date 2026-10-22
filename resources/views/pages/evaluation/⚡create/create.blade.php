<main class="main-content" id="dashboard-top">
    <x-topbar.topbar>{{__('pages/evaluation.evaluation_of')}}Jean Dupont</x-topbar.topbar>
    <div class="main-container">


        <div class="flex-row d-flex wrap space-between gap-24">
            <x-buttons.return-button></x-buttons.return-button>

            <p class="obligations medium m-b-32">
                {{__('pages/evaluation.mandatory')}}
            </p></div>
    <form action="" class="create-form">
        @for($i=0; $i<=2; $i++)
            <fieldset class="formfield m-b-32">
                <legend class="sro">
                    CV
                </legend>
                <div class="d-flex flex-row gap-32 wrap project-container">
                    <div class="flex-1">
                        <dl>
                            <x-lists.definition-term>
                                {{__('pages/evaluation.project')}}
                            </x-lists.definition-term>
                            <x-lists.definition>
                                CV
                            </x-lists.definition>
                        </dl>
                        <div>
                            <dl>
                                <x-lists.definition-term>
                                    {{__('pages/evaluation.link_project')}}
                                </x-lists.definition-term>
                                <x-lists.definition>
                                    <a href="https://hfezhhfeihfe.com" title="{{__('pages/evaluation.go_to_project')}}">
                                        https://hfezhhfeihfe.com
                                    </a>

                                </x-lists.definition>
                            </dl>
                            <dl>
                                <x-lists.definition-term>
                                    {{__('pages/evaluation.description_project')}}
                                </x-lists.definition-term>
                                <x-lists.definition>
                                    Ici il y a une très grande description du projet que j en'ai pas encore pour le moment parce que je n'ai pas d'idées.
                                </x-lists.definition>
                            </dl>
                        </div>
                    </div>
                    <table class="checklist flex-1">
                        <thead>
                        <tr>
                            <th scope="col">
                                {{__('pages/evaluation.criteria')}}
                            </th>
                            <th scope="col">
                                {{__('pages/evaluation.done')}}
                            </th>
                            <th scope="col">
                                {{__('pages/evaluation.not_done')}}
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                Headingsmap
                            </th>
                            <td>
                                <input type="radio" name="headingsmap" value="yes">
                            </td>
                            <td>
                                <input type="radio" name="headingsmap" value="no">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Contrast
                            </th>
                            <td>
                                <input type="radio" name="contrast" value="yes">
                            </td>
                            <td>
                                <input type="radio" name="contrast" value="no">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Arias
                            </th>
                            <td>
                                <input type="radio" name="aria" value="yes">
                            </td>
                            <td>
                                <input type="radio" name="aria" value="no">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Accessibilité
                            </th>
                            <td>
                                <input type="radio" name="accessibility" value="yes">
                            </td>
                            <td>
                                <input type="radio" name="accessibility" value="no">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Microdatas
                            </th>
                            <td>
                                <input type="radio" name="microdata" value="yes">
                            </td>
                            <td>
                                <input type="radio" name="microdata" value="no">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="flex-1">
                        <div class="comment-project">
                            <x-fields.textarea id="comment" name="comment" wire="comment" placeholder="Michel angelo a bien fait ses projets. Il a quelques difficultés avec le Design et les espaces, mais en global le projet est bien fait. Son headingsmap est correct et dans Totalvalidator il n’a pas d’erreurs. Niveau backend le projet est bien mais il manque un peu de design frontend surtout des animations">
                                {{__('pages/evaluation.comment_project')}}
                            </x-fields.textarea>
                        </div>
                        <div>
                            <div class="text-field">
                                <label for="percent" class="">
                                    {{__('pages/evaluation.points')}}
                                </label>
                                <div class="d-flex flex-row gap-8 a-i-center">
                                    <input wire:model.blur="points" type="text" name="points"
                                           id="points" value=""
                                           class="field__input small-input" placeholder="16"
                                           aria-required="true">
                                    @error('points')
                                    <p class="mb-32 error">{{$message}}</p>
                                    @enderror
                                    <span>
                                        /20
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        @endfor

    <fieldset class="formfield m-b-32">
        <legend class="sro">
            {{__('pages/evaluation.global_evaluation')}}
        </legend>
        <div class="two-columns global-evaluation">
            <x-fields.textarea name="global-comment" id="global-comment" wire="global-comment"
                               placeholder="Michel angelo a bien fait ses projets. Il a quelques difficultés avec le Design et les espaces, mais en global le projet est bien fait. Son headingsmap est correct et dans Totalvalidator il n’a pas d’erreurs. Niveau backend le projet est bien mais il manque un peu de design frontend surtout des animations">
                {{__('pages/evaluation.global_comment')}}
            </x-fields.textarea>
            <div class="global-points">
            <div class="text-field">
                <label for="global-points" class="">
                    {{__('pages/evaluation.global_points')}}
                </label>
                <div class="d-flex flex-row gap-8 a-i-center">
                    <input wire:model.blur="global-points" type="text" name="global-points"
                           id="global-points" value=""
                           class="field__input small-input" placeholder="16"
                           aria-required="true">
                    @error('global-points')
                    <p class="mb-32 error">{{$message}}</p>
                    @enderror
                    <span>
                        /20
                    </span>
                </div>
            </div>
            </div>
        </div>
    </fieldset>

        <x-buttons.submit-btn class="">{{__('pages/evaluation.save')}}</x-buttons.submit-btn>
    </form>
    </div>
</main>
