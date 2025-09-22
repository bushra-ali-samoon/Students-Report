<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h1>Students</h1>
    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Enter name">
    <input type="email" name="email" placeholder="Enter email">
    <input type="file" name="profile_picture">
    <button type="submit">Save Student</button>
</form>


    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('students.create') }}">Add Student</a>

    <table border="1" cellpadding="10" style="margin-top:20px;">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Profile Picture</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        @if($student->profile_picture)
                            <img src="{{ asset('storage/'.$student->profile_picture) }}" width="50">
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>
