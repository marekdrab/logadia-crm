<div>
    <h1>Patients List</h1>
{{--    <a href="{{ route('patients.create') }}">Create Patient</a>--}}
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
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
                <td>{{ $patient->date_of_birth }}</td>
                <td>{{ $patient->diagnosis }}</td>
                <td>
{{--                    <a href="{{ route('patients.edit', $patient->id) }}">Edit</a>--}}
{{--                    <a href="{{ route('visits.index', $patient->id) }}">Visits</a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
