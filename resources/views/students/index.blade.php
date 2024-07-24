<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.rtl.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>Province</th>
                <th>Zip</th>
                <th>Birthdate</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->fullname}}</td>
                <td>{{ $student->email}}</td>
                <td>{{ $student->phone}}</td>
                <td>{{ $student->address}}</td>
                <td>{{ $student->city}}</td>
                <td>{{ $student->province}}</td>
                <td>{{ $student->zip}}</td>
                <td>{{ $student->birthday}}</td>
                <td>
                    <a href="{{ url('students'), $student->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>
    
</body>
</html>