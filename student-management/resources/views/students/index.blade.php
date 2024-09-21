<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
<h1>Student List</h1>
<a href="{{ route('students.create') }}">Add New Student</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Telephone</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->address }}</td>
        <td>{{ $student->telephone }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
