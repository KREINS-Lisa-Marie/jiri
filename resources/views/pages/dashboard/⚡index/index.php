<?php

use App\Models\Attendance;
use App\Models\Homework;
use App\Models\Jiri;
use Livewire\Component;

new class extends Component
{

    public $jiri_id;

//tri
    public $sortField = 'first_name';
    public $sortDirection = 'desc';

    protected $queryString = ['sortField', 'sortDirection'];


    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function mount( Jiri $jiri)
    {
        $this->jiri_id = $jiri->id;
    }

    public function render()
    {
        $jiri = Jiri::findOrFail($this->jiri_id);
        $evaluators=  Attendance::with('contact')->where('jiri_id', $jiri->id)->where('role', 1)->get();
        $evaluated = Attendance::with('contact')->where('jiri_id', $jiri->id)->where('role', 0)->get();

        $projects = [];
        $homeworks = Homework::with('project')->where('jiri_id', $jiri->id)->get();
        //https://laravel.com/framework/docs/13.x/eloquent-relationships#eager-loading
        // utiliser with() fait diminuer les requetes

        foreach ($homeworks as $homework){
            $projects[$homework->project_id] = $homework->project->name;        
        }


        return view('pages.dashboard.⚡index.index', [
            'jiri'=>$jiri,
            'evaluated'=>$evaluated,
            'evaluators'=>$evaluators,
            'projects'=>$projects,
        ])->title(__('general.dashboard'));
    }
};
