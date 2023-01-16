<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mt-5">Student Registration</h1>
    <div class="container">
        <div class="row">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputFirstName" class="form-label">First name</label>
                    <input type="text" name="first_name" class="form-control" id="exampleInputFirstName" />
                </div>
                <div class="mb-3">
                    <label for="exampleInputLastName" class="form-label">Last name</label>
                    <input type="text" name="last_name" class="form-control" id="exampleInputLastName" />
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail"
                        aria-describedby="emailHelp" />
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword">
                </div>
                <a href="{{ route('login') }}" class="btn btn-link">Back to login</a>
                <button type="submit" class="btn btn-primary float-end">Register</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
