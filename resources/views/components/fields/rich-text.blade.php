@props([
    'initialValue'=>'',
    'name'=>''
    ])
<div
    class="text-field"
    wire:ignore
    x-data
    @trix-blur="$dispatch('change', $event.target.value)" {{$attributes}}
>
    <label for="{!! $name !!}" class="field__label">
        {!! $slot!!}
    </label>
    <input id="{{ $name }}" value="{{$initialValue}}" type="hidden" name="content" >
<trix-editor input="{{ $name }}" class="field__input rich-text-editor"></trix-editor>
</div>
@error($name)
<p class="error">{{ $message }}</p>
@enderror
{{--
https://laravel-livewire.com/screencasts/s4-rich-text
https://trix-editor.org/
https://github.com/basecamp/trix
--}}
