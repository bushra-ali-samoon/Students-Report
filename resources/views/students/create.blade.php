<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" required>
    <input type="email" name="email" required>
    <input type="file" name="profile_picture">
    <button type="submit">Save</button>
</form>

</body>
</html>
