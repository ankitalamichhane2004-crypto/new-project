<form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" placeholder="Enter title">

    <br><br>

    <input type="file" name="video">

    <br><br>

    <button type="submit">Save</button>
</form>