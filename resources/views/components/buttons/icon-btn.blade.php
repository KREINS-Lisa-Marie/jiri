@props([
    'href'=> null,
    'title'=>'',
    'icon'=>'',
    'class'=>'',
])

<div class="icon-btn">
    @if($href)
        <a href="{{$href}}" class="medium {{$class}}" title="{{$title}}" {{ $attributes }}>
        <span>
            @if($icon == "add")
                <svg class="plus-icon" width="14" height="14">
        <use href="#plus-icon"></use>
        </svg>
            @elseif($icon == "edit")
                <svg class="edit-icon" width="15" height="15">
                <use href="#edit-icon"></use>
            </svg>
            @elseif($icon == "eye")
                <svg class="eye-icon" width="16" height="16">
        <use href="#eye-icon"></use>
    </svg>
            @endif
        </span>
            <span>
            {{$slot}}
        </span>
        </a>
    @else
        <button type="button" class="medium d-flex gap-8 a-i-center {{$class}}" title="{{$title}}" {{ $attributes }}>
        <span>
            @if($icon == "add")
                <svg class="plus-icon" width="14" height="14">
        <use href="#plus-icon"></use>
        </svg>
            @elseif($icon == "edit")
                <svg class="edit-icon" width="15" height="15">
                <use href="#edit-icon"></use>
            </svg>
            @elseif($icon == "eye")
                <svg class="eye-icon" width="16" height="16">
                    <use href="#eye-icon"></use>
                </svg>

            @elseif($icon == "archive")
                <svg class="archive-icon" width="17" height="18">
                    <use href="#archive-icon"></use>
                </svg>

            @elseif($icon == "disarchive")
                <svg class="disarchive-icon" width="17" height="17">
                        <use href="#disarchive-icon"></use>
                </svg>
            @elseif($icon == "trash")
                <svg class="trash-icon" width="18" height="18">
                    <use href="#trash-icon">
                    </use>
                </svg>
            @endif
        </span>
            <span>
            {{$slot}}
        </span>
        </button>
    @endif
</div>
