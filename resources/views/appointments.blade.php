<x-layout>
    <x-slot:title>
        Appointments
    </x-slot:title>
    <body>
        <div class="doctors-container">
            <h3 class="doc">List of Appointments</h3>
            <div class="list-container"> 
                @foreach ($appointments as $appointment)
                    {{-- @dd($appointment->doctor); --}}
                    <div class="doctor-card">
                        <h3>Doctor: {{ $appointment->doctor->name }}</h3>
                        <p>Patient: {{ $appointment->patient->name }}</p>
                        <p>Fee: {{ $appointment->fee }}</p>
                        <p>Sickness: {{ $appointment->sickness }}</p>
                        <div class="ed-btns">
                            
                            <form method="POST" action="/appointment/{{ $appointment->id }}/delete">
                                @csrf
                                @method('DELETE')
                                <button type="sumbit">delete</button>
                            <form>

                            <button><a href="#">Edit</a></buttom>

                        </div>
                    </div>
                @endforeach
            </div>
            <button class="add-doc-btn">
                <a href="/appointment/create">Add Appointment</a>
            </button>
        </div>
    </body>
</x-layout>

