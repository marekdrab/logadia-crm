<?php

namespace App\Livewire;

use App\Models\Patient;
use Livewire\Component;

class PatientList extends Component
{
    public $patients;

    public function mount()
    {
        $this->patients = Patient::all();
    }

    public function render()
    {
        return view('livewire.patient-list');
    }
}
