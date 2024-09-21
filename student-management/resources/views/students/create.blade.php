<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
<h1>Add New Student</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="number" name="age" placeholder="Age" required>
    <input type="text" name="address" placeholder="Address" required>
    <input type="tel" name="telephone" placeholder="Telephone" required>
    <button type="submit">Add Student</button>
</form>
</body>
</html>
