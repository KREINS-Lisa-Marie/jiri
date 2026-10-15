<th scope="{{ $scope }}" class="medium {{ $class }}" {{ $attributes }}>
    {!! $slot!!}
    @if($direction === 'desc')
        ▲
    @elseif($direction === 'asc')
        ▼
    @elseif($sortable)
        ▼▲
    @endif
</th>
