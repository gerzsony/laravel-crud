
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Laravel & MariaDB CRUD</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
<body>
    <div class="container">
         @yield('main')  
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>