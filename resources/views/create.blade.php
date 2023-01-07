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
    <div class="card position-absolute top-50 start-50  translate-middle  w-50 text-white bg-secondary border-dark " >
        <div class="card-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>Create User</h1>
                <form action="/user" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email"> Your Email:</label>
                        <input class="form-control" type="text" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password"> Your Password:</label>
                        <input class="form-control" type="password" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" id="submit" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>
