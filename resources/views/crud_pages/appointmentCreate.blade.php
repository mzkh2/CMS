<form  action="/addappointment" method="POST">
    @csrf

    <select name="doctor_id">
        @foreach ($doctors as $doctor)
            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
        @endforeach
    </select>

    <select name="patient_id">
        @foreach ($patients as $patient)
            <option value="{{ $patient->id }}">{{ $patient->name }}</option>
        @endforeach
    </select>

    <button type="submit">Add Appointment</button>
</form>
<button><a href="/appointments">Cancel</a></button>