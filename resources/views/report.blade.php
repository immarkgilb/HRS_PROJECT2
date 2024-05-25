<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report: Task Progress by Employee</title>
  <link rel="stylesheet" href="style.css"> </head>
<body>

  <h1>Task Progress by Employee</h1>

  @if (count($employees) > 0)
    <table>
      <thead>
        <tr>
          <th>Employee</th>
          <th>Complete Tasks</th>
          <th>Incomplete Tasks</th>
          <th>Total Tasks</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($employees as $employee)
          <?php
          // Assuming you have functions to get complete and incomplete tasks for an employee
          $completeTasksCount = getCompleteTaskCount($employee->id);
          $incompleteTasksCount = getIncompleteTaskCount($employee->id);
          $totalTasksCount = $completeTasksCount + $incompleteTasksCount;
          ?>
          <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $completeTasksCount }}</td>
            <td>{{ $incompleteTasksCount }}</td>
            <td>{{ $totalTasksCount }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <p>No employees found.</p>
  @endif

</body>
</html>
