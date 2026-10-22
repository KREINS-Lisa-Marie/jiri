<div class="text-field">
<label for="search" class="field__label">
    {!! $slot!!}
</label>
<input type="text" name="search" id="search" class="field__input" {{-- value="{{/*$old || */}}"--}} placeholder="{{__('pages/home.search')}}" wire:model.live.debounce.300ms="search">
</div>
