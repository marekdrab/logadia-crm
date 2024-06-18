<?php

namespace App\Livewire\Pages\Patients;

use App\Models\Diagnosis;
use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class Patients extends Component
{
    use WithPagination;

    public $search = '';
    public $age = '';
    public $diagnosis = '';
    protected $queryString = ['search', 'age', 'diagnosis'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingAge()
    {
        $this->resetPage();
    }

    public function updatingDiagnosis()
    {
        $this->resetPage();
    }

    public function render()
    {
        $diagnoses = Diagnosis::all();
        $patients = Patient::query()
            ->when($this->search, function($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->when($this->age, function($query) {
                $query->whereRaw('TIMESTAMPDIFF(YEAR, date_of_birth, CURDATE()) = ?', [$this->age]);
            })
            ->when($this->diagnosis, function($query) {
                $query->whereHas('diagnosis', function($query) {
                    $query->where('id', $this->diagnosis);
                });
            })
            ->paginate(10);

        return view('livewire.patient-list', compact('patients', 'diagnoses'));
    }
}
