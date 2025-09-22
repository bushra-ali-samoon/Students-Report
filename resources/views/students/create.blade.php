<!-- <!DOCTYPE html>
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
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Profile Picture:</label>
        <input type="file" name="profile_picture"><br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
  

</head>
<body>
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Photo:</label>
        <input type="file" name="photo"><br><br>

        <button type="submit">Save Student</button>
    </form>
</body>
</html>
