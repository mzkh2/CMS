<x-layout>
    <x-slot:title>
        Patients
    </x-slot:title>
    <body>
        <div  class="doctors-container">
            <h3 class="doc">List of Patients</h3>
            <div class="list-container">
                @foreach ($patients as $patient)
                    <div class="doctor-card">
                        <h3>Name of the Patient: {{ $patient->name }}</h3>
                        <p>Patient Age : {{ $patient->age }}</p>
                        <p>Sickness : {{ $patient->sickness }}
                        <div class="ed-btns">
                            <form method="POST" action="/patient/{{ $patient->id }}/delete">
                                @csrf
                                @method('DELETE')
                                <button type="sumbit">delete</button>
                            <form>
                            <button><a href="/patient/{{ $patient->id }}/edit">Edit</a></buttom>
                        </div>    
                    </div>
                @endforeach
            </div>
            <button class="add-doc-btn">
                <a href="/patient/create">Add Patient</a>
            </button>
        </div>
    </body>
</x-layout>