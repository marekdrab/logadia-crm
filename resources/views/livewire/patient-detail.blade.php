<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Patient Detail') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <h1>Patient Details</h1>
                        @if ($patient)
                            <p><strong>Name:</strong> {{ $patient->name }}</p>
                            <p><strong>Date of Birth:</strong> {{ $patient->date_of_birth }}</p>
                            <p><strong>Diagnosis:</strong> {{ $patient->diagnosis->name }}</p>
                            <p><strong>Created At:</strong> {{ $patient->created_at }}</p>
                            <p><strong>Updated At:</strong> {{ $patient->updated_at }}</p>
                            <a href="{{ route('patients.index') }}">Back to Patients List</a>
                        @else
                            <p>Patient not found.</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
