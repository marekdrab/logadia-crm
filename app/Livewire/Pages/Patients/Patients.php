<?php

namespace App\Livewire\Pages\Patients;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class Patients extends Component
{
    use WithPagination;

    public function render()
    {
        $patients = Patient::paginate(10); // Adjust the number to however many you want per page
        return view('livewire.patient-list', compact('patients'));
    }
}
