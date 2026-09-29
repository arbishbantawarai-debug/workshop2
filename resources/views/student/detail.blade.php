<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

    <div class="page-header">
        <div>
            <h1>Student Details</h1>
            <p>View student information</p>
        </div>

        <a href="/students" class="btn btn-secondary">
            ← Back to Students
        </a>
    </div>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <div class="form-card">

        <div class="student-details">

            <div class="detail-item">
                <span class="detail-label">Student ID</span>
                <strong>#{{ $student->id }}</strong>
            </div>

            <div class="detail-item">
                <span class="detail-label">Full Name</span>
                <strong>{{ $student->name }}</strong>
            </div>

            <div class="detail-item">
                <span class="detail-label">Email</span>
                <span>{{ $student->email }}</span>
            </div>

            <div class="detail-item">
                <span class="detail-label">Phone</span>
                <span>{{ $student->phone }}</span>
            </div>

            <div class="detail-item">
                <span class="detail-label">Address</span>
                <span>{{ $student->address ?? 'Not provided' }}</span>
            </div>

            <div class="detail-item">
                <span class="detail-label">Date of Birth</span>
                <span>{{ $student->date_of_birth ?? 'Not provided' }}</span>
            </div>

        </div>

        <div class="form-actions">

            <a href="/students/{{ $student->id }}/edit" class="btn">
                Edit Student
            </a>

            <a href="/students" class="btn btn-secondary">
                Back
            </a>

        </div>

    </div>

</div>

</body>
</html>
