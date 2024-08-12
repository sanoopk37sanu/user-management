

<!DOCTYPE html>
<html>
<head>
    <title>New Job Vacancy Created</title>
</head>
<body>
    <h1>New Job Vacancy</h1>
    <p>A new job vacancy has been posted:</p>
    <p><strong>Description:</strong> {{ $jobVacancy['description'] }}</p>
    <p><strong>Location:</strong> {{ $jobVacancy['location'] }}</p>
    <p><strong>Type:</strong> {{ $jobVacancy['type'] }}</p>
</body>
</html>
