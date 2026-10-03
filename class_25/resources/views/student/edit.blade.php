<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @fonts

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Student</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('students.update',  $student->id) }}">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $student->name }}">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ $student->phone }}">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput3" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" value="{{ $student->address }}">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput3" class="form-label">Reg No</label>
                <input type="text" class="form-control" name="reg_no" id="reg_no" value="{{ $student->reg_no }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>