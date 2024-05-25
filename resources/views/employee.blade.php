<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employees</title>
  <link rel="stylesheet" href="style.css"> </head>
<body>

  <h1>Employees</h1>

  @if (count($employees) > 0)
    <table>
      <thead>
        <tr>
          <th>Full Name</th>
          <th>Department</th>
          <th>Position</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($employees as $employee)
          <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->department }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->status }}</td> <td>
              <a href="{{ route('edit.employee', $employee->id) }}">Edit</a>
              <a href="{{ route('delete.employee', $employee->id) }}">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <p>No employees found.</p>
  @endif

</body>
</html>
