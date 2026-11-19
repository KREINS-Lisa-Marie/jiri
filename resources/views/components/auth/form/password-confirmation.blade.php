<div class="text-field">
    <label for="password_confirmation" class="field__label medium">
        {{__('auth/reset_password.rewrite_password')}}*
    </label>
    <input type="password" id="password_confirmation" name="password_confirmation" class="field__input {{$class}}" value="" aria-required="true" wire:model.blur="{{$wire}}" placeholder="{{__('auth/login.enter_password')}}">
    @error('password_confirmation')
    <p class="error m-t-16">
        {{$message}}
    </p>
    @enderror
</div>
