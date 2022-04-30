<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        .container-fluid{
            padding-top: 10%;
            padding-left: 20%;
            padding-right: 20%;
        }
        /* .logout{
          margin-left:45%;
        } */
        .bouter{
            padding-left: 27%;
        }
    </style>
</head>
<body>
    @yield('links')
    @yield('page-view')
</body>
</html>