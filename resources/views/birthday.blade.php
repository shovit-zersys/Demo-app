<form action="{{ route('demopackage.store') }}" method="POST">
    @csrf
    
        <label for="name">Name</label>
        <input type="text" id="name" name="name">

        <label for="gender">Gender</label>
        <input type="text" id="gender" name="gender">

        <button type="submit">Submit</button>

</form>