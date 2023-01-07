<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    @extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($User as $users)
                            <tr>
                                <td> {{ $users['id'] }}</td>
                                <td>{{ $users['email'] }}</td>
                                <td>{{ $users['password'] }}</td>
                                <td>
                                    <a class="btn btn-danger btn-sm rounded" href="{{ url('delete', $users['id']) }}"
                                        type="button">DELETE</a>
                        
                    
                                    <a class="btn btn-primary btn-sm rounded" href="{{ url('edit', $users['id']) }}"
                                        type="button">EDIT </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-grid col-6 gap-2   mx-auto" >
                    <a class=" btn btn-primary" href="/create">Create User </a>
                </div>
            </div>
        </div>
    </div>
    @endsection('content')
</body>

</html>
