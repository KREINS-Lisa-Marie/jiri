<label for="search" class="sro">
    {{--{{__('admin/contacts.search')}}--}}
    Rechercher
</label>
<input type="text" name="search" id="search" class="search-input" {{-- value="{{/*$old || */}}"--}} placeholder="{{--{{__('admin/contacts.searching')}}--}}Rechercher" wire:model.live.debounce.300ms="search">
