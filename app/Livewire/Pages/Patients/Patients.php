<?php

namespace App\Livewire\Pages\Patients;

use App\Models\Patient;
use Livewire\Component;

class Patients extends Component
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
