{{--
<div class="add-btn primary-btn">
    <a href="" class="medium" title="Aller vers la page ajouter uné épreuve">
        <span>
        <svg class="plus-icon" width="14" height="14">
        <use href="#plus-icon"></use>
        </svg>
        </span>
        <span>
            {{$slot}}
        </span>
    </a>
</div>
--}}


@props([
    'href'=> null,
    'title'=>'',
    'icon'=>'',
    'class'=>'primary-btn',
])

<div class="add-btn {{$class}}">
    @if($href)
    <a href="{{$href}}" class="medium" title="{{$title}}" {{ $attributes }}>
        <span>
            @if($icon == "add")
        <svg class="plus-icon" width="14" height="14">
        <use href="#plus-icon"></use>
        </svg>
            @elseif($icon == "edit")
            <svg class="edit-icon" width="15" height="15">
                <use href="#edit-icon"></use>
            </svg>
            @endif
        </span>
        <span>
            {{$slot}}
        </span>
    </a>
    @else
        <button type="button" class="medium d-flex gap-8 a-i-center" title="{{$title}}" {{ $attributes }}>
        <span>
                @if($icon == "add")
                <svg class="plus-icon" width="14" height="14">
        <use href="#plus-icon"></use>
        </svg>
            @elseif($icon == "edit")
                <svg class="edit-icon" width="15" height="15">
                <use href="#edit-icon"></use>
            </svg>
            @endif
        </span>
        <span>
            {{$slot}}
        </span>
        </button>
    @endif
</div>
