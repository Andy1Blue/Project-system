<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #fff;
            color: #636b6f;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .nav {
            margin-bottom: 20px;
        }

        .nav a {
            color: white;
        }

        h1 {
            font-size: 30px;
            font-weight: 600;
        }

        a {
            color: blue;
            text-decoration: none;
        }

        li {
            margin-left: 10px;
        }

        footer {
            margin-top: 20px;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    
    @include('navigation')

<div class="container">
    @yield('content')
</div>

<footer class="bg-dark">
    Project System &copy; 2019
</footer>

</body>
</html>