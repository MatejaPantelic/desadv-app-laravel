<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar {
            justify-content: flex-end;
        }

        .welcome {
            text-align: center;
            padding: 50px;
            background-color: #f2f2f2;
            font-size: 24px;
        }

        .central-content {
            background-color: #f2f2f2;
            padding: 50px;
            text-align: center;
        }

        .buttons {
            margin-top: 20px;
        }

        body {
            background-color: #f2f2f2;
        }
    </style>
    <title>Welcome Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div style="width:70%" class="m-auto">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <h4>Welcome</h4>
                    </li>

                </ul>
                @if (Route::has('login'))
                    @auth
                        <a class="nav-link text-secondary" href="{{ route('desadv.index') }}">Home</a>
                    @else
                        <a class="nav-link text-secondary" href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a class="nav-link text-secondary" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>


    <div class="container-fluid welcome">
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>

    <div class="container central-content">
        <div class="row">
            <div class="col">
                <h1 class="display-4">Analyze and manage data with your <br><span class="text-success">DESADV application</h1>
                <p class="lead">The application allows viewing existing DESADV messages and adding new CSV files.</p>
                <div class="buttons pt-5">
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
