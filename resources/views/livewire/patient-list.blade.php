<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Patients') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <h1>Patients List</h1>
                        <div class="mb-4">
                            <input
                                type="text"
                                class="mt-2 mb-2 p-2 border border-gray-300 rounded"
                                placeholder="Search by name"
                                wire:model.live="search"
                            >
                            <input
                                type="number"
                                class="mt-2 mb-2 p-2 border border-gray-300 rounded"
                                placeholder="Filter by age"
                                wire:model.live="age"
                            >
                            <select
                                class="mt-2 mb-2 p-2 border border-gray-300 rounded"
                                wire:model.live="diagnosis"
                            >
                                <option value="">Filter by diagnosis</option>
                                @foreach ($diagnoses as $diagnosis)
                                    <option value="{{ $diagnosis->id }}">{{ $diagnosis->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <table>
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Date of Birth</th>
                                <th>Diagnosis</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>{{ $patient->id }}</td>
                                    <td>{{ $patient->name }}</td>
                                    <td>{{ $patient->age }}</td>
                                    <td>{{ $patient->date_of_birth }}</td>
                                    <td>{{ $patient->diagnosis->name }}</td>
                                    <td>
                                        <a href="{{ route('patients.show', $patient->id) }}">View Details</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $patients->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
