<div {{ $attributes->class(['bg-opacity']) }} wire:keydown.escape.window ="closeModal()" >
    <button wire:click="closeModal" class="close-modal d-inline">
        {{__('pages/home.close')}}
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
             class="d-inline">
            <path
                d="M6.40331 18.3113L5.69531 17.6033L11.2953 12.0033L5.69531 6.40331L6.40331 5.69531L12.0033 11.2953L17.6033 5.69531L18.3113 6.40331L12.7113 12.0033L18.3113 17.6033L17.6033 18.3113L12.0033 12.7113L6.40331 18.3113Z"
                fill="black"/>
        </svg>
    </button>
    <form wire:submit.prevent="storeProject" class="modal" wire:click.outside="closeModal()">
        @csrf
        <fieldset class="">
            <div class="d-flex flex-c gap-24 ">
                <div>
                    <legend class="h2-title bold">
                        {{__('pages/home.create_a_project')}}
                    </legend>
                    <p class="obligations">
                        {{__('pages/exams.mandatory_fields')}}
                    </p>
                </div>
                <div class="d-flex flex-c gap-24 ">
                    <x-fields.text wire="name" name="name" id="name" placeholder="Projet CV">
                        {{__('pages/home.name_project')}}
                    </x-fields.text>
                    <x-fields.text wire="specifications" name="specifications"
                                   id="specifications" placeholder="https://placeholder.com">
                        {{__('pages/home.specifications_project')}}
                    </x-fields.text>
                    <x-fields.rich-text wire:model="project_information" id="project_information" initial-value=""
                                        name="project_information">
                        {{__('pages/home.description_project')}}
                    </x-fields.rich-text>
                </div>
            </div>
            <x-buttons.submit-btn class="m-t-80 min-w-full">
                {{__('pages/home.create_project')}}
            </x-buttons.submit-btn>
        </fieldset>
    </form>
</div>
