<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

    <div class="page-header">
        <div>
            <h1>Edit Student</h1>
            <p>Update student information</p>
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

        <form action="/students/{{ $student->id }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Full Name</label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', $student->name) }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email', $student->email) }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>

                <input
                    type="text"
                    id="phone"
                    name="phone"
                    value="{{ old('phone', $student->phone) }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="address">Address</label>

                <textarea
                    id="address"
                    name="address"
                    rows="4"
                >{{ old('address', $student->address) }}</textarea>
            </div>

            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>

                <input
                    type="date"
                    id="date_of_birth"
                    name="date_of_birth"
                    value="{{ old('date_of_birth', $student->date_of_birth) }}"
                >
            </div>

            <div class="form-actions">

                <a href="/students/{{ $student->id }}" class="btn btn-secondary">
                    Cancel
                </a>

                <button type="submit" class="btn">
                    Update Student
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>
