<form  action="/save/doctor/{{ $doctor->id }}" method="POST">
    @csrf
    <h4>Doctor name: </h4>
    <input type="string" name="name" maxlength="20" value="{{ $doctor->name }}">

    <h4>Fee</h4>
    <input type="string" id="fee" name="fee" maxlength="8" value="{{ $doctor->fee }}">

    <h4>Qualifications</h4>
    <input type="string" autocomplete="off" id="qualifications" name="qualifications" maxlength="10" value="{{ $doctor->qualifications }}">

    <button type="submit">Save Doctor</button>
</form>
<button><a href="/doctors">Cancel</a></button>