<div class="text-field">
    <label for="password" class="field__label medium">
        {{__('auth/login.password')}}*
    </label>
    @error('password')
    <p class="error">
        {{$message}}
    </p>
    @enderror
    <input type="password" id="password" name="password" class="field__input {{$class}}"
           value="{{old('password')}}" aria-required="true" wire:model.blur="{{$wire}}" placeholder="{{__('auth/login.enter_password')}}">
</div>
