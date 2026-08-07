<x-layout>
    <x-slot:title>
        Doctors
    </x-slot:title>
    <body>
        <div  class="doctors-container">
            <h3 class="doc">List of Doctors</h3>
            <div class="list-container">
                @foreach ($doctors as $doctor)
                    <div class="doctor-card">
                        <h3>Name of the Doctor: {{ $doctor->name }}</h3>
                        <p>Fee: {{ $doctor->fee }}</p>
                        <p>Qualifications : {{ $doctor->qualifications }}
                    </div>
                @endforeach
            </div>
            <button class="add-doc-btn">
                <a href="/doctor/create">Add Doctor</a>
            </button>
        </div>
    </body>
</x-layout>