<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>For Practice</title>
</head>
<body>

    @auth
        <p>Congrats you are logged in</p>
        <form action="/logout" method="POST">
            @csrf
            <button>logout</button>
        </form>
    @else
    {{-- For loginout --}}
    <div class="container">
        @csrf
        <div class="container d-flex align-items-center vh-100">
            <div class="col-md-6 mx-auto my-2">
                <form action="{{ route('register') }}">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title text-center">Register</h2>
                            <div class="mb-3 g-3">
                                <label for="name">Name
                                    <input name="name" type="text" class="text form-control">
                                </label>
                            </div>
                            <div>
                                <label for="number">Phone No.
                                    <input name="number"type="number" class="number form-control mb-3">
                                </label>
                            </div>
                            <div>
                                <label for="email">Email
                                    <input name="email" type="email" class="email form-control mb-3">
                                </label>
                            </div>
                            <div>
                                <label for="password">password
                                    <input name="password" type="password" class="password form-control mb-3">
                                </label>
                            </div>
                            <button class="btn btn-primary btn-block me-5">Edit</button>
                            <button class="btn btn-secondary btn-block me-2">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- For login --}}
    <div class="container">
        @csrf
        <div class="container d-flex align-items-center vh-100">
            <div class="col-md-6 mx-auto my-3">
                <form action="{{ route('login') }}">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title text-center">Login</h2>
                            <div class="mb-3 g-3">
                                <label for="name">Name
                                    <input name="loginName" type="text" class="text form-control">
                                </label>
                            </div>
                            <div>
                                <label for="password">password
                                    <input name="loginPassword" type="password" class="password form-control mb-3">
                                </label>
                            </div>
                            <button class="btn btn-primary btn-block me-5">Edit</button>
                            <button class="btn btn-secondary btn-block me-2">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endauth
    
</body>
</html>
