<form  action="/addpatient" method="POST">
    @csrf
    <h4>Patient name: </h4>
    <input type="string" name="name" maxlength="20">
    <h4>Age</h4>
    <input type="number" min="0" id="age" name="age" maxlength="3">
    <h4>Sickness</h4>
    <input type="string" autocomplete="false" id="sickness" name="sickness" maxlength="25">
    <button type="submit">Add Patient</button>
</form>

<button><a href="/pactients">Cancel</a></button>