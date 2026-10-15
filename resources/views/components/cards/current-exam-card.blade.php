@props([
    'currentexam' => null
])
@if($currentexam)

    <div class="flex current-exam-card m-b-80">
        <div class="exam-state">
        </div>
        <div class="d-flex flex-c gap-12">
            <p>
                Épreuve en cours
            </p>
            <p class="medium">
                Projets web 2026-2027
            </p>
        </div>
    </div>
@else
    <div class="no-current-exam-card m-b-80">
        <p class="medium">
            Aucune épreuve en cours pour le moment
        </p>
    </div>
@endif

