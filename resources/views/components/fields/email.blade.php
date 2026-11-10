<div class="text-field">
    <label for="email" class="field__label">
        {{__('auth/login.email')}}*
    </label>
    <input type="email" id="email" name="email" class="field__input" wire:model.blur="email" placeholder="john@doe.com" value="{{old('email') ?? ''}}" aria-required="true">
    @error('email')
    <p class="error">
        {{$message}}
    </p>
    @enderror
</div>
