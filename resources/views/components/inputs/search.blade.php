<label for="search" class="sro">
    {{__('pages/home.search')}}

</label>
<input type="text" name="search" id="search" class="search-input" {{-- value="{{/*$old || */}}"--}} placeholder="{{__('pages/home.search')}}" wire:model.live.debounce.300ms="search">
