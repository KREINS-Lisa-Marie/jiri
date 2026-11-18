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

    //contact
    public ?Contact $contact = null;
    public $contact_search = '';
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public $profile_img = null;

    //Contact modal

    public bool $isopenContactModal = false;

    public $sortContactField = 'last_name';
    public $sortContactDirection = 'desc';

    protected $queryStringContact = ['sortContactField', 'sortContactDirection'];

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
    public function archiveContact(Contact $contact)
    {
        if ($contact->archived == false) {
            $contact->update([
                'archived' => true,
            ]);
        }
    }
    public function disarchiveContact(Contact $contact)
    {
        if ($contact->archived == true) {
            $contact->update([
                'archived' => false,
                ]);
        }
    }

    public function sortContactsBy($field)
    {
        if ($this->sortContactField === $field) {
            $this->sortContactDirection = $this->sortContactDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortContactDirection = 'asc';
        }

        $this->sortContactField = $field;
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



    public function openContactModal(Contact $contact)
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->profile_img = null;
        $this->email = '';

        if ($contact->exists) {
        $this->contact = Contact::findOrFail($contact->id);
        $user_id = Auth()->user();

        $this->first_name = $contact->first_name ?? '';
        $this->last_name = $contact->last_name ?? '';
        $this->profile_img = $contact->profile_img ?? null;
        $this->email = $contact->email ?? '';
        }


        $this->isopenContactModal = true;
    }

    public function closeModal(): void
    {
        $this->isopenProjectUpdateModal = false;
        $this->isopenProjectCreateModal = false;
        $this->isopenContactModal = false;
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


            'available_contacts'=> Contact::query()
                ->where('user_id', $user_id)
                ->where('archived', false)
                ->where(function ($query){
                    $query->where('first_name', 'like', '%' . $this->contact_search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->contact_search . '%')
                        ->orWhere('email', 'like', '%' . $this->contact_search . '%');
                })
                ->orderBy($this->sortContactField, $this->sortContactDirection)
                ->paginate(10, ['*'], 'availablePage')->onEachSide(0),
            'archived_contacts'=>  Contact::query()
                ->where('user_id', $user_id)
                ->where('archived', true)
                ->where(function ($query){
                    $query->where('first_name', 'like', '%' . $this->contact_search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->contact_search . '%')
                        ->orWhere('email', 'like', '%' . $this->contact_search . '%');
                })
                ->orderBy($this->sortContactField, $this->sortContactDirection)
                ->paginate(10, ['*'], 'archivedPage')->onEachSide(0),
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
    public function saveContact(): void
    {

        $user_id = Auth::user()->id;

        $validated_data= $this->validate([
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'profile_img'=>'image|nullable|mimes:jpg,jpeg,png,webp',
            'email'=>['required','string','email','max:255','max:255',Rule::unique('contacts')->ignore($this->contact->id)],
        ]);


        if ($this->profile_img){
            //$image_path = $this->profile_img->store(config('contactimage.originals_path'), 's3');
            $image_path = $this->profile_img->store(config('contactimage.originals_path'), 'public');
            $filename = basename($image_path); // = juste le nom de l'image sans les dossiers etc
            $image = Image::decode(          //marche pas avec read
            //    Storage::disk('s3')->get($image_path)
            Storage::disk('public')->get($image_path)
            );
            $sizes = config('contactimage.sizes');
            $extension = config('contactimage.jpg_image_type');
            $compression = config('contactimage.jpg_compression');

            foreach ($sizes as $size){
                $variant = clone $image;

                $variant->scale($size['width']);
                $variant_path = sprintf(
                    config('contactimage.variants_path_pattern'),
                    $size['width'],
                    $size['height']
                );
                /*\Storage::disk('s3')->put($variant_path.'/'.$filename,*/
                    \Storage::disk('public')->put($variant_path.'/'.$filename,
                    $variant->encodeUsingFormat(\Intervention\Image\Format::JPEG, quality: $compression));
            }
        }
        else{
            $image_path = null;
        }


        $validated_data['profile_img'] = $image_path;

        if ($this->contact){
            $this->contact->update($validated_data);
        }else{
            $validated_data['archived'] = false;
            $validated_data['user_id'] = $user_id;
            Contact::create($validated_data);
        }

        $this->closeModal();
    }

    public function updatedProjectSearch(): void
    {
        $this->resetPage('projectPage');
    }
    public function updatedContactSearch(): void
    {
        $this->resetPage('archivedPage');
        $this->resetPage('availablePage');
    }
    public function updatedJiriSearch(): void
    {
        $this->resetPage('jiriPage');
    }


};
