<form  action="/save/patient/{{ $patient->id }}" method="POST">
    @csrf
    <h4>Patient name: </h4>
    <input type="string" name="name" maxlength="20" value="{{$patient->name}}">
    <h4>Age</h4>
    <input type="number" min="0" id="age" name="age" maxlength="3" value="{{ $patient->age }}">
    <h4>Sickness</h4>
    <input type="string" autocomplete="false" id="sickness" name="sickness" maxlength="25" value="{{ $patient->sickness }}">
    <button type="submit">Add Patient</button>
</form>

<button><a href="/pactients">Cancel</a></button>
