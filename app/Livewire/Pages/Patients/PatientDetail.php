<?php

namespace App\Livewire\Pages\Patients;

use Livewire\Component;
use App\Models\Patient;

class PatientDetail extends Component
{
    public $patient;

    public function mount($patientId)
    {
        $this->patient = Patient::with('diagnosis')->findOrFail($patientId);
    }

    public function render()
    {
        return view('livewire.patient-detail');
    }
}
