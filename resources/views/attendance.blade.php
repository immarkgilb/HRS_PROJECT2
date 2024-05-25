<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance</title>
  <link rel="stylesheet" href="style.css"> </head>
<body>

  <h1>Attendance</h1>

  @if (count($attendances) > 0)
    <table>
      <thead>
        <tr>
          <th>Full Name</th>
          <th>Attendance Time/Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($attendances as $attendance)
          <tr>
            <td>{{ $attendance->employee->name ?? $attendance->name }}</td>  <td>{{ $attendance->attendance_time }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <p>No attendance records found.</p>
  @endif

</body>
</html>
