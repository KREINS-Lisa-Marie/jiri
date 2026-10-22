<div class="text-field d-flex flex-col">
    <label for="email" class="field__label medium">
        {{__('auth/login.email')}}*
    </label>
    @error('email')
    <p class="error">
        {{$message}}
    </p>
    @enderror
    <input type="email" id="email" name="email" class="field__input" placeholder="john@doe.com"
           value="{{old('email')}}">
</div>
