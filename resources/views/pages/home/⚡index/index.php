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


    public function render(): View
    {

        $user_id = Auth::user()->id;

        $currentexams = Jiri::where('user_id', $user_id)
            ->where('state', true)->get();


        return view('pages.home.⚡index.index',  [
            'currentexams' => $currentexams,
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
          https://laravel.com/framework/docs/master/pagination#multiple-paginator-instances-per-page
         */

    }

    public function updatedJiriSearch(): void
    {
        $this->resetPage('jiriPage');
    }


};
