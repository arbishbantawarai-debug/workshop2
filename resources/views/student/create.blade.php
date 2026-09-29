<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

    <div class="page-header">
        <div>
            <h1>Add Student</h1>
            <p>Register a new student</p>
        </div>

        <a href="/students" class="btn btn-secondary">
            ← Back to Students
        </a>
    </div>

    @if($errors->any())
        <div class="error">
            <h3>Please fix the following errors:</h3>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-card">

        <form action="/student" method="POST">

            @csrf

            <div class="form-group">
                <label for="name">Full Name</label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Enter student's full name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Enter student's email"
                    required
                >
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>

                <input
                    type="text"
                    id="phone"
                    name="phone"
                    value="{{ old('phone') }}"
                    placeholder="Enter phone number"
                    required
                >
            </div>

            <div class="form-group">
                <label for="address">Address</label>

                <textarea
                    id="address"
                    name="address"
                    rows="4"
                    placeholder="Enter student's address"
                >{{ old('address') }}</textarea>
            </div>

            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>

                <input
                    type="date"
                    id="date_of_birth"
                    name="date_of_birth"
                    value="{{ old('date_of_birth') }}"
                >
            </div>

            <div class="form-actions">

                <a href="/students" class="btn btn-secondary">
                    Cancel
                </a>

                <button type="submit" class="btn">
                    Save Student
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>
