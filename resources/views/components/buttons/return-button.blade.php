@props([
    'class'
])
<div class="primary-btn">
    <a href="{{ url()->previous()}}" class="">
        <span>
        <svg class="return-arrow-icon" width="23" height="18">
        <use href="#return-arrow-icon"></use>
        </svg>
        </span>
        {{__('pages/evaluation.return')}}
    </a>
</div>
