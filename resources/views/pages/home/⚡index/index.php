<?php

use App\Models\Contact;
use App\Models\Jiri;
use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $project_search = '';

    public Project $project;

    public int $state = 1;
    public string $specifications ='';
    public string $name ='';
    public string $project_information= '';

    //project modal
    public bool $isopenProjectCreateModal = false;
    public bool $isopenProjectUpdateModal = false;

    //Jiri

    public Jiri $jiri;
    public $jiri_search = '';
    public string $jiri_name = '';
    public string $jiri_date = '';
    public string $jiri_time = '';
    public string $jiri_state = '';


    public $sortJiriField = 'name';
    public $sortJiriDirection = 'desc';

    protected $queryStringJiri = ['sortJiriField', 'sortJiriDirection'];



//tri
    public $sortField = 'name';
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

    public function sortJirisBy($field)
    {
        if ($this->sortJiriField === $field) {
            $this->sortJiriDirection = $this->sortJiriDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortJiriDirection = 'asc';
        }

        $this->sortJiriField = $field;
    }


    public function openProjectUpdateModal(Project $project)
    {
        $this->project = Project::findOrFail($project->id);

        $this->name = $project->name;
        $this->specifications = $project->specifications ?? '';
        $this->project_information = $project->project_information ?? '';
        $this->state = $project->state;

        $this->isopenProjectUpdateModal = true;
    }

    public function openProjectCreateModal()
    {
        $this->name = '';
        $this->specifications = '';
        $this->project_information = '';
        $this->state = true;

        $this->isopenProjectCreateModal = true;
    }



    public function render(): View
    {
        $projects = Project::get()->all();

        $user_id = Auth::user()->id;

        $currentexams = Jiri::where('user_id', $user_id)
            ->where('state', true)->get();


        return view('pages.home.⚡index.index',  [
            'currentexams' => $currentexams,
            'projects' => Project::query()
                ->where('user_id', $user_id)
                ->where(function ($query){
                    $query->where('name', 'like', '%' . $this->project_search . '%')
                        ->orWhere('project_information', 'like', '%' . $this->project_search . '%')
                        ->orWhere('specifications', 'like', '%' . $this->project_search . '%')
                        ->orWhere('state', 'like', '%' . $this->project_search . '%');
                })
                ->orderBy($this->sortField, $this->sortDirection)
                ->paginate(10, ['*'], 'projectPage')->onEachSide(0),



            'jiris'=>  Jiri::query()
                ->where('user_id', $user_id)
                ->where(function ($query){
                    $query->where('name', 'like', '%' . $this->jiri_search . '%')
                        ->orWhere('date', 'like', '%' . $this->jiri_search . '%')
                        ->orWhere('state', 'like', '%' . $this->jiri_search . '%')->orWhere('time', 'like', '%' . $this->jiri_search . '%');
                })
                ->orderBy($this->sortJiriField, $this->sortJiriDirection)
                ->paginate(10, ['*'], 'jiriPage')->onEachSide(0),
        ])->title(__('general.dashboard'));



        /*
          https://laravel.com/framework/docs/13.x/pagination.#multiple-paginator-instances-per-page
         */

    }


    public function storeProject(): void
    {

        $user_id = Auth::user()->id;

        $validated_data= $this->validate([
            'name'=>'required|string|max:255',
            'specifications'=>'required|string|max:255',
            'project_information'=>'required|string',
        ]);

        $project = Project::create([
            'name'=>$validated_data['name'],
            'user_id'=>$user_id,
            'state'=>1,
            'specifications'=>$validated_data['specifications'],
            'project_information'=>$validated_data['project_information'],
        ]);

        $this->closeModal();
    }

    public function updateProject(): void
    {

        $user_id = Auth::user()->id;

        $validated_data= $this->validate([
            'name'=>'required|string|max:255',
            'specifications'=>'required|string|max:255',
            'project_information'=>'required|string',
            'state'=>'required|bool',
        ]);

        $project = $this->project->update([
            'name'=>$validated_data['name'],
            'state'=>$validated_data['state'],
            'specifications'=>$validated_data['specifications'],
            'project_information'=>$validated_data['project_information'],
        ]);

        $this->closeModal();
    }
    public function updatedProjectSearch(): void
    {
        $this->resetPage('projectPage');
    }
    public function updatedJiriSearch(): void
    {
        $this->resetPage('jiriPage');
    }


};
