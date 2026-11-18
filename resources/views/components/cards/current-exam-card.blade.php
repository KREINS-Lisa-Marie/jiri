@props([
    'currentexams' => [],
])
@if(count($currentexams) > 0)
    <div class="d-flex flex-row gap-24 wrap">
    @foreach($currentexams as $currentexam)
    <div class="flex current-exam-card m-b-80 position-relative">
        <div class="exam-state">
        </div>
        <div class="d-flex flex-c gap-12">
            <p>
                {{__('pages/home.current_exam')}}
            </p>
            <p class="medium">
                {{$currentexam->name}}
                <a href="{{route('pages::dashboard.index',  ['locale' => app()->getLocale(),  'jiri' => $currentexam->id])}}" title="{{__('pages/home.go_to_current_exam')}}" class="card-link">
                </a>
            </p>
        </div>
    </div>
    @endforeach
    </div>
@else
    <div class="no-current-exam-card m-b-80">
        <p class="medium">
            {{__('pages/home.no_exam')}}
        </p>
    </div>
@endif
