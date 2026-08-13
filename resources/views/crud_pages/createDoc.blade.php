<form  action="/adddoctor" method="POST">
    @csrf
    <h4>Doctor name: </h4>
    <input type="string" name="name" maxlength="20">
    <h4>Fee</h4>
    <input type="string" id="fee" name="fee" maxlength="8">
    <h4>Qualifications</h4>
    <input type="string" autocomplete="off" id="qualifications" name="qualifications" maxlength="10">
    <button type="submit" href="/adddoctor">Add Doctor</button>
</form>
<button><a href="/doctors">Cancel</a></button>