<!DOCTYPE html>
<html>
<head>
    <title>Students</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

    <div class="page-header">
        <div>
            <h1>Student List</h1>
            <p>Manage all registered students</p>
        </div>

        <a href="/student/create" class="btn">
            + Add Student
        </a>
    </div>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-wrapper">

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                @forelse($students as $student)

                    <tr>

                        <td>
                            #{{ $student->id }}
                        </td>

                        <td>
                            <strong>{{ $student->name }}</strong>
                        </td>

                        <td>
                            {{ $student->email }}
                        </td>

                        <td>
                            {{ $student->phone }}
                        </td>

                        <td>

                            <div class="actions">

                                <a href="/students/{{ $student->id }}"
                                   class="btn btn-secondary">
                                    View
                                </a>

                                <a href="/students/{{ $student->id }}/edit"
                                   class="btn">
                                    Edit
                                </a>

                                <form action="/students/{{ $student->id }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this student?')">
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="5">

                            <div class="empty-state">
                                <h3>No Students Found</h3>
                                <p>There are currently no students registered.</p>

                                <br>

                                <a href="/student/create" class="btn">
                                    + Add First Student
                                </a>
                            </div>

                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>
